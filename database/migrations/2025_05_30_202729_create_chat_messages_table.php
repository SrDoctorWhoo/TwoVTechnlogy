<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('chat_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('contact_id')
                  ->constrained()              // pressupõe tabela contacts + id
                  ->cascadeOnDelete();
            $table->text('message');        // coluna para o texto da mensagem
            $table->boolean('sent_by_us')   // quem enviou: admin (true) ou cliente (false)
                  ->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chat_messages');
    }

};
