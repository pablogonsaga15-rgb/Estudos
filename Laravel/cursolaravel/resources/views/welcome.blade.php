<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amigos Car Detail | Estética Automotiva Premium</title>
    <!-- Incluindo Tailwind CSS CDN --><script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;800&display=swap" rel="stylesheet">
    
    <!-- ************************************************************ -->
    <!-- CSS Padronizado (Tudo no bloco <style>) -->
    <!-- ************************************************************ --><style>
        /* Base e Tipografia */
        body {
            font-family: 'Inter', sans-serif;
            background-color: #0d1219; /* Fundo escuro */
            color: #fff;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            min-height: 100vh;
        }

        /* Navbar Fixa */
        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: rgba(17, 24, 39, 0.95); /* Quase preto, mais sólido */
            backdrop-filter: blur(8px);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3); /* Sombra mais forte */
            z-index: 50;
            height: 80px;
            display: flex;
            align-items: center;
        }
        .navbar-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            max-width: 1280px; /* max-w-7xl */
            margin: 0 auto;
            padding: 0 1rem;
        }
        .nav-link {
            padding-bottom: 4px;
            transition: color 0.15s ease-in-out;
            cursor: pointer;
        }
        .nav-link.active {
            border-bottom: 3px solid #3b82f6; /* Borda mais grossa */
            color: #3b82f6; /* Cor azul quando ativo */
        }
        .nav-button {
            padding: 10px 24px;
            background-color: #3b82f6; /* blue-500 */
            border-radius: 9999px; /* Arredondamento total (pill shape) */
            font-weight: 700;
            box-shadow: 0 10px 20px -3px rgba(59, 130, 246, 0.3);
            transition: all 0.3s ease;
        }
        .nav-button:hover {
            background-color: #2563eb; /* blue-600 */
            transform: scale(1.02) translateY(-2px);
        }

        /* Classes de Layout das Seções */
        .page-section {
            padding-top: 80px; /* Compensação da navbar */
            padding-bottom: 6rem; /* Garante espaço no final */
            min-height: 100vh;
            display: none;
            flex-direction: column;
            align-items: center; 
            width: 100%;
        }
        .page-section.active {
            display: flex;
        }
        
        /* Estilos de conteúdo genérico para centralizar seções vazias */
        .section-content-wrapper {
            max-width: 1280px;
            width: 100%;
            padding: 0 1rem;
            margin: 0 auto;
        }
        
        .section-header {
            margin-bottom: 4rem;
            padding: 4rem 1rem 0; /* Padding superior para a primeira seção */
            max-width: 1280px;
            width: 100%;
            text-align: center;
        }

        /* Seção Hero (Home) */
        #home-section {
            background-image: url('Gemini_Generated_Image_swarm3swarm3swar.jpg'); 
            background-size: cover;
            background-attachment: fixed;
            background-position: center;
            position: relative;
        }
        #home-section::after {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(0, 0, 0, 0.65);
            z-index: 0;
        }
        .hero-content {
            z-index: 10;
            width: 100%;
            max-width: 1280px;
            margin: auto;
            padding: 6rem 1rem;
            display: grid;
            gap: 3rem;
            align-items: center;
        }
        .highlight-card {
            background-color: rgba(255, 255, 255, 0.98);
            padding: 3.5rem;
            border-radius: 1.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3);
            max-width: 550px;
            margin: 0 auto;
            border-bottom: 6px solid #3b82f6;
            transition: all 0.4s ease;
        }
        .highlight-card:hover {
            box-shadow: 0 30px 60px -15px rgba(59, 130, 246, 0.7);
            transform: translateY(-5px);
        }
        .card-title {
            font-size: 3.5rem;
            font-weight: 800;
            color: #111827;
            line-height: 1.1;
            margin-bottom: 1rem;
        }
        .service-item {
            display: flex;
            align-items: center;
            background-color: #f3f4f6;
            padding: 1rem;
            border-radius: 0.75rem;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #3b82f6;
        }
        .service-icon {
            color: #3b82f6;
            margin-right: 1rem;
        }

        /* Mockup do Tablet/Formulário */
        .tablet-mockup {
            background-color: #0b1c31; 
            border: 6px solid #3b82f6; 
            border-radius: 2.5rem;
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.7), inset 0 0 15px rgba(59, 130, 246, 0.5);
            width: 100%;
            max-width: 400px;
            aspect-ratio: 3 / 4;
            padding: 3rem;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .mockup-form input, .mockup-form select, .mockup-form div {
            padding: 14px;
            border-radius: 10px;
            background-color: #374151;
            border: 1px solid #4b5563;
        }
        .mockup-button {
            padding: 14px 0;
            border-radius: 10px;
            font-weight: 700;
            background-color: #3b82f6;
            color: white;
            transition: background-color 0.3s;
        }
        .mockup-button:hover {
            background-color: #2563eb;
        }
        
        /* Animações Bolhas (Home) */
        @keyframes pulse-animation {
            0%, 100% { transform: scale(1); opacity: 0.2; }
            50% { transform: scale(1.15); opacity: 0.5; }
        }
        .bubble {
            background-color: #60a5fa;
            border-radius: 9999px;
            position: absolute;
            z-index: 0;
            opacity: 0.2;
            animation: pulse-animation 5s cubic-bezier(0.4, 0, 0.6, 1) infinite;
        }
        .bubble-1 { top: 5%; left: 10%; width: 50px; height: 50px; animation-delay: 0s; }
        .bubble-2 { top: 30%; right: 5%; width: 30px; height: 30px; animation-delay: 1.5s; }
        .bubble-3 { bottom: 15%; left: 25%; width: 70px; height: 70px; animation-delay: 3s; }

        /* Estilos da Seção de Serviços */
        #services-section {
            background-color: #111827; /* gray-900 */
        }
        .services-grid {
            display: grid;
            gap: 2rem;
            padding: 0 1rem;
            max-width: 1280px;
            width: 100%;
            margin: 0 auto;
        }
        .service-card {
            min-height: 480px;
            position: relative;
            background-size: cover;
            background-position: center;
            border-radius: 1.5rem;
            overflow: hidden;
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.4);
            transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
            cursor: pointer;
        }
        .service-card:hover {
            transform: translateY(-10px) scale(1.01);
            box-shadow: 0 30px 60px -15px rgba(59, 130, 246, 0.6);
        }
        .card-overlay {
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: linear-gradient(to bottom, rgba(0, 0, 0, 0.1) 0%, rgba(0, 0, 0, 0.6) 60%, rgba(0, 0, 0, 0.9) 100%);
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 2rem;
        }
        .card-title-services {
            font-size: 2.25rem;
            font-weight: 800;
            color: #fff;
            margin-bottom: 0.5rem;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.8);
        }
        .card-header {
            background-color: #3b82f6; 
            color: white;
            padding: 0.5rem 1rem;
            border-bottom-right-radius: 1rem;
            font-weight: 800;
            font-size: 1.25rem;
            position: absolute;
            top: 0;
            left: 0;
            text-shadow: none;
            box-shadow: 2px 2px 8px rgba(0, 0, 0, 0.2);
        }

        /* Estilos de Seção Vazias (Galeria, Sobre, Contato) */
        .empty-section-content {
            padding: 6rem 1rem;
            text-align: center;
            background-color: #1f2937; /* gray-800 */
            border-radius: 1rem;
            margin-top: 4rem;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.4);
            max-width: 800px;
            width: 100%;
        }

        /* Responsividade */
        @media (min-width: 1024px) { 
            .services-grid {
                grid-template-columns: repeat(3, minmax(0, 1fr));
            }
            .hero-content {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
        }
        @media (min-width: 768px) and (max-width: 1023px) {
            .services-grid {
                grid-template-columns: repeat(2, minmax(0, 1fr));
            }
            .hero-content {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
        }
        @media (max-width: 767px) {
             .hero-content {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
             .card-title {
                font-size: 2.75rem;
            }
            .nav-desktop-links {
                display: none;
            }
            .services-grid {
                grid-template-columns: repeat(1, minmax(0, 1fr));
            }
            .highlight-card, .tablet-mockup {
                padding: 2rem;
            }
            .card-title {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>

    <!-- 1. Navbar Fixa no Topo -->
    <header class="navbar">
        <nav class="navbar-content">
            <!-- Logo e Nome da Marca -->
            <div class="flex items-center text-2xl font-extrabold text-blue-300">
                <!-- Ícone SVG de Carro -->
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-2 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-9 5h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                </svg>
                AMIGOS CAR DETAIL
            </div>

            <!-- Links de Navegação (Desktop) -->
            <div class="nav-desktop-links md:flex items-center space-x-6 text-sm">
                <!-- Links de navegação com IDs para JavaScript (TODOS OS LINKS RESTAURADOS) -->
                <a href="#" class="nav-link text-white hover:text-blue-400 font-semibold active" data-target="home-section">Home</a>
                <a href="#" class="nav-link text-white hover:text-blue-400 font-semibold" data-target="services-section">Serviços</a>
                <a href="#" class="nav-link text-white hover:text-blue-400 font-semibold" data-target="gallery-section">Galeria</a>
                <a href="#" class="nav-link text-white hover:text-blue-400 font-semibold" data-target="about-section">Sobre Nós</a>
                <a href="#" class="nav-link text-white hover:text-blue-400 font-semibold" data-target="contact-section">Contato</a>
                
                <!-- Botão Agendar Agora -->
                <button class="nav-button ml-4">
                    Agendar Agora
                </button>
            </div>
            
            <!-- Menu Hamburger (Mobile - Sem funcionalidade neste exemplo) -->
            <button class="md:hidden text-white p-2 rounded-lg hover:bg-gray-700 transition duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16m-7 6h7" /></svg>
            </button>
        </nav>
    </header>

    <!-- 2. Conteúdo Principal (Todas as Seções SPA) -->
    <main>
        <!-- SEÇÃO HOME (Inicia Ativa) -->
        <section id="home-section" class="page-section active">
            <div class="hero-content">

                <!-- Card de Destaque com Mensagem Principal (Lado Esquerdo) -->
                <div class="highlight-card">
                    <h1 class="card-title">
                        Seu Carro Merece o <span style="color:#3b82f6;">Melhor Brilho</span>
                    </h1>
                    <p class="card-subtitle text-gray-700 text-lg mb-6">
                        Estética Automotiva Premium ao seu Alcance. Focamos na qualidade e no detalhe.
                    </p>

                    <!-- Lista de Serviços Principais -->
                    <div class="space-y-4">
                        <!-- Item 1: Lavagem Detalhada -->
                        <div class="service-item">
                            <div class="service-icon">
                                <!-- Ícone de Lavagem -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h18M7 15h1m4 0h1m-9 5h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <span class="service-text text-lg text-gray-800 font-medium">Lavagem Detalhada (Rodas, Motor e Pintura)</span>
                        </div>
                        
                        <!-- Item 2: Polimento e Cristalização -->
                        <div class="service-item">
                            <div class="service-icon">
                                <!-- Ícone de Brilho -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M5 3s.5 4 4 4 4-4 4-4M12 21v-2m-8-2h2m10-2h2M5 12H3m14 0h2m-5-8l-2 4m-2 0l-2-4" />
                                </svg>
                            </div>
                            <span class="service-text text-lg text-gray-800 font-medium">Proteção Cerâmica e Polimento Técnico</span>
                        </div>
                    </div>
                </div>

                <!-- Mockup do Tablet/Formulário (Lado Direito) -->
                <div class="flex justify-center p-8">
                    <div class="tablet-mockup">
                        <!-- Detalhe Visual: Bolhas d'água -->
                        <div class="bubble bubble-1"></div>
                        <div class="bubble bubble-2"></div>
                        <div class="bubble bubble-3"></div>

                        <h2 class="text-3xl font-extrabold text-white mb-8 text-center relative z-10">
                            PEÇA SEU ORÇAMENTO
                        </h2>
                        
                        <!-- Formulário de Agendamento Simplificado (Visual) -->
                        <div class="mockup-form space-y-4 relative z-10 w-full">
                            <input type="text" placeholder="Nome Completo" class="w-full">
                            <input type="tel" placeholder="Telefone (WhatsApp)" class="w-full">
                            
                            <div class="relative">
                                <select class="w-full select-custom">
                                    <option value="" disabled selected>Serviço Desejado</option>
                                    <option value="lavagem">Lavagem Simples</option>
                                    <option value="detalhada">Lavagem Detalhada Premium</option>
                                    <option value="polimento">Polimento e Proteção</option>
                                    <option value="higienizacao">Higienização Interna</option>
                                </select>
                                <!-- Ícone de seta personalizada para o select -->
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" /></svg>
                                </div>
                            </div>

                            <div class="flex items-center">
                                <input type="datetime-local" placeholder="Data e Hora Desejadas" class="flex-grow bg-transparent text-white placeholder-gray-400">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-400 ml-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" /></svg>
                            </div>

                            <!-- Botão Agendar Agora dentro do mockup -->
                            <button class="mockup-button w-full">
                                Solicitar Orçamento
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEÇÃO: SERVIÇOS -->
        <section id="services-section" class="page-section">
            <div class="section-header text-center">
                <h2 class="text-5xl font-extrabold text-white mb-4">Nossos Serviços Premium</h2>
                <p class="text-xl text-gray-400">Conheça o tratamento detalhado que oferecemos para o seu veículo.</p>
            </div>
                
            <div class="services-grid">
                
                <!-- Card 1: Lavagem Externa Detalhada (Imagem de Lavagem) -->
                <div class="service-card" style="background-image: url('https://placehold.co/800x600/1e3a8a/ffffff?text=LAVAGEM+DETALHADA');">
                    <div class="card-header">⭐ PREMIUM WASH</div>
                    <div class="card-overlay">
                        <h3 class="card-title-services">Lavagem Externa Detalhada</h3>
                        <p class="card-description text-gray-200">
                            Processo completo de lavagem com shampoo neutro, descontaminação de pintura e limpeza de caixas de roda e motor. O primeiro passo para o brilho.
                        </p>
                    </div>
                </div>

                <!-- Card 2: Polimento & Correção (Imagem de Polimento) -->
                <div class="service-card" style="background-image: url('https://placehold.co/800x600/374151/ffffff?text=POLIMENTO+TECNICO');">
                    <div class="card-header">✨ CORREÇÃO & PROTEÇÃO</div>
                    <div class="card-overlay">
                        <h3 class="card-title-services">Polimento Técnico e Vitrificação</h3>
                        <p class="card-description text-gray-200">
                            Restauração da pintura removendo riscos e hologramas. Aplicação de cera, selante ou vitrificador cerâmico para proteção UV e hidrofóbica.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Higienização Interna (Imagem de Interior) -->
                <div class="service-card" style="background-image: url('https://placehold.co/800x600/065f46/ffffff?text=HIGIENIZAÇÃO+INTERNA');">
                    <div class="card-header">🧼 INTERIOR LUXO</div>
                    <div class="card-overlay">
                        <h3 class="card-title-services">Higienização e Detalhamento Interno</h3>
                        <p class="card-description text-gray-200">
                            Limpeza profunda de estofados (couro ou tecido), carpetes, teto e painel. Eliminação de odores e bactérias, garantindo um ambiente limpo.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <!-- SEÇÃO: GALERIA (Conteúdo Vazio) -->
        <section id="gallery-section" class="page-section bg-gray-900">
            <div class="section-header text-center">
                <h2 class="text-5xl font-extrabold text-white mb-4">Galeria de Trabalhos</h2>
                <p class="text-xl text-gray-400">Veja a qualidade e o detalhe que aplicamos em cada veículo.</p>
            </div>
            <div class="section-content-wrapper flex justify-center">
                <div class="empty-section-content">
                    <p class="text-2xl font-bold text-blue-400 mb-4">Espaço Reservado para Imagens</p>
                    <p class="text-gray-300">Em breve, você poderá adicionar aqui as fotos dos seus melhores trabalhos!</p>
                </div>
            </div>
        </section>
        
        <!-- SEÇÃO: SOBRE NÓS (Conteúdo Vazio) -->
        <section id="about-section" class="page-section bg-gray-800">
            <div class="section-header text-center">
                <h2 class="text-5xl font-extrabold text-white mb-4">Nossa História</h2>
                <p class="text-xl text-gray-400">Conheça um pouco mais sobre a Amigos Car Detail.</p>
            </div>
            <div class="section-content-wrapper flex justify-center">
                <div class="empty-section-content">
                    <p class="text-2xl font-bold text-blue-400 mb-4">Detalhes da Empresa</p>
                    <p class="text-gray-300">Aqui você pode descrever a missão, visão e valores da sua estética automotiva.</p>
                </div>
            </div>
        </section>

        <!-- SEÇÃO: CONTATO (Conteúdo Vazio) -->
        <section id="contact-section" class="page-section bg-gray-900">
            <div class="section-header text-center">
                <h2 class="text-5xl font-extrabold text-white mb-4">Fale Conosco</h2>
                <p class="text-xl text-gray-400">Entre em contato e agende seu serviço.</p>
            </div>
            <div class="section-content-wrapper flex justify-center">
                <div class="empty-section-content">
                    <p class="text-2xl font-bold text-blue-400 mb-4">Informações e Formulário de Contato</p>
                    <p class="text-gray-300">Adicione seu telefone, e-mail e um mapa da localização aqui.</p>
                </div>
            </div>
        </section>
    </main>
    
    <!-- 3. Rodapé Simples -->
    <footer class="bg-gray-900 py-6 text-center border-t border-gray-700">
        <p class="text-gray-400 text-sm">&copy; 2025 Amigos Car Detail. Estética Automotiva Premium.</p>
    </footer>

    <!-- 4. Script de Navegação SPA -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const navLinks = document.querySelectorAll('.nav-link');
            const sections = document.querySelectorAll('.page-section');

            /**
             * Função para mostrar a seção alvo e atualizar o link ativo na navbar.
             * @param {string} targetId - O ID da seção a ser exibida (ex: 'home-section').
             */
            function navigateTo(targetId) {
                // 1. Esconde todas as seções e remove o estado 'active' dos links
                sections.forEach(section => {
                    section.classList.remove('active');
                });
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });

                // 2. Exibe a seção alvo
                const targetSection = document.getElementById(targetId);
                if (targetSection) {
                    targetSection.classList.add('active');
                    // Rola para o topo da seção (descontando o tamanho da navbar)
                    window.scrollTo({
                        top: targetSection.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }

                // 3. Define o link correspondente como ativo
                const activeLink = document.querySelector(`.nav-link[data-target="${targetId}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }

            // Adiciona listener de clique a todos os links de navegação
            navLinks.forEach(link => {
                link.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = link.getAttribute('data-target');
                    if (targetId) {
                        navigateTo(targetId);
                    }
                });
            });

            // Garante que a seção inicial 'home-section' esteja ativa no carregamento
            navigateTo('home-section');
        });
    </script>
</body>
</html>