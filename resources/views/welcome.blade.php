<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="./Css/Style.css">
        
        <title>Protective Skills</title>
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
         
        @endif
    </head>

    <body>
        <header>
        <nav class="nav-bar" >
        <div class="logo">
            <h1><a href=""></a>Protective Skills</h1>
        </div>
        <div class="nav-list">
            <ul>
                <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
                <li class="nav-item"><a href="#" class="nav-link">Projetos</a></li>
                <li class="nav-item"><a href="#" class="nav-link"> Sobre nós</a></li>
            </ul>
        </div>
        <div class="mobile-menu-icon">
            <button onclick="menuShow()"><img class="icon" src="/img/menu_white_36dp.svg" alt=""></button>
        </div>
    </nav>
    <div class="mobile-menu">
        <ul>
            <li class="nav-item"><a href="#" class="nav-link">Início</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Projetos</a></li>
            <li class="nav-item"><a href="#" class="nav-link">Sobre</a></li>
        </ul>
    </div>            
        </header>

    <section class="container-login">
    <aside>
      <h2><span>Protective Skills</span></h2>
      <p>
        Especialistas em Segurança no Trabalho<br>
        Protegendo Pessoas e Garantindo Resultados
      </p>
                        @if (Route::has('login'))
                            <nav class="login-btn">
                                @auth
                                
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                    >
                                        Login
                                    </a>

                                    @if (Route::has('register'))
                                       <!-- <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>-->
                                    @endif
                                @endauth
                            </nav>
                        @endif

    </aside>
  
  <article>
    <img src="/img/4 em 1.png" alt="mulher-roxa">
  </article>
  </section>

  <section class="programs-overview">
    <h1>Metodos</h1>
    <div class="programs-grid">
      <div class="program">
        <span class="icon">📎</span>
        <h2>Treinamento Especializado</h2>
        <p>O treinamento especializado da Protective Skills foca em áreas específicas de segurança no trabalho, proporcionando habilidades essenciais para a prevenção .</p>
        <a href="#" class="button">Inscreva-se Agora</a>
      </div>
      <div class="program">
        <span class="icon">🔄</span>
        <h2>Simulações Práticas</h2>
        <p>As simulações práticas permitem que os funcionários vivenciem situações reais, preparando-os para agir com segurança e eficiência em caso de emergência.</p>
        <a href="#" class="button">Agende uma Palestra</a>
      </div>
      <div class="program">
        <span class="icon">⬇️</span>
        <h2>Palestras Informativas</h2>
        <p>Nossas palestras informativas abordam os principais temas de segurança no trabalho, conscientizando os colaboradores sobre práticas seguras e prevenção de acidentes.</p>
        <a href="#" class="button">Solicite uma Avaliação</a>
      </div>
      <div class="program">
        <span class="icon">🎯</span>
        <h2>Avaliações de Risco</h2>
        <p>Realizamos avaliações de risco detalhadas para identificar áreas de melhoria e implementar medidas preventivas, garantindo um ambiente de trabalho seguro para todos.</p>
        <a href="#" class="button">Entre em Contato</a>
      </div>
    </div>
  </section>

  <section class="testimonials">
    <h1>Depoimentos de Clientes</h1>
    <div class="testimonials-grid">
      <div class="testimonial">
        <h2>Sinergia Indústria</h2>
        <img src="/img/Sinergia Indústria.png" alt="Sinergia Indústria" class="img-testimonal">
        <p>A Protective Skills transformou completamente a nossa abordagem à segurança no trabalho,
            Eles não apenas nos ajudaram a prevenir acidentes, mas também a criar uma cultura de segurança sólida,
            O impacto foi extraordinário: riscos reduzidos, maior eficiência e uma equipe mais confiante,
            Recomendo de olhos fechados para todas as empresas que desejam excelência em segurança!</p>
      </div>
      <div class="testimonial">
        <h2>Motores do Futuro</h2>
        <img src="/img/Motores do Futuro.png" alt="Motores do Futuro" class="img-testimonal">
        <p>Os curso foi fundamental para mudar a cultura de segurança na nossa empresa. Graças aos treinamentos nossos colaboradores se tornaram verdadeiros agentes de segurança, identificando e eliminando riscos no dia a dia. O resultado é um ambiente de trabalho mais seguro e colaborativo, o treinamento reforçou a conscientização e a responsabilidade de toda a equipe.</p>
      </div>
      <div class="testimonial">
        <h2>Solido Engenharia</h2>
        <img src="/img/Solido Engenharia.png" alt="Solido Engenharia" class="img-testimonal">
        <p>A Protective Skills é referência quando o assunto é segurança no trabalho. Com seus cursos personalizados para cada área de atuação, eles conseguem abordar exatamente as necessidades de cada empresa. Graças ao trabalho deles, conseguimos reduzir drasticamente o número de acidentes em nossa equipe. </p>
      </div>
      <div class="testimonial">
        <h2>Ferro & Aço</h2>
        <img src="/img/Ferro & Aço.png" alt="Ferro & Aço" class="img-testimonal">
        <p>Contratar a Protective Skills foi uma das melhores decisões que tomamos como empresa. Eles oferecem cursos especializados e totalmente alinhados com a nossa área de atuação, o que fez toda a diferença na implementação de medidas preventivas. Além de reduzir os riscos de acidentes. Recomendamos fortemente para qualquer empresa que busca segurança e excelência no trabalho!</p>
      </div>
    </div>
  </section>



                    <!--Footer do site-->
<footer>
  <div id="footer_content">
      <div id="footer_contacts">
          <h1>Protective Skills</h1>
          <p>It's all about your dreams.</p>

          <div id="footer_social_media">
              <a href="https://www.instagram.com/" class="footer-link" id="instagram" target="_blank">
                  <i class="fa-brands fa-instagram"></i>
              </a>

              <a href="https://www.facebook.com/" class="footer-link" id="facebook" target="_blank">
                  <i class="fa-brands fa-facebook-f"></i>
              </a>

              <a href="https://www.whatsapp.com/" class="footer-link" id="whatsapp" target="_blank">
                  <i class="fa-brands fa-whatsapp"></i>
              </a>
          </div>
      </div>
      
      <ul class="footer-list">
          <li>
              <h3>Blog</h3>
          </li>
          <li>
              <a href="#" class="footer-link">Tech</a>
          </li>
          <li>
              <a href="#" class="footer-link">Adventures</a>
          </li>
          <li>
              <a href="#" class="footer-link">Music</a>
          </li>
      </ul>

      <ul class="footer-list">
          <li>
              <h3>Products</h3>
          </li>
          <li>
              <a href="#" class="footer-link">App</a>
          </li>
          <li>
              <a href="#" class="footer-link">Desktop</a>
          </li>
          <li>
              <a href="#" class="footer-link">Cloud</a>
          </li>
      </ul>

      <div id="footer_subscribe">
          <h3>Subscribe</h3>

          <p>
              Enter your e-mail to get notified about
              our news solutions
          </p>

          <div id="input_group">
              <input type="email" id="email">
              <button>
                  <i class="fa-regular fa-envelope"></i>
              </button>
          </div>
      </div>
  </div>

  <div id="footer_copyright">
      &#169
      2024 all rights reserved
  </div>
</footer>

<script src="/js/menu.js"></script><!--script de rolagem da Nav-bar-->
<script src="/js/scriptMenuRes.js"></script><!--Menu-->

                </div>
            </div>
        </div>
    </body>
</html>
