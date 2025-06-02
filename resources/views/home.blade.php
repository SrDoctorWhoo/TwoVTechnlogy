<!DOCTYPE html>
<html lang="pt-br">
<head>
    {{-- SEO META TAGS --}}
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two V Technology - Soluções de TI Inovadoras e Consultoria Estratégica em Goiânia</title> {{-- SEO: Title Otimizado com Localização --}}
    <meta name="description" content="A Two V Technology, localizada em Goiânia, oferece soluções de TI personalizadas, consultoria estratégica, segurança de dados e infraestrutura de ponta para impulsionar o crescimento e a inovação do seu negócio."> {{-- SEO: Meta Description com Localização --}}
    <meta name="keywords" content="soluções de TI Goiânia, consultoria de TI Goiânia, segurança da informação Goiânia, infraestrutura de TI Goiânia, desenvolvimento de software Goiânia, Two V Technology, tecnologia, inovação, empresas de TI em Goiânia"> {{-- SEO: Meta Keywords com Localização --}}
    <meta name="author" content="Two V Technology">
    <meta name="geo.region" content="BR-GO" /> {{-- SEO: Localização Geográfica --}}
    <meta name="geo.placename" content="Goiânia" />
    <meta name="geo.position" content="-16.6869;-49.2648" /> {{-- SEO: Coordenadas aproximadas de Goiânia --}}
    <meta name="ICBM" content="-16.6869, -49.2648" />

    {{-- Open Graph Meta Tags (para Redes Sociais) --}}
    <meta property="og:title" content="Two V Technology - Soluções de TI Inovadoras em Goiânia">
    <meta property="og:description" content="Transformando desafios em resultados extraordinários com tecnologia de ponta e consultoria estratégica em Goiânia.">
    <meta property="og:image" content="{{ asset('img/og-image.png') }}"> {{-- SEO: Adicionar uma imagem para Open Graph (ex: logo ou imagem hero) --}}
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:site_name" content="Two V Technology" />


    {{-- Twitter Card Meta Tags --}}
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Two V Technology - Soluções de TI Inovadoras em Goiânia">
    <meta name="twitter:description" content="Transformando desafios em resultados extraordinários com tecnologia de ponta e consultoria estratégica em Goiânia.">
    <meta name="twitter:image" content="{{ asset('img/twitter-card-image.png') }}"> {{-- SEO: Adicionar uma imagem para Twitter Card --}}

    {{-- FAVICON --}}
    <link rel="icon" href="{{ asset('img/ico.png') }}" type="image/png">
    <link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}"> {{-- SEO: Apple touch icon --}}

    {{-- FONTES --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&family=Roboto+Mono:wght@300;400;500&display=swap" rel="stylesheet">

    {{-- CSS LIBRARIES --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    {{-- GOOGLE SITE VERIFICATION --}}
    <meta name="google-site-verification" content="JuYi-6UxzxgNY_jOWsyz_ySam0oyaJ5SFGxbcnqLkkU" />

    <style>
        :root {
            /* PALETA DE CORES BASEADA NA LOGO E AJUSTES DE CONTRASTE */
            --logo-brand-green: #3DDC84; /* Verde vibrante da logo */
            --logo-brand-light-grey: #EAEAEA; /* Cinza claro/branco da logo */
            --logo-brand-dark-bg: #000000; /* Fundo preto da logo (para referência) */

            /* CORES PRIMÁRIAS E DE ACENTO DO SITE */
            --primary-accent: var(--logo-brand-green); /* Cor de destaque principal */
            --secondary-accent: #00A1E0; /* Azul ciano tecnológico, mais controlado que o anterior */
            --neon-highlight: #50F2A0; /* Um verde neon mais claro para brilhos sutis, derivado do primário */
            --tech-purple-subtle: #7B42F6; /* Roxo sutil para detalhes, se necessário */

            /* FUNDOS E SUPERFÍCIES */
            --dark-bg: #04060A; /* Fundo principal muito escuro para alto contraste */
            --dark-bg-lighter: #0A0F1A; /* Fundo secundário um pouco mais claro */
            --card-bg: rgba(12, 18, 30, 0.88); /* Fundo dos cards, mais opaco e escuro para contraste */
            --card-bg-hover: rgba(16, 22, 40, 0.95); /* Hover dos cards */
            --input-bg: rgba(8, 11, 20, 0.8); /* Fundo dos inputs */
            --input-bg-focus: rgba(10, 14, 25, 0.92); /* Foco dos inputs */

            /* BORDAS E EFEITOS */
            --glass-border: rgba(200, 220, 255, 0.1); /* Borda de vidro ainda mais sutil */
            --glass-border-stronger: rgba(210, 230, 255, 0.18);
            --glow-effect-primary: rgba(var(--primary-accent-rgb), 0.35); /* Brilho primário mais intenso */
            --glow-effect-secondary: rgba(var(--secondary-accent-rgb), 0.28);

            /* TEXTOS - FOCO EM ALTO CONTRASTE */
            --text-light: var(--logo-brand-light-grey); /* Cor clara principal, direto da logo */
            --text-muted: #98A8C0; /* Cinza azulado para texto secundário, bom contraste */
            --text-dark: #0F121A; /* Para raros fundos claros */
            --text-code: var(--neon-highlight); /* Cor para simular texto de código */

            /* OUTRAS VARIÁVEIS */
            --navbar-height-var: 70px;
            --border-radius-main: 10px;
            --border-radius-large: 14px;
            --transition-speed-fast: 0.25s;
            --transition-speed-normal: 0.4s;
            --transition-speed-slow: 0.6s;
        }

        /* VARIÁVEIS RGB (geradas dinamicamente via JS) */
        :root {
            --primary-accent-rgb: 61, 220, 132;
            --secondary-accent-rgb: 0, 161, 224;
            --dark-bg-rgb: 4, 6, 10;
            --text-muted-rgb: 152, 168, 192;
            --logo-brand-light-grey-rgb: 234, 234, 234;
            --neon-highlight-rgb: 80, 242, 160;
            --glass-border-rgb: 200, 220, 255;
            --tech-purple-subtle-rgb: 123, 66, 246;
        }

        /* ESTILOS GLOBAIS */
        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--dark-bg);
            background-image:
                linear-gradient(to bottom, rgba(var(--dark-bg-rgb), 0.97) 0%, rgba(var(--dark-bg-rgb), 1) 75%),
                url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='120' height='120' viewBox='0 0 120 120'%3E%3Crect width='100%' height='100%' fill='%2304060a'/%3E%3Cg fill-opacity='0.02'%3E%3Cpolygon fill='%2300A1E0' points='120 0 0 120 30 120 120 30'/%3E%3Cpolygon fill='%233DDC84' points='0 0 120 120 90 120 0 30'/%3E%3C/g%3E%3C/svg%3E");
            color: var(--text-light);
            line-height: 1.75;
            overflow-x: hidden;
            position: relative;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        html {
            scroll-behavior: smooth;
        }

        /* NAVBAR */
        .navbar {
            padding: 0.7rem 2rem;
            background-color: rgba(var(--dark-bg-rgb), 0.8);
            backdrop-filter: blur(22px) saturate(170%);
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.55);
            transition: background-color var(--transition-speed-normal) ease,
                        padding var(--transition-speed-normal) ease,
                        box-shadow var(--transition-speed-normal) ease;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1030;
            border-bottom: 1px solid var(--glass-border);
        }

        .navbar-brand img {
            max-height: 42px; /* Tamanho padrão do logo na navbar (desktop) */
            width: auto;
            transition: max-height var(--transition-speed-fast) ease, transform var(--transition-speed-fast) ease;
        }
        .navbar-brand:hover img {
            transform: scale(1.08) rotate(-2deg);
        }

        .nav-item {
            padding: 0 0.9rem;
        }

        .nav-link {
            font-size: 0.9rem;
            font-weight: 500;
            color: var(--text-muted);
            position: relative;
            transition: color var(--transition-speed-fast) ease, transform var(--transition-speed-fast) ease, text-shadow var(--transition-speed-fast) ease;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            letter-spacing: 0.3px;
        }

        .nav-link:hover, .nav-link.active {
            color: var(--primary-accent);
            transform: translateY(-2.5px);
            text-shadow: 0 0 10px var(--glow-effect-primary);
        }

        .nav-link::after {
            content: '';
            display: block;
            width: 0;
            height: 2px;
            background: var(--primary-accent);
            transition: width var(--transition-speed-normal) ease;
            position: absolute;
            bottom: 0px;
            left: 0;
            border-radius: 1px;
        }

        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }

        .navbar-toggler {
            border: 1px solid var(--glass-border-stronger);
            padding: .3rem .55rem;
            border-radius: var(--border-radius-main);
        }
        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba(var(--logo-brand-light-grey-rgb), 0.95)' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2.5' d='M4 8h22M4 15h22M4 22h22'/%3e%3c/svg%3e");
        }

        .navbar.scrolled .navbar-brand img {
            max-height: 36px; /* Tamanho do logo na navbar com scroll (desktop) */
        }

        body {
            padding-top: var(--navbar-height-var);
        }

        /* HEADER E BACKGROUNDS DE CIRCUITO */
        .parallax-header {
            height: 100vh;
            min-height: 580px;
            position: relative;
            color: var(--text-light);
            text-align: center;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: hidden;
            background-color: var(--dark-bg);
        }

        .header-circuit-bg {
            position: absolute;
            top: 0; left: 0; width: 100%; height: 100%;
            overflow: hidden;
            z-index: 0;
        }
        .header-circuit-bg::before {
            content: '';
            position: absolute; top: 0; left: 0; right: 0; bottom: 0;
            width: 100%; height: 100%;
            background-image:
                linear-gradient(33deg, rgba(var(--primary-accent-rgb), 0.06) 0.8px, transparent 1px),
                linear-gradient(-57deg, rgba(var(--primary-accent-rgb), 0.06) 0.8px, transparent 1px),
                linear-gradient(85deg, rgba(var(--secondary-accent-rgb), 0.04) 0.6px, transparent 0.8px),
                linear-gradient(-5deg, rgba(var(--secondary-accent-rgb), 0.04) 0.6px, transparent 0.8px);
            background-size: 40px 40px, 40px 40px, 28px 28px, 28px 28px;
            background-position: 0 0, 1px 1px, 3px 0, 0 3px;
            opacity: 0.6;
            pointer-events: none;
            animation: circuitPatternAnimate 22s linear infinite;
        }
        .header-circuit-bg::after {
            content: '';
            position: absolute; top: 0; left: 0; right: 0; bottom: 0;
            width: 100%; height: 100%;
            background-image:
                linear-gradient(to right, transparent 15%, rgba(var(--neon-highlight-rgb), 0.03) 35%, rgba(var(--logo-brand-light-grey-rgb), 0.07) 49%, rgba(var(--logo-brand-light-grey-rgb), 0.09) 50%, rgba(var(--logo-brand-light-grey-rgb), 0.07) 51%, rgba(var(--neon-highlight-rgb), 0.03) 65%, transparent 85%),
                linear-gradient(to bottom, transparent 15%, rgba(var(--neon-highlight-rgb), 0.03) 35%, rgba(var(--logo-brand-light-grey-rgb), 0.07) 49%, rgba(var(--logo-brand-light-grey-rgb), 0.09) 50%, rgba(var(--logo-brand-light-grey-rgb), 0.07) 51%, rgba(var(--neon-highlight-rgb), 0.03) 65%, transparent 85%),
                radial-gradient(circle at 10% 30%, rgba(var(--primary-accent-rgb), 0.12) 0px, transparent 5px),
                radial-gradient(circle at 85% 65%, rgba(var(--secondary-accent-rgb), 0.1) 0px, transparent 7px),
                radial-gradient(circle at 45% 55%, rgba(var(--neon-highlight-rgb), 0.09) 0px, transparent 4px);
            background-size: 100% 5px, 5px 100%, 70px 70px, 100px 100px, 60px 60px;
            background-position: 0 35%, 65% 0, 12px 22px, 65px 75px, 42px 48px;
            opacity: 0.8;
            pointer-events: none;
            animation: cableFlow 16s linear infinite alternate, nodesPulsate 3.8s infinite alternate ease-in-out;
        }

        @keyframes circuitPatternAnimate {
            0% { background-position: 0 0, 1px 1px, 3px 0, 0 3px; opacity: 0.5;}
            50% { background-position: -18px -18px, 19px 19px, -2px 0, 0 -2px; opacity: 0.7;}
            100% { background-position: 0 0, 1px 1px, 3px 0, 0 3px; opacity: 0.5;}
        }
        @keyframes cableFlow {
            0% { background-position: 0 35%, 65% 0, 12px 22px, 65px 75px, 42px 48px; }
            100% { background-position: 0 35%, 65% -230px, -70px -60px, -45px -35px, -28px -28px; }
        }
        @keyframes nodesPulsate {
            0% { opacity: 0.7; transform: scale(0.99); }
            50% { opacity: 0.95; transform: scale(1.02); }
            100% { opacity: 0.7; transform: scale(0.99); }
        }

        .grayscale-hover {
            filter: grayscale(80%) brightness(1.3);
            opacity: 0.7;
            transition: all var(--transition-speed-normal) ease-in-out;
        }
        .grayscale-hover:hover {
            filter: grayscale(0%) brightness(1);
            opacity: 1;
            transform: scale(1.1);
        }

        .parallax-header .header-overlay {
            content: '';
            position: absolute; top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(180deg, rgba(var(--dark-bg-rgb), 0.0) 0%, rgba(var(--dark-bg-rgb), 0.65) 55%, rgba(var(--dark-bg-rgb), 1) 90%);
            z-index: 1;
        }
        .parallax-header .content {
            position: relative;
            z-index: 2;
            padding: 20px;
            max-width: 780px;
        }

        /* Estilo para o ícone no header */
        .header-main-icon {
            font-size: 8rem; /* Tamanho do ícone */
            color: var(--primary-accent);
            margin-bottom: 1.5rem;
            opacity: 0;
            transform: translateY(20px) scale(0.95);
            animation: fadeInUp 1s cubic-bezier(0.23, 1, 0.32, 1) 0.3s forwards, fadeInScale 1s cubic-bezier(0.23, 1, 0.32, 1) 0.3s forwards;
            filter: drop-shadow(0 0 20px var(--glow-effect-primary)); /* Efeito de brilho */
        }
         @media (max-width: 767.98px) {
            .header-main-icon {
                font-size: 6rem; /* Tamanho menor para mobile */
            }
        }


        .main-headline-header {
            font-size: 3rem;
            font-weight: 800;
            margin-top: 0;
            margin-bottom: 0.7rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s cubic-bezier(0.23, 1, 0.32, 1) 0.9s forwards;
            color: var(--text-light);
            text-shadow: 0 2px 18px rgba(0,0,0,0.6);
            letter-spacing: -0.8px;
            line-height: 1.15;
        }
        .sub-headline-header {
            font-size: 1.2rem;
            font-weight: 300;
            color: var(--text-muted);
            margin-bottom: 2.2rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s cubic-bezier(0.23, 1, 0.32, 1) 1.2s forwards;
            max-width: 580px;
            margin-left: auto;
            margin-right: auto;
            line-height: 1.7;
        }

         @media (max-width: 767.98px) {
            .main-headline-header { font-size: 2.1rem; }
            .sub-headline-header { font-size: 1.05rem; }
            /* .logo-header-main { max-width: 170px; } -- Comentado pois foi substituído pelo ícone */
        }

        .btn-gradient-hero {
            margin-top: 0.7rem;
            padding: 0.85rem 2.4rem;
            background: linear-gradient(50deg, var(--primary-accent), var(--secondary-accent));
            border: 1px solid rgba(var(--logo-brand-light-grey-rgb), 0.2);
            color: var(--logo-brand-dark-bg);
            font-weight: 600;
            font-size: 1rem;
            border-radius: var(--border-radius-main);
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s cubic-bezier(0.23, 1, 0.32, 1) 1.5s forwards;
            transition: all var(--transition-speed-fast) cubic-bezier(0.25, 0.8, 0.25, 1);
            text-decoration: none;
            box-shadow: 0 6px 20px var(--glow-effect-primary), 0 4px 12px var(--glow-effect-secondary);
        }

        .btn-gradient-hero:hover {
            background: linear-gradient(50deg, var(--secondary-accent), var(--primary-accent));
            transform: scale(1.06) translateY(-5px);
            box-shadow: 0 10px 30px var(--glow-effect-primary), 0 7px 18px var(--glow-effect-secondary);
            border-color: rgba(var(--logo-brand-light-grey-rgb), 0.4);
        }
        .btn-gradient-hero i {
            margin-left: 0.4rem;
            transition: transform var(--transition-speed-fast) ease;
        }
        .btn-gradient-hero:hover i {
            transform: translateX(4.5px) rotate(5deg);
        }

        /* ESTILOS DAS SEÇÕES */
        section {
            padding: 80px 0;
            overflow: hidden;
            position: relative;
            z-index: 1;
        }
        section.first-section {
             padding-top: 90px;
        }

        section h2.section-title {
            font-size: 2.2rem;
            color: var(--text-light);
            font-weight: 700;
            letter-spacing: 0.1px;
            margin-bottom: 0.9rem;
            text-align: center;
            position: relative;
        }
        section p.section-subtitle {
            font-size: 1.05rem;
            color: var(--text-muted);
            margin-bottom: 3rem;
            text-align: center;
            max-width: 720px;
            margin-left: auto;
            margin-right: auto;
            font-weight: 300;
            line-height: 1.75;
        }
        section h2.section-title::after {
            content: '';
            width: 55px;
            height: 2.5px;
            background: var(--primary-accent);
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 1px;
            box-shadow: 0 0 12px var(--glow-effect-primary);
        }

        /* FUNDOS ESPECÍFICOS DAS SEÇÕES */
        #sobre-nos {
            background-color: var(--dark-bg-lighter);
            background-image:
                linear-gradient(rgba(var(--glass-border-rgb), 0.04) 0.8px, transparent 0.8px),
                linear-gradient(to right, rgba(var(--glass-border-rgb), 0.04) 0.8px, transparent 0.8px);
            background-size: 35px 35px;
        }

        #services {
            background-color: transparent;
            position: relative;
        }
        #services::before {
            content: '';
            position: absolute; top:0; left:0; width:100%; height:100%;
            background-image:
                radial-gradient(circle at 10% 20%, rgba(var(--primary-accent-rgb), 0.035) 0px, transparent 35px),
                radial-gradient(circle at 90% 30%, rgba(var(--secondary-accent-rgb), 0.03) 0px, transparent 45px),
                radial-gradient(circle at 50% 80%, rgba(var(--tech-purple-subtle-rgb), 0.025) 0px, transparent 40px),
                radial-gradient(circle at 25% 75%, rgba(var(--neon-highlight-rgb), 0.02) 0px, transparent 30px);
            opacity: 0.55;
            animation: subtleGlowNodes 9s infinite alternate ease-in-out;
            z-index: -1;
        }
        @keyframes subtleGlowNodes {
            0% { opacity: 0.45; transform: scale(0.98); }
            50% { opacity: 0.75; transform: scale(1.02); }
            100% { opacity: 0.45; transform: scale(0.98); }
        }


        #clientes {
             background-color: var(--dark-bg-lighter);
             background-image:
                repeating-linear-gradient(
                    0deg,
                    transparent,
                    transparent 3.5px,
                    rgba(var(--glass-border-rgb), 0.05) 3.5px,
                    rgba(var(--glass-border-rgb), 0.05) 4.5px
                ),
                repeating-linear-gradient(
                    90deg,
                    transparent,
                    transparent 3.5px,
                    rgba(var(--glass-border-rgb), 0.05) 3.5px,
                    rgba(var(--glass-border-rgb), 0.05) 4.5px
                );
            background-size: 55px 55px;
        }

        #depoimentos {
            background-color: transparent;
            position: relative;
            padding-top: 70px; /* Aumentar padding superior */
            padding-bottom: 90px; /* Aumentar padding inferior para acomodar melhor os cards e paginação */
        }
        #depoimentos::before {
            content: '';
            position: absolute; top:0; left:0; width:100%; height:100%;
            background-image:
                radial-gradient(ellipse at 15% 85%, rgba(var(--text-muted-rgb), 0.018) 0%, transparent 60%),
                radial-gradient(ellipse at 85% 15%, rgba(var(--text-muted-rgb), 0.012) 0%, transparent 70%);
            background-size: 700px 700px, 900px 900px;
            opacity: 0.38;
            z-index: -1;
            animation: energyWaves 15s infinite linear;
        }
        @keyframes energyWaves {
            0% { transform: scale(1); opacity: 0.32; }
            50% { transform: scale(1.05); opacity: 0.52; }
            100% { transform: scale(1); opacity: 0.32; }
        }

        #contact {
            background-color: var(--dark-bg-lighter);
            background-image: radial-gradient(ellipse at center 20%, rgba(var(--secondary-accent-rgb), 0.035) 0%, transparent 70%);
        }


        /* SEÇÃO SOBRE NÓS */
        .about-content { max-width: 820px; margin: 0 auto; }
        .about-text p { font-size: 1rem; line-height: 1.8; margin-bottom: 1.2rem; color: var(--text-muted); }
        .about-text strong { color: var(--primary-accent); font-weight: 500; }
        .about-values { margin-top: 2.5rem; }
        .value-item { text-align: center; padding: 16px; }
        .value-item i {
            font-size: 2.4rem;
            color: var(--secondary-accent);
            margin-bottom: 0.7rem; display: block;
            transition: transform var(--transition-speed-fast) ease, color var(--transition-speed-fast) ease, text-shadow var(--transition-speed-fast) ease;
        }
        .value-item:hover i {
            transform: scale(1.1) translateY(-3px) rotate(5deg);
            color: var(--primary-accent);
            text-shadow: 0 0 18px var(--glow-effect-primary);
        }
        .value-item h5 { font-size: 1.15rem; font-weight: 600; color: var(--text-light); margin-bottom: 0.3rem; }
        .value-item p { font-size: 0.85rem; color: var(--text-muted); }


        /* SEÇÃO DE SERVIÇOS (CARDS) */
        .service-box {
            background-color: var(--card-bg);
            backdrop-filter: blur(20px) saturate(165%);
            padding: 26px;
            border-radius: var(--border-radius-large);
            transition: transform var(--transition-speed-normal) cubic-bezier(0.175, 0.885, 0.32, 1.275),
                        box-shadow var(--transition-speed-normal) cubic-bezier(0.175, 0.885, 0.32, 1.275),
                        background-color var(--transition-speed-normal) ease,
                        border-color var(--transition-speed-normal) ease;
            text-align: left;
            border: 1px solid var(--glass-border);
            margin-bottom: 26px;
            display: flex;
            flex-direction: column;
            min-height: 300px;
            box-shadow: 0 8px 30px rgba(0,0,0,0.4), inset 0 0 90px rgba(var(--glass-border-rgb), 0.06);
            position: relative;
        }
         .service-box-header { display: flex; align-items: flex-start; margin-bottom: 1.1rem; }
        .service-box i.service-icon {
            font-size: 2rem;
            color: var(--primary-accent);
            transition: color var(--transition-speed-fast) ease, transform var(--transition-speed-fast) ease, text-shadow var(--transition-speed-fast) ease;
            margin-right: 0.8rem; width: 42px; text-align: center; flex-shrink: 0; line-height: 1;
        }
        .service-box h4 {
            font-size: 1.2rem; font-weight: 600; color: var(--text-light);
            transition: color var(--transition-speed-fast) ease; margin-bottom: 0.4rem;
        }
        .service-box p { color: var(--text-muted); font-size: 0.85rem; line-height: 1.7; flex-grow: 1; margin-bottom: 1.1rem; }
        .service-box .learn-more-link {
            color: var(--primary-accent); font-weight: 500; text-decoration: none;
            display: inline-flex; align-items: center;
            transition: color var(--transition-speed-fast) ease, letter-spacing var(--transition-speed-fast) ease, transform var(--transition-speed-fast) ease;
            margin-top: auto; padding: 3px 0; font-size: 0.88rem;
        }
        .service-box .learn-more-link i.link-arrow {
            margin-left: 0.35rem; font-size: 0.8em; color: var(--primary-accent);
            transition: transform var(--transition-speed-fast) ease, color var(--transition-speed-fast) ease;
        }
        .service-box .learn-more-link:hover { color: var(--secondary-accent); letter-spacing: 0.4px; transform: translateX(1px); }
         .service-box .learn-more-link:hover i.link-arrow { color: var(--secondary-accent); transform: translateX(3.5px); }

        .service-box:hover {
            transform: translateY(-12px) scale(1.01);
            box-shadow: 0 18px 50px rgba(0,0,0,0.5),
                        0 0 25px var(--glow-effect-primary),
                        inset 0 0 110px rgba(var(--glass-border-rgb), 0.09);
            background-color: var(--card-bg-hover);
            border-color: rgba(var(--primary-accent-rgb), 0.6);
        }
        .service-box:hover i.service-icon {
            transform: scale(1.1) rotate(-8deg);
            text-shadow: 0 0 12px var(--glow-effect-primary);
        }

        /* SEÇÃO CLIENTES (CARROSSEL) */
        .client-logo-carousel .carousel-inner { padding: 0.7rem 0; }
        .client-logo-carousel .client-logo-item { display: flex; align-items: center; justify-content: center; height: 90px; padding: 0 10px; }
        .client-logo-carousel .client-logo-item img {
            max-height: 65px;
            width: auto; max-width: 100%;
            filter: grayscale(80%) brightness(1.6) contrast(0.75);
            opacity: 0.65;
            transition: filter var(--transition-speed-fast) ease, opacity var(--transition-speed-fast) ease, transform var(--transition-speed-fast) ease;
        }
        .client-logo-carousel .client-logo-item img:hover {
            filter: grayscale(0%) brightness(1) contrast(1); opacity: 1; transform: scale(1.12);
        }
        .carousel-control-prev-icon, .carousel-control-next-icon {
            background-color: rgba(var(--primary-accent-rgb), 0.4);
            border-radius: 50%; padding: 7px; background-size: 40% 40%;
        }
        .carousel-control-prev, .carousel-control-next { width: 3.5%; }
        .carousel-indicators li {
            background-color: rgba(var(--primary-accent-rgb), 0.35);
            border-radius: 50%; width: 8px; height: 8px; margin: 0 3.5px;
            transition: background-color var(--transition-speed-fast) ease;
        }
        .carousel-indicators .active { background-color: var(--primary-accent); box-shadow: 0 0 8px var(--glow-effect-primary); }


        /* SEÇÃO DEPOIMENTOS - MELHORIAS */
        .testimonial-swiper {
            overflow: visible; /* Permitir que sombras/elementos vazem um pouco se necessário */
            padding-top: 10px; /* Espaço para elementos acima dos cards, se houver */
            padding-bottom: 50px; /* Espaço extra para paginação e sombras */
        }
        .testimonial-card {
            background: linear-gradient(145deg, rgba(var(--card-bg-rgb, 12, 18, 30), 0.92) 0%, rgba(var(--dark-bg-lighter-rgb, 10, 15, 26), 0.85) 100%); /* Gradiente sutil no card */
            backdrop-filter: blur(18px) saturate(160%);
            border: 1px solid var(--glass-border);
            padding: 1.8rem 1.5rem; /* Padding ajustado */
            border-radius: var(--border-radius-large);
            box-shadow: 0 10px 35px rgba(var(--dark-bg-rgb), 0.5), /* Sombra mais escura e definida */
                        inset 0 1px 0 rgba(var(--logo-brand-light-grey-rgb), 0.05), /* Destaque interno sutil no topo */
                        inset 0 0 50px rgba(var(--primary-accent-rgb), 0.03); /* Brilho interno sutil */
            text-align: left; /* Alinhar texto à esquerda para um look mais profissional */
            height: auto; /* Altura automática para se ajustar ao conteúdo */
            min-height: 280px; /* Altura mínima para consistência */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform var(--transition-speed-normal) ease,
                        box-shadow var(--transition-speed-normal) ease,
                        border-color var(--transition-speed-normal) ease;
            position: relative; /* Para posicionar elementos ::before/::after se necessário */
        }
        .testimonial-card:hover {
            transform: translateY(-10px) scale(1.02); /* Efeito de elevação mais sutil */
            box-shadow: 0 18px 50px rgba(var(--dark-bg-rgb), 0.6),
                        0 0 25px var(--glow-effect-primary), /* Brilho primário no hover */
                        inset 0 1px 0 rgba(var(--logo-brand-light-grey-rgb), 0.08),
                        inset 0 0 70px rgba(var(--primary-accent-rgb), 0.05);
            border-color: rgba(var(--primary-accent-rgb), 0.4); /* Borda acentuada no hover */
        }
        .testimonial-card-header { /* Novo container para foto e nome/cargo */
            display: flex;
            align-items: center;
            margin-bottom: 1rem;
        }
        .testimonial-card img.client-photo {
            width: 60px; /* Foto um pouco menor para layout mais limpo */
            height: 60px;
            object-fit: cover;
            border-radius: 50%;
            margin-right: 1rem; /* Espaço entre foto e texto */
            border: 2px solid var(--primary-accent); /* Borda com cor primária */
            box-shadow: 0 0 15px rgba(var(--primary-accent-rgb), 0.2);
        }
        .testimonial-client-info {
            text-align: left;
        }
        .testimonial-card .client-name {
            font-weight: 600;
            color: var(--text-light);
            font-size: 1.05rem; /* Tamanho do nome do cliente */
            margin-bottom: 0.1rem; /* Menos espaço abaixo do nome */
        }
        .testimonial-card .client-company {
            font-size: 0.8rem;
            color: var(--primary-accent); /* Cargo com cor de destaque */
            font-weight: 500;
            letter-spacing: 0.3px;
        }
        .testimonial-card .quote-icon { /* Ícone de citação posicionado */
            font-size: 3rem; /* Ícone maior e mais impactante */
            color: var(--primary-accent);
            opacity: 0.15; /* Mais sutil */
            position: absolute;
            top: 1rem;
            right: 1rem;
            transform: rotate(5deg);
            z-index: 0;
        }
        .testimonial-card blockquote.testimonial-text { /* Estilo do texto do depoimento */
            font-size: 0.9rem;
            font-style: normal; /* Remover itálico para um look mais limpo */
            color: var(--text-muted);
            margin-bottom: 0; /* Remover margem inferior, o flex fará o espaçamento */
            line-height: 1.65;
            flex-grow: 1; /* Para ocupar o espaço disponível */
            position: relative; /* Para o z-index funcionar em relação ao quote-icon */
            z-index: 1;
            padding-left: 0; /* Remover padding se não houver ícone de citação à esquerda */
        }

        .swiper-pagination {
            position: absolute;
            bottom: 10px !important; /* Ajustar posição da paginação */
            left: 50%;
            transform: translateX(-50%);
            width: auto !important;
        }
        .swiper-pagination-bullet {
            background-color: rgba(var(--primary-accent-rgb), 0.5); opacity: 0.7;
            width: 9px; /* Tamanho das bolinhas */
            height: 9px;
            margin: 0 5px !important; /* Espaçamento entre bolinhas */
            transition: background-color var(--transition-speed-fast) ease, opacity var(--transition-speed-fast) ease, transform var(--transition-speed-fast) ease;
        }
        .swiper-pagination-bullet-active {
            background-color: var(--primary-accent); opacity: 1;
            transform: scale(1.2); /* Destaque na bolinha ativa */
            box-shadow: 0 0 8px var(--glow-effect-primary);
        }


        /* SEÇÃO DE CONTATO (FORMULÁRIO) */
        .contact-form-wrapper { position: relative; max-width: 720px; margin: 0 auto; }
        .contact-form-container {
            background-color: var(--card-bg);
            backdrop-filter: blur(20px) saturate(175%);
            padding: 2.5rem;
            border-radius: var(--border-radius-large);
            box-shadow: 0 15px 50px rgba(0,0,0,0.5), inset 0 0 100px rgba(var(--glass-border-rgb), 0.07);
            border: 1px solid var(--glass-border);
            border-top: 3.5px solid var(--primary-accent);
            position: relative; z-index: 2;
        }
        .contact-form-wrapper::before, .contact-form-wrapper::after {
            content: ''; position: absolute; z-index: 1; opacity: 0.07;
            background-repeat: no-repeat; pointer-events: none;
            transition: opacity var(--transition-speed-slow) ease;
        }
        .contact-form-wrapper:hover::before, .contact-form-wrapper:hover::after { opacity: 0.12; }
        .contact-form-wrapper::before {
            width: 150px; height: 150px;
            background: radial-gradient(circle, rgba(var(--primary-accent-rgb), 0.45) 0%, transparent 60%);
            top: -50px; left: -80px; transform: rotate(-20deg);
            border-radius: 30% 70% 70% 30% / 70% 40% 60% 30% ;
        }
         .contact-form-wrapper::after {
            width: 130px; height: 130px;
            background: radial-gradient(circle, rgba(var(--secondary-accent-rgb), 0.4) 0%, transparent 60%);
            bottom: -60px; right: -70px; transform: rotate(25deg);
            border-radius: 70% 30% 30% 70% / 30% 60% 40% 70% ;
        }

        .contact-form .form-group { margin-bottom: 1.4rem; }
        .contact-form label {
            display: block; margin-bottom: 0.45rem; color: var(--text-muted);
            font-weight: 500; font-size: 0.88rem; text-align: left;
            letter-spacing: 0.2px;
        }
        .form-control, .form-select {
            border-radius: var(--border-radius-main); padding: 0.85rem 1.1rem;
            background-color: var(--input-bg); border: 1px solid var(--glass-border);
            color: var(--text-light); font-size: 0.9rem;
            transition: border-color var(--transition-speed-fast) ease,
                        box-shadow var(--transition-speed-fast) ease,
                        background-color var(--transition-speed-fast) ease;
            width: 100%;
        }
        .form-control::placeholder { color: rgba(var(--text-muted-rgb), 0.65); }
         .form-select { color: var(--text-light); }
        .form-select option[value=""] { color: rgba(var(--text-muted-rgb), 0.65); }
        .form-select option { color: var(--text-dark); background-color: #f8f9fa; }

        .form-control:focus, .form-select:focus {
            background-color: var(--input-bg-focus);
            border-color: var(--primary-accent);
            box-shadow: 0 0 0 0.2rem rgba(var(--primary-accent-rgb), 0.25), 0 0 12px rgba(var(--primary-accent-rgb), 0.15);
            color: #ffffff; outline: none;
        }
        .form-select {
            appearance: none;
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='14' height='14' fill='%23a0b0c8' viewBox='0 0 16 16'%3e%3cpath fill-rule='evenodd' d='M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z'/%3e%3c/svg%3e");
            background-repeat: no-repeat;
            background-position: right 0.8rem center;
            background-size: 0.8em 0.8em;
        }
        textarea.form-control { resize: vertical; min-height: 130px; }

        .btn-custom-submit {
            background: linear-gradient(50deg, var(--primary-accent), var(--secondary-accent));
            color: var(--dark-bg);
            padding: 0.85rem 2.2rem;
            border-radius: var(--border-radius-main); border: 1px solid rgba(var(--logo-brand-light-grey-rgb),0.15);
            transition: all var(--transition-speed-fast) cubic-bezier(0.25, 0.8, 0.25, 1);
            font-weight: 600; font-size: 1rem;
            display: inline-flex; align-items: center; gap: 0.55rem; width: 100%;
            box-shadow: 0 5px 20px var(--glow-effect-primary);
        }
         @media (min-width: 576px) { .btn-custom-submit { width: auto; } }
        .btn-custom-submit:hover {
            background: linear-gradient(50deg, var(--secondary-accent), var(--primary-accent));
            transform: translateY(-3.5px) scale(1.04);
            box-shadow: 0 9px 28px var(--glow-effect-primary), 0 0 12px var(--glow-effect-secondary);
            border-color: rgba(var(--logo-brand-light-grey-rgb),0.3);
        }
         .btn-custom-submit i { transition: transform var(--transition-speed-fast) ease; }
        .btn-custom-submit:hover i { transform: translateX(3px) rotate(6deg); }

        /* BOTÃO WHATSAPP */
        .whatsapp-contact-area { margin-top: 2.8rem; padding-top: 2rem; border-top: 1px solid var(--glass-border); }
         .whatsapp-contact-area p { font-size: 1rem; margin-bottom: 1.2rem; color: var(--text-muted); }
        .btn-whatsapp {
            display: inline-flex; align-items: center; justify-content: center;
            background-color: var(--primary-accent); color: #020305;
            font-size: 1rem; padding: 0.8rem 1.9rem;
            border-radius: var(--border-radius-main); text-transform: uppercase;
            font-weight: 600; letter-spacing: 0.4px;
            transition: all var(--transition-speed-fast) ease;
            box-shadow: 0px 6px 20px rgba(var(--primary-accent-rgb), 0.38); text-decoration: none;
            border: 1px solid rgba(var(--dark-bg-rgb),0.1);
        }
        .btn-whatsapp i { margin-right: 0.65rem; font-size: 1.25rem; }
        .btn-whatsapp:hover {
            background-color: var(--neon-highlight);
            transform: scale(1.055) translateY(-3px);
            box-shadow: 0px 9px 26px rgba(var(--primary-accent-rgb), 0.48);
            border-color: rgba(var(--dark-bg-rgb),0.2);
        }

        /* FOOTER */
        footer {
            background-color: #020306;
            color: var(--text-muted); padding: 2.5rem 0; font-size: 0.82rem;
            border-top: 1px solid var(--glass-border);
            text-align: center;
        }
        footer p { margin-bottom: 0; line-height: 1.6; }
        footer span { color: var(--primary-accent); font-weight: 500; }
        .footer-social-icons {
            margin-top: 0.8rem;
        }
        .footer-social-icons a {
            color: var(--text-muted);
            font-size: 1.2rem;
            margin: 0 0.6rem;
            transition: color var(--transition-speed-fast) ease, transform var(--transition-speed-fast) ease;
        }
        .footer-social-icons a:hover {
            color: var(--primary-accent);
            transform: scale(1.15);
        }


        /* ANIMAÇÕES GERAIS */
        @keyframes fadeInUp { from { opacity: 0; transform: translateY(25px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes fadeInScale { from { opacity: 0; transform: translateY(20px) scale(0.97); } to { opacity: 1; transform: translateY(0) scale(1); } }

        .animate-on-scroll { opacity: 0; transition: opacity var(--transition-speed-slow) ease-out, transform var(--transition-speed-slow) ease-out; }
        .animate-on-scroll.is-visible { opacity: 1; transform: none !important; }
        .fade-in-up { transform: translateY(20px); }
        .fade-in-down { transform: translateY(-20px); }
        .scale-in { transform: scale(0.97); }


        /* RESPONSIVIDADE */
        @media (max-width: 991.98px) { /* Tablets e menores */
            .navbar { padding: 0.6rem 1.5rem; }
            .navbar-nav {
                background-color: rgba(var(--dark-bg-rgb), 0.98); backdrop-filter: blur(18px);
                padding: 0.3rem 0; border-top: 1px solid var(--glass-border);
                border-radius: 0 0 var(--border-radius-main) var(--border-radius-main);
            }
            .nav-item { padding: 0; }
            .nav-link { padding: 0.65rem 1.5rem; }
            .nav-link::after { left: 1.5rem; transform: translateX(0); }
            .service-box { min-height: auto; padding: 20px; }
            section { padding: 65px 0; }
            #depoimentos { padding-top: 50px; padding-bottom: 70px;} /* Ajuste de padding para tablets */
            .contact-form-wrapper::before, .contact-form-wrapper::after { display: none; }
            .testimonial-card { margin-left: 8px; margin-right: 8px; padding: 1.5rem 1.2rem; } /* Padding ajustado para tablet */
        }

        @media (max-width: 767.98px) { /* Mobile */
            :root { --navbar-height-var: 60px; }

            /* Ajuste do tamanho do logo na navbar mobile para maior visibilidade */
            .navbar:not(.scrolled) .navbar-brand img {
                max-height: 48px;
            }
            .navbar.scrolled .navbar-brand img {
                max-height: 40px;
            }

            .main-headline-header { font-size: 1.9rem; letter-spacing: -0.6px; }
            .sub-headline-header { font-size: 0.95rem; }
            /* .logo-header-main { max-width: 150px; margin-bottom: 0.8rem; } -- Comentado pois foi substituído pelo ícone */
            .btn-gradient-hero { font-size: 0.9rem; padding: 0.7rem 1.6rem;}

            section h2.section-title { font-size: 1.7rem; }
            section p.section-subtitle { font-size: 0.85rem; margin-bottom: 2.5rem; }
            section h2.section-title::after { width: 45px; height: 2px; bottom: -8px; }

            .service-box i.service-icon { font-size: 1.8rem; width: 32px; }
            .service-box h4 { font-size: 1.05rem; }
            .service-box p { font-size: 0.82rem; }

            #depoimentos { padding-top: 40px; padding-bottom: 60px;} /* Ajuste de padding para mobile */
            .testimonial-card { padding: 1.2rem 1rem; min-height: 260px; } /* Padding e min-height para mobile */
            .testimonial-card img.client-photo { width: 50px; height: 50px; margin-bottom: 0.6rem; }
            .testimonial-card .quote-icon { font-size: 2.5rem; top: 0.8rem; right: 0.8rem;}
            .testimonial-card p.testimonial-text { font-size: 0.85rem; }
            .testimonial-card .client-name { font-size: 0.95rem; }


            .contact-form-container { padding: 1.6rem 1.2rem; }
            .contact-form .form-group { margin-bottom: 1rem; }

            .btn-whatsapp { font-size: 0.9rem; padding: 0.7rem 1.5rem; }
            .btn-whatsapp i { font-size: 1.1rem; }
        }

        /* ALERTAS DE STATUS */
        .status-alert {
            position: fixed;
            top: calc(var(--navbar-height-var) + 10px);
            left: 50%; transform: translateX(-50%);
            z-index: 1050; min-width: 280px; max-width: 90%;
            box-shadow: 0 8px 28px rgba(0,0,0,0.45);
            border-left: 4.5px solid;
            background-color: var(--card-bg); backdrop-filter: blur(18px);
            color: var(--text-light); border-radius: var(--border-radius-main);
            padding: 0.9rem 1.15rem;
        }
        .alert-success { border-left-color: var(--primary-accent); box-shadow: 0 0 18px var(--glow-effect-primary); }
        .alert-danger { border-left-color: #e74c3c; box-shadow: 0 0 18px rgba(231, 76, 60, 0.35); }
        .alert-dismissible .close {
            padding: 0.4rem 0.9rem; color: var(--text-light); opacity: 0.75;
            font-size: 1.4rem; line-height: 1;
            transition: opacity var(--transition-speed-fast) ease;
        }
         .alert-dismissible .close:hover { opacity: 1; }

    </style>
</head>

@if(session('success'))
    {{-- Alerta de sucesso da sessão (Blade) --}}
    <div class="alert alert-success alert-dismissible fade show status-alert" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif


<body>
    {{-- BARRA DE NAVEGAÇÃO --}}
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#home" aria-label="Página Inicial Two V Technology">
                <img src="{{ asset('img/LogoDark.png') }}" alt="Logo Two V Technology">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegação">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link active" href="#home">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link" href="#sobre-nos">Sobre Nós</a></li>
                    <li class="nav-item"><a class="nav-link" href="#services">Serviços</a></li>
                    <li class="nav-item"><a class="nav-link" href="#clientes">Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="#depoimentos">Depoimentos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#contact">Contato</a></li>
                </ul>
            </div>
        </div>
    </nav>

    {{-- Placeholder para mensagens de status dinâmicas via JavaScript (se necessário) --}}
    <div id="statusMessages"></div>

    {{-- SEÇÃO HEADER --}}
    <header id="home" class="parallax-header" role="banner">
        <div class="header-circuit-bg" aria-hidden="true"></div>
        <div class="header-overlay" aria-hidden="true"></div>
        <div class="content text-center">
            {{-- Ícone de computador substituindo a logo antiga no header --}}
            <i class="fas fa-laptop-code header-main-icon" aria-hidden="true"></i>
            {{-- <img src="{{ asset('img/Twov5.png') }}" alt="Logo Principal Two V Technology no Header" class="logo-header-main animate-on-scroll fadeInScale"> --}}
            <h1 class="main-headline-header animate-on-scroll fadeInUp" style="animation-delay: 0.2s;">Soluções em TI que Impulsionam Seu Negócio</h1>
            <p class="sub-headline-header animate-on-scroll fadeInUp" style="animation-delay: 0.4s;">Tecnologia, Inovação e Consultoria Estratégica para transformar seus desafios em resultados extraordinários.</p>
            <a href="#services" class="btn btn-gradient-hero animate-on-scroll fadeInUp" id="learnMoreHero" style="animation-delay: 0.6s;">
                Descubra Nossas Soluções <i class="fas fa-arrow-down"></i>
            </a>
        </div>
    </header>

    {{-- SEÇÃO SOBRE NÓS --}}
    <section id="sobre-nos" class="first-section" aria-labelledby="sobreNosTitle">
        <div class="container">
            <h2 id="sobreNosTitle" class="section-title animate-on-scroll fade-in-down">Sobre a Two V Technology</h2>
            <p class="section-subtitle animate-on-scroll fade-in-up" style="animation-delay: 0.1s;">
                Somos apaixonados por tecnologia e dedicados a transformar a maneira como as empresas operam e inovam. Com uma equipe experiente e foco em soluções personalizadas em <strong>Goiânia e região</strong>, ajudamos nossos clientes a alcançar seus objetivos estratégicos através da otimização de processos, segurança robusta e infraestrutura de ponta.
            </p>
            <div class="row about-values">
                <div class="col-md-4 animate-on-scroll fade-in-up" style="animation-delay: 0.2s;">
                    <div class="value-item">
                        <i class="fas fa-rocket"></i>
                        <h5>Inovação Constante</h5>
                        <p>Buscamos continuamente as mais recentes tecnologias e metodologias para oferecer soluções vanguardistas.</p>
                    </div>
                </div>
                <div class="col-md-4 animate-on-scroll fade-in-up" style="animation-delay: 0.35s;">
                    <div class="value-item">
                        <i class="fas fa-users-gear"></i>
                        <h5>Parceria Estratégica</h5>
                        <p>Trabalhamos lado a lado com nossos clientes, entendendo suas necessidades para entregar valor real.</p>
                    </div>
                </div>
                <div class="col-md-4 animate-on-scroll fade-in-up" style="animation-delay: 0.5s;">
                    <div class="value-item">
                        <i class="fas fa-shield-virus"></i>
                        <h5>Confiança e Segurança</h5>
                        <p>Priorizamos a segurança dos seus dados e a confiabilidade dos nossos serviços em cada projeto.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

{{-- ========================================================================= --}}
{{-- ================ SEÇÃO DE SERVIÇOS DINÂMICA ============================ --}}
{{-- ========================================================================= --}}
<section id="services" aria-labelledby="servicesTitle">
    <div class="container">
        <h2 id="servicesTitle" class="section-title animate-on-scroll fade-in-down">
            {{ $sections['services']->title ?? 'Nossos Serviços Especializados' }}
        </h2>
        <p class="section-subtitle animate-on-scroll fade-in-up" style="animation-delay: 0.1s;">
            {{ $sections['services']->subtitle ?? 'Oferecemos um portfólio completo de soluções em TI, desenhadas para otimizar processos, garantir segurança e impulsionar o crescimento do seu negócio de forma sustentável.' }}
        </p>

        <div class="row justify-content-center">
            @if(isset($services) && $services->count() > 0)
                @foreach($services as $index => $service)
                <div class="col-lg-4 col-md-6 mb-4 animate-on-scroll scale-in" style="animation-delay: {{ 0.15 + ($index * 0.1) }}s;">
                    <div class="service-box">
                        <div class="service-box-header">
                            <i class="{{ $service->icon_class ?? 'fas fa-cogs' }} service-icon" aria-hidden="true"></i>
                            <h4>{{ $service->title }}</h4>
                        </div>
                        <p>{{ \Illuminate\Support\Str::limit($service->description, 130) }}</p>
                        <a href="#contact" class="learn-more-link">Ver Detalhes <i class="fas fa-arrow-right link-arrow" aria-hidden="true"></i></a>
                    </div>
                </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p class="section-subtitle animate-on-scroll fade-in-up" style="animation-delay: 0.2s;">
                        Nossos serviços especializados estarão disponíveis em breve. Consulte novamente mais tarde!
                    </p>
                </div>
            @endif
        </div>
    </div>
</section>
{{-- ========================================================================= --}}
{{-- ================ FIM DA SEÇÃO DE SERVIÇOS =============================== --}}
{{-- ========================================================================= --}}

{{-- ========================================================================= --}}
{{-- ================ SEÇÃO DE CLIENTES ====================================== --}}
{{-- ========================================================================= --}}
    <section id="clientes" aria-labelledby="clientsTitle">
        <div class="container">
            <h2 id="clientsTitle" class="section-title animate-on-scroll fade-in-down">Empresas que Confiam em Nosso Trabalho</h2>
            <p class="section-subtitle animate-on-scroll fade-in-up" style="animation-delay: 0.1s;">Construímos parcerias de sucesso, entregando resultados e inovação para clientes de diversos segmentos.</p>

            <div id="clientCarousel" class="carousel slide client-logo-carousel animate-on-scroll scale-in" data-ride="carousel" data-interval="5000" style="animation-delay: 0.2s;">
               <div class="carousel-inner">
                    @foreach($clients->chunk(4) as $chunkIndex => $chunk)
                        <div class="carousel-item {{ $chunkIndex === 0 ? 'active' : '' }}">
                            <div class="row align-items-center justify-content-center">
                                @foreach($chunk as $client)
                                    <div class="col-6 col-sm-4 col-md-3 client-logo-item">
                                        <img src="{{ asset('storage/' . $client->logo_path) }}" alt="Logo da empresa {{ $client->name }}" class="img-fluid grayscale-hover">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>

                @if($clients->count() > 4)
                <a class="carousel-control-prev" href="#clientCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#clientCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
                @endif
                @if($clients->count() > 4)
                <ol class="carousel-indicators">
                    @foreach($clients->chunk(4) as $chunkIndex => $chunk)
                        <li data-target="#clientCarousel" data-slide-to="{{ $chunkIndex }}" class="{{ $chunkIndex === 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>
                @endif
            </div>
        </div>
    </section>
{{-- ========================================================================= --}}
{{-- ================ FIM DA SEÇÃO DE CLIENTES =============================== --}}
{{-- ========================================================================= --}}

    {{-- SEÇÃO DEPOIMENTOS --}}
    <section id="depoimentos" aria-labelledby="testimonialsTitle">
        <div class="container">
            <h2 id="testimonialsTitle" class="section-title text-center mb-4 animate-on-scroll fade-in-down">O Que Nossos Clientes Dizem</h2>
            <p class="section-subtitle text-center mb-5 animate-on-scroll fade-in-up" style="animation-delay: 0.1s;">
                A satisfação dos nossos clientes é o nosso maior indicador de sucesso. Veja o que alguns deles têm a dizer sobre a parceria com a Two V Technology.
            </p>

            <div class="swiper testimonial-swiper animate-on-scroll scale-in" style="animation-delay: 0.2s;">
                <div class="swiper-wrapper">
                    @foreach($testimonials as $testimonial)
                        <div class="swiper-slide">
                            <div class="testimonial-card">
                                <i class="fas fa-quote-left quote-icon" aria-hidden="true"></i>
                                <div class="testimonial-card-header">
                                    <img src="{{ asset('storage/' . $testimonial->foto) }}" alt="Foto de {{ $testimonial->nome }}, cliente da Two V Technology" class="client-photo">
                                    <div class="testimonial-client-info">
                                        <span class="client-name">{{ $testimonial->nome }}</span>
                                        <span class="client-company">{{ $testimonial->cargo }}</span>
                                    </div>
                                </div>
                                <blockquote class="testimonial-text">"{{ $testimonial->comentario }}"</blockquote>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    {{-- SEÇÃO DE CONTATO --}}
    <section id="contact" aria-labelledby="contactTitle">
    <div class="container">
        <h2 id="contactTitle" class="section-title animate-on-scroll fade-in-down">Pronto para Inovar?</h2>
        <p class="section-subtitle animate-on-scroll fade-in-up" style="animation-delay: 0.1s;">
            Nossa equipe em <strong>Goiânia</strong> está pronta para entender suas necessidades e propor soluções personalizadas que podem transformar o seu negócio.
        </p>

        <div class="contact-form-wrapper">
            <div class="contact-form-container animate-on-scroll fade-in-up" style="animation-delay: 0.2s;">
                <form method="POST" action="{{ route('contact.store') }}" class="contact-form" aria-label="Formulário de Contato">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="nome">Nome Completo *</label>
                            <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome completo" value="{{ old('nome') }}" required aria-required="true">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="email">E-mail Corporativo *</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="nome@suaempresa.com" value="{{ old('email') }}" required aria-required="true">
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="telefone">Telefone / WhatsApp</label>
                            <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(XX) 9XXXX-XXXX (Opcional)" value="{{ old('telefone') }}">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="servico">Serviço de Interesse Principal *</label>
                            <select class="form-select" id="servico" name="servico" required aria-required="true">
                                <option value="">Selecione o serviço...</option>
                                @foreach($services as $service)
                                    <option value="{{ $service->title }}" {{ old('servico') == $service->title ? 'selected' : '' }}>
                                        {{ $service->title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="mensagem">Detalhes do seu Projeto ou Necessidade *</label>
                        <textarea class="form-control" id="mensagem" name="mensagem" rows="5" placeholder="Conte-nos mais sobre o que você precisa..." required aria-required="true">{{ old('mensagem') }}</textarea>
                    </div>

                    <div class="text-center mt-4 pt-2">
                        <button type="submit" class="btn-custom-submit">
                            Enviar Mensagem <i class="fas fa-paper-plane" aria-hidden="true"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <div class="whatsapp-contact-area text-center animate-on-scroll fade-in-up" style="animation-delay: 0.3s;">
            <p>Prefere uma resposta imediata?</p>
            <a href="https://wa.me/5562998759924?text=Olá!%20Vi%20o%20site%20da%20Two%20V%20Technology%20(Goiânia)%20e%20gostaria%20de%20mais%20informações."
               target="_blank" rel="noopener noreferrer" class="btn-whatsapp">
                <i class="fab fa-whatsapp" aria-hidden="true"></i> Falar no WhatsApp
            </a>
        </div>
    </div>
</section>

    {{-- RODAPÉ --}}
    <footer role="contentinfo">
        <div class="container">
            <p>&copy; <script>document.write(new Date().getFullYear());</script> <span>Two V Technology</span> - Goiânia/GO. Transformando negócios com tecnologia e inovação. Todos os direitos reservados.</p>
            <div class="footer-social-icons">
                <a href="#" aria-label="Two V Technology no LinkedIn" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>
                <a href="#" aria-label="Two V Technology no Instagram" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
                <a href="#" aria-label="Two V Technology no Facebook" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook-f"></i></a>
            </div>
        </div>
    </footer>

    {{-- SCRIPTS JS --}}
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        // Função executada quando o DOM está completamente carregado
        document.addEventListener('DOMContentLoaded', function () {
            const root = document.documentElement;
            const rootStyles = getComputedStyle(root);

            function hexToRgbString(hex) {
                if (!hex || typeof hex !== 'string') return '0,0,0';
                hex = hex.replace(/^#/, '');
                if (hex.length === 3) {
                    hex = hex.split('').map(char => char + char).join('');
                }
                if (hex.length !== 6) return '0,0,0';
                const r = parseInt(hex.substring(0, 2), 16);
                const g = parseInt(hex.substring(2, 4), 16);
                const b = parseInt(hex.substring(4, 6), 16);
                if (isNaN(r) || isNaN(g) || isNaN(b)) return '0,0,0';
                return `${r},${g},${b}`;
            }

            const colorsToConvert = [
                '--primary-accent', '--secondary-accent', '--dark-bg', '--text-muted',
                '--logo-brand-light-grey',
                '--neon-highlight',
                '--glass-border', '--tech-purple-subtle'
            ];

            colorsToConvert.forEach(colorVarName => {
                const colorValue = rootStyles.getPropertyValue(colorVarName).trim();
                const rgbVarName = colorVarName.replace('-rgb', '') + '-rgb';
                if (colorValue) {
                    if (colorValue.startsWith('#')) {
                        root.style.setProperty(rgbVarName, hexToRgbString(colorValue));
                    } else if (colorValue.startsWith('rgba')) {
                        const match = colorValue.match(/rgba?\(([^)]+)\)/);
                        if (match && match[1]) {
                            const parts = match[1].split(',').slice(0,3).map(s => s.trim()).join(',');
                            root.style.setProperty(rgbVarName, parts);
                        }
                    } else if (colorValue.includes(',')) {
                         root.style.setProperty(rgbVarName, colorValue);
                    }
                } else {
                     root.style.setProperty(rgbVarName, '0,0,0');
                }
            });
            root.style.setProperty('--primary-accent-rgb', hexToRgbString(rootStyles.getPropertyValue('--logo-brand-green').trim()));
            root.style.setProperty('--secondary-accent-rgb', hexToRgbString(rootStyles.getPropertyValue('--secondary-accent').trim()));
            root.style.setProperty('--logo-brand-light-grey-rgb', hexToRgbString(rootStyles.getPropertyValue('--logo-brand-light-grey').trim()));
            root.style.setProperty('--neon-highlight-rgb', hexToRgbString(rootStyles.getPropertyValue('--neon-highlight').trim()));
            root.style.setProperty('--tech-purple-subtle-rgb', hexToRgbString(rootStyles.getPropertyValue('--tech-purple-subtle').trim()));
            root.style.setProperty('--dark-bg-rgb', hexToRgbString(rootStyles.getPropertyValue('--dark-bg').trim()));
            root.style.setProperty('--text-muted-rgb', hexToRgbString(rootStyles.getPropertyValue('--text-muted').trim()));
            root.style.setProperty('--glass-border-rgb', hexToRgbString(rootStyles.getPropertyValue('--glass-border').trim()));


            const navbar = document.querySelector('.navbar');
            let navbarHeight = navbar ? navbar.offsetHeight : parseInt(rootStyles.getPropertyValue('--navbar-height-var')) || 70;
            root.style.setProperty('--navbar-height-var', navbarHeight + 'px');

            window.addEventListener('resize', () => {
                navbarHeight = navbar ? navbar.offsetHeight : parseInt(rootStyles.getPropertyValue('--navbar-height-var')) || 70;
                root.style.setProperty('--navbar-height-var', navbarHeight + 'px');
            });

            window.addEventListener('scroll', function () {
                if (navbar && window.scrollY > 40) {
                    navbar.classList.add('scrolled');
                } else if (navbar) {
                    navbar.classList.remove('scrolled');
                }
            });

            const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
            const sectionsNodeList = document.querySelectorAll('section[id], header[id]');
            const sectionsArray = Array.from(sectionsNodeList);

            function changeLinkState() {
                let index = sectionsArray.length;
                const currentNavbarHeight = parseFloat(getComputedStyle(root).getPropertyValue('--navbar-height-var')) || 70;
                const offset = currentNavbarHeight + 60;

                while(--index >= 0 && window.scrollY + offset < sectionsArray[index].offsetTop) {}

                navLinks.forEach((link) => link.classList.remove('active'));
                if (index >= 0 && sectionsArray[index]) {
                    const activeLink = document.querySelector(`.navbar-nav .nav-link[href="#${sectionsArray[index].id}"]`);
                    if (activeLink) activeLink.classList.add('active');
                } else if (sectionsArray.length > 0 && window.scrollY < sectionsArray[0].offsetTop - offset) {
                     const homeLink = document.querySelector(`.navbar-nav .nav-link[href="#home"]`);
                     if(homeLink) homeLink.classList.add('active');
                }
            }
            if (navLinks.length > 0 && sectionsArray.length > 0) {
                changeLinkState();
                window.addEventListener('scroll', changeLinkState);
            }

            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function (e) {
                    const href = this.getAttribute('href');
                    const targetElement = href.length > 1 ? document.querySelector(href) : null;

                    if (targetElement) {
                        e.preventDefault();
                        const currentNavbarHeight = parseFloat(getComputedStyle(root).getPropertyValue('--navbar-height-var')) || 70;
                        const elementPosition = targetElement.getBoundingClientRect().top;
                        const offsetPosition = elementPosition + window.pageYOffset - currentNavbarHeight;

                        window.scrollTo({ top: offsetPosition, behavior: 'smooth' });

                        const navbarToggler = document.querySelector('.navbar-toggler');
                        const navbarCollapse = document.querySelector('.navbar-collapse');
                        if (navbarCollapse && navbarCollapse.classList.contains('show') && navbarToggler && getComputedStyle(navbarToggler).display !== 'none') {
                             navbarCollapse.classList.remove('show');
                        }

                        navLinks.forEach((link) => link.classList.remove('active'));
                        if(this.classList.contains('nav-link')) {
                           this.classList.add('active');
                        } else {
                            const correspondingNavLink = document.querySelector(`.navbar-nav .nav-link[href="${href}"]`);
                            if (correspondingNavLink) correspondingNavLink.classList.add('active');
                        }
                    }
                });
            });

            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            if (typeof IntersectionObserver !== 'undefined' && animatedElements.length > 0) {
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('is-visible');
                            observer.unobserve(entry.target);
                        }
                    });
                }, { threshold: 0.05 });

                animatedElements.forEach(el => observer.observe(el));
            }

            const globalSuccessAlert = document.querySelector('.status-alert.alert-success');
            if (globalSuccessAlert) {
                setTimeout(() => {
                    if (typeof(bootstrap) !== 'undefined' && bootstrap.Alert) {
                        const alertInstance = bootstrap.Alert.getInstance(globalSuccessAlert);
                        if (alertInstance) {
                            alertInstance.close();
                        } else {
                            new bootstrap.Alert(globalSuccessAlert).close();
                        }
                    } else {
                        globalSuccessAlert.style.display = 'none';
                    }
                }, 7000);
            }
        });
    </script>
    <script>
    if (document.querySelector('.testimonial-swiper')) {
        const testimonialSwiper = new Swiper('.testimonial-swiper', {
            loop: true,
            autoplay: {
                delay: 5500,
                disableOnInteraction: false,
            },
            slidesPerView: 1,
            spaceBetween: 20,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            grabCursor: true,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 25,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                }
            },
            effect: 'slide',
        });
    }
</script>

</body>
</html>
