<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Painel Administrativo') - Two V Technology</title>
    <link rel="icon" href="{{ asset('img/ico.png') }}" type="image/png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/admin-styles.css') }}"> {{-- --}}
    <style>
        /* Estilos base para o admin - podem ir para admin-styles.css */
        :root {
            --admin-bg: #0D1117; /* Fundo escuro GitHub-like */ /* */
            --admin-sidebar-bg: #080A0F; /* */
            --admin-card-bg: #161B22; /* */
            --admin-border-color: #30363D; /* */
            --admin-primary-accent: var(--logo-green, #1EB845); /* Usando a variável da sua logo */ /* */
            --admin-text-light: #C9D1D9; /* */
            --admin-text-muted: #8B949E; /* */
            --bs-body-font-family: 'Poppins', sans-serif; /* Garantindo a fonte Poppins */ /* */
        }
        body {
            font-family: var(--bs-body-font-family); /* */
            background-color: var(--admin-bg); /* */
            color: var(--admin-text-light); /* */
            display: flex; /* */
            min-height: 100vh; /* */
            font-size: 0.9rem; /* */
        }
        .admin-sidebar {
            width: 260px; /* */
            background-color: var(--admin-sidebar-bg); /* */
            padding: 1.5rem 1rem; /* */
            height: 100vh; /* */
            position: fixed; /* */
            top: 0; /* */
            left: 0; /* */
            border-right: 1px solid var(--admin-border-color); /* */
            z-index: 100; /* */
            transition: width 0.3s ease; /* */
        }
        .admin-sidebar .sidebar-brand {
            color: var(--admin-primary-accent); /* */
            font-weight: 700; /* */
            font-size: 1.5rem; /* */
            text-align: center; /* */
            margin-bottom: 1.5rem; /* */
            display: block; /* */
            text-decoration: none; /* */
        }
        .admin-sidebar .nav-link {
            color: var(--admin-text-muted); /* */
            padding: 0.75rem 1rem; /* */
            margin-bottom: 0.25rem; /* */
            border-radius: 0.375rem; /* Bootstrap 5 like rounded corners */ /* */
            display: flex; /* */
            align-items: center; /* */
            font-weight: 500; /* */
        }
        .admin-sidebar .nav-link i.nav-icon {
            margin-right: 0.75rem; /* */
            width: 20px; /* Para alinhar os ícones */ /* */
            text-align: center; /* */
            font-size: 0.95em; /* */
        }
        .admin-sidebar .nav-link:hover {
            background-color: rgba(var(--admin-primary-accent-rgb), 0.1); /* */
            color: var(--admin-primary-accent); /* */
        }
        .admin-sidebar .nav-link.active {
            background-color: var(--admin-primary-accent); /* */
            color: white; /* */
            font-weight: 600; /* */
        }
        .main-content-area {
            margin-left: 260px; /* */
            padding: 1.5rem; /* */
            width: calc(100% - 260px); /* */
            flex-grow: 1; /* */
            transition: margin-left 0.3s ease, width 0.3s ease; /* */
        }
        .admin-top-navbar {
            background-color: var(--admin-card-bg); /* */
            color: var(--admin-text-light); /* */
            padding: 0.75rem 1.5rem; /* */
            margin-bottom: 1.5rem; /* */
            border-radius: 0.5rem; /* */
            border: 1px solid var(--admin-border-color); /* */
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* */
        }
        .admin-page-title {
            font-size: 1.75rem; /* */
            font-weight: 600; /* */
            color: var(--admin-text-light); /* */
        }
        .card.admin-card { /* Estilo para os cards dentro do admin */ /* */
            background-color: var(--admin-card-bg); /* */
            border: 1px solid var(--admin-border-color); /* */
            border-radius: 0.5rem; /* */
            margin-bottom: 1.5rem; /* */
            box-shadow: 0 1px 3px rgba(0,0,0,0.05); /* */
        }
        .card.admin-card .card-header {
            background-color: rgba(0,0,0,0.1); /* Um tom sutil para o header do card */
            border-bottom: 1px solid var(--admin-border-color);
            color: var(--admin-text-light);
            font-weight: 500;
        }
        .table.table-admin {
            background-color: var(--admin-card-bg); /* */
            color: var(--admin-text-light); /* */
            border: 1px solid var(--admin-border-color); /* */
        }
        .table.table-admin th, .table.table-admin td {
            border-color: var(--admin-border-color); /* */
            vertical-align: middle; /* */
        }
        .table.table-admin thead th {
            background-color: #101620; /* Um pouco mais escuro para cabeçalho */ /* */
            border-bottom-width: 1px; /* */
            font-weight: 600; /* */
            color: var(--admin-text-light); /* MODIFICADO para melhor contraste */
        }
        .table.table-admin tbody tr:hover { /* Estilo de hover para linhas da tabela */
            background-color: rgba(var(--admin-primary-accent-rgb), 0.05);
        }
        .form-control.admin-form-control {
            background-color: var(--admin-bg); /* */
            border: 1px solid var(--admin-border-color); /* */
            color: var(--admin-text-light); /* */
            border-radius: 0.375rem; /* */
        }
        .form-control.admin-form-control:focus {
            background-color: var(--admin-sidebar-bg); /* Um pouco mais claro ao focar */ /* */
            border-color: var(--admin-primary-accent); /* */
            color: var(--admin-text-light); /* */
            box-shadow: 0 0 0 0.2rem rgba(var(--admin-primary-accent-rgb), 0.25); /* */
        }
        .btn-admin-action {
            background-color: var(--admin-primary-accent); /* */
            border-color: var(--admin-primary-accent); /* */
            color: white; /* */
            font-weight: 500; /* */
        }
        .btn-admin-action:hover {
            background-color: #18a03b; /* */
            border-color: #179438; /* */
            color: white; /* */
        }
        .btn-admin-secondary {
            background-color: #30363D; /* */
            border-color: #30363D; /* */
            color: var(--admin-text-light); /* */
        }
        .btn-admin-secondary:hover {
            background-color: #484F58; /* */
            border-color: #484F58; /* */
        }

        /* Estilos para Alertas Admin */
        .alert-success-admin {
            background-color: rgba(var(--admin-primary-accent-rgb), 0.2);
            border: 1px solid var(--admin-primary-accent);
            color: var(--admin-primary-accent);
        }
        .alert-success-admin .close {
            color: var(--admin-primary-accent);
        }
        .alert-danger-admin { /* Você pode criar um --admin-danger-accent se quiser */
            background-color: rgba(220, 53, 69, 0.2); /* Exemplo com cor de perigo do Bootstrap (vermelho) */
            border: 1px solid #dc3545;
            color: #dc3545;
        }
        .alert-danger-admin .close {
            color: #dc3545;
        }


        /* Ajustes para responsividade da sidebar */
        @media (max-width: 991.98px) {
            .admin-sidebar {
                width: 70px; /* */
                overflow: hidden; /* */
            }
            .admin-sidebar:hover {
                width: 260px; /* Expande no hover em telas menores */ /* */
            }
            .admin-sidebar .sidebar-brand, /* */
            .admin-sidebar .nav-link span { /* Esconde texto, mostra só ícone */ /* */
                display: none;  /* */
            }
            .admin-sidebar:hover .sidebar-brand, /* */
            .admin-sidebar:hover .nav-link span { /* */
                display: inline; /* */
            }
            .admin-sidebar .nav-link i.nav-icon {
                margin-right: 0; /* Centraliza ícone quando sidebar está colapsada */ /* */
                font-size: 1.2em; /* */
            }
            .admin-sidebar:hover .nav-link i.nav-icon {
                margin-right: 0.75rem; /* */
                font-size: 0.95em; /* */
            }
            .main-content-area {
                margin-left: 70px; /* */
                width: calc(100% - 70px); /* */
            }
             .admin-sidebar:hover ~ .main-content-area { /* Empurra conteúdo quando sidebar expande no hover */ /* */
                margin-left: 260px; /* */
                width: calc(100% - 260px); /* */
            }
        }
        /* Text Selection Contrast */
        ::selection {
            background-color: var(--admin-primary-accent); /* */
            color: #ffffff; /* Texto branco para bom contraste */
        }
        /* Para Firefox */
        ::-moz-selection {
            background-color: var(--admin-primary-accent); /* */
            color: #ffffff; /* Texto branco para bom contraste */
        }

    </style>
</head>
<body>
    <aside class="admin-sidebar">
        <a href="{{ route('admin.dashboard') }}" class="sidebar-brand"> {{-- MODIFICADO: Link para admin.dashboard --}}
            Two V Admin
        </a>
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}"> {{-- MODIFICADO --}}
                    <i class="fas fa-tachometer-alt nav-icon"></i> <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.services.*') ? 'active' : '' }}" href="{{ route('admin.services.index') }}"> {{-- MODIFICADO --}}
                    <i class="fas fa-concierge-bell nav-icon"></i> <span>Serviços</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.clients.*') ? 'active' : '' }}" href="{{ route('admin.clients.index') }}">
                    <i class="fas fa-building-user nav-icon"></i> <span>Clientes</span>
                </a>
            </li>

            <li class="nav-item">
                 {{-- Adicione a rota para 'admin.testimonials.index' se existir e ajuste request()->routeIs --}}
                <a class="nav-link {{-- request()->routeIs('admin.testimonials.*') ? 'active' : '' --}}" href="{{ route('admin.testimonials.index') }}">
                    <i class="fas fa-comments nav-icon"></i> <span>Depoimentos</span>
                </a>
            </li>
            <li class="nav-item">
                {{-- Adicione a rota para 'admin.about.edit' se existir e ajuste request()->routeIs --}}
                <a class="nav-link {{-- request()->routeIs('admin.about.edit') ? 'active' : '' --}}" href="#">
                    <i class="fas fa-info-circle nav-icon"></i> <span>Sobre Nós</span>
                </a>
            </li>
             <li class="nav-item">
                {{-- Adicione a rota para 'admin.contacts.index' se existir e ajuste request()->routeIs --}}
                <a class="nav-link {{-- request()->routeIs('admin.contacts.*') ? 'active' : '' --}}" href="{{ route('admin.contacts.index') }}">
                    <i class="fas fa-envelope nav-icon"></i> <span>Mensagens</span>
                </a>
            </li>
            
                       {{-- Broadcast de mensagens --}}
            <li class="nav-item">
                <a class="nav-link {{ request()->routeIs('admin.broadcasts.*') ? 'active' : '' }}"
                   href="{{ route('admin.broadcasts.create') }}">
                    <i class="fas fa-bullhorn nav-icon"></i>
                    <span>Broadcast</span>
                </a>
            </li>

        </ul>

            </ul>
        <ul class="nav flex-column mt-auto">
             <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}" target="_blank">
                    <i class="fas fa-globe nav-icon"></i> <span>Ver Site</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt nav-icon"></i> <span>Sair</span>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> {{-- MODIFICADO: Link para logout --}}
                    @csrf
                </form>
            </li>
        </ul>
    </aside>

    <main class="main-content-area">
        <nav class="admin-top-navbar d-flex justify-content-between align-items-center">
            <div>
                <h2 class="admin-page-title mb-0">@yield('page-title', 'Painel')</h2>
            </div>
            <div>
                {{-- Descomente e use Auth::user()->name quando a autenticação estiver configurada --}}
                <span class="mr-2">Olá, {{ Auth::user()->name ?? 'Admin' }}</span>
                {{-- Use uma lógica para a primeira letra do nome do usuário ou um ícone padrão --}}
                <img src="https://placehold.co/40x40/{{ substr(ltrim(config('app.theme_colors.admin_primary_accent', '1EB845'), '#'),0,6) }}/f8fbff?text={{ substr(Auth::user()->name ?? 'A', 0, 1) }}" class="rounded-circle" alt="Avatar">
            </div>
        </nav>

        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Script para definir cores RGB para CSS e outras interações do admin
        document.addEventListener('DOMContentLoaded', function () {
            const root = document.documentElement; /* */
            const rootStyles = getComputedStyle(root); /* */
            function hexToRgbString(hex) {
                let r = 0, g = 0, b = 0; /* */
                if (!hex || typeof hex !== 'string') return '0,0,0';  /* */
                const shorthandRegex = /^#?([a-f\d])([a-f\d])([a-f\d])$/i; /* */
                hex = hex.replace(shorthandRegex, function(m, r, g, b) { /* */
                    return r + r + g + g + b + b; /* */
                });
                const result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex); /* */
                if (result) {
                    r = parseInt(result[1], 16); /* */
                    g = parseInt(result[2], 16); /* */
                    b = parseInt(result[3], 16); /* */
                    return `${r},${g},${b}`; /* */
                }
                return '0,0,0';  /* */
            }
            
            const colorsToConvert = ['--admin-primary-accent'];  /* */
            colorsToConvert.forEach(colorVarName => {
                const colorHex = rootStyles.getPropertyValue(colorVarName).trim(); /* */
                if (colorHex && colorHex.startsWith('#')) {  /* */
                    const rgbVarName = colorVarName.replace('-rgb', '') + '-rgb'; /* */
                    root.style.setProperty(rgbVarName, hexToRgbString(colorHex)); /* */
                } else if (colorHex) {  /* */
                     const rgbVarName = colorVarName.replace('-rgb', '') + '-rgb'; /* */
                     if (!rootStyles.getPropertyValue(rgbVarName).trim() && colorHex.includes(',')){  /* */
                        root.style.setProperty(rgbVarName, colorHex); /* */
                     } else if (!rootStyles.getPropertyValue(rgbVarName).trim()) { /* */
                        root.style.setProperty(rgbVarName, '0,0,0');  /* */
                     }
                }
            });
        });
    </script>
    @stack('scripts') {{-- Para scripts específicos da página --}}
</body>
</html>