// whatsapp-bot/index.js
const venom     = require('venom-bot');
const express   = require('express');
const axios     = require('axios');
const app       = express();

app.use(express.json());

let clientInstance = null;

venom
  .create({
    session: 'twov-session',
    multidevice: true,
    headless: false,
    useChrome: true
  })
  .then(client => {
    console.log('✅ Venom iniciado e conectado!');
    clientInstance = client;

    // Ao receber qualquer mensagem
    client.onMessage(async msg => {
      // evita ecoar mensagens enviadas pelo próprio bot
      if (msg.fromMe) return;

      // constrói payload
      const payload = {
        contact_whatsapp: msg.from,      // ex: "5561999998888@c.us"
        message:           msg.body,
        timestamp:         msg.timestamp   // unix
      };

      try {
        // envia para o Laravel
        await axios.post('http://127.0.0.1:8000/api/whatsapp/incoming', payload);
        console.log('🌐 Mensagem entrante enviada para Laravel.');
      } catch (e) {
        console.error('❌ Erro ao notificar Laravel:', e.message);
      }
    });

    // Inicia API apenas para envios a partir de Laravel
    app.post('/send-message', async (req, res) => {
      if (!clientInstance) {
        return res.status(503).json({ success:false, message:'Bot não pronto.' });
      }
      const { number, message } = req.body;
      try {
        await clientInstance.sendText(`${number}@c.us`, message);
        return res.json({ success:true });
      } catch (e) {
        console.error('Erro ao enviar:', e);
        return res.status(500).json({ success:false, error:e.message });
      }
    });

    app.listen(3001, () => {
      console.log('🚀 API Venom escutando em http://127.0.0.1:3001/send-message');
    });
  })
  .catch(console.error);

  client.onMessage((msg) => {
  // toda vez que chegar mensagem no WhatsApp:
  // você faz um POST para sua aplicação Laravel
  fetch('http://127.0.0.1:8000/api/whatsapp/incoming', {
    method: 'POST',
    headers: { 'Content-Type': 'application/json' },
    body: JSON.stringify({
      from: msg.from,         // número do usuário
      message: msg.body,       // texto
      timestamp: msg.t,        // quando veio
    })
  });
});
