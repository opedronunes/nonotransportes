<?php
require "./app/data/Clientes_data.php";
require "./app/data/Servicos_data.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
      new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
      j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
      'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
      })(window,document,'script','dataLayer','GTM-KNBJDQP');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-60GJ8990XD"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-60GJ8990XD');
    </script>
    <script src="https://unpkg.com/phosphor-icons"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="/assets/css/bootstrapv5.2.min.css">
    <link rel="shortcut icon" href="/content/logo&icons/icon.jpg" type="image/x-icon">
    <link rel="stylesheet" href="/assets/css/index.css">
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css/owl.theme.default.min.css">

    <title>Nonô Transportes e Serviços</title>
    <meta name="description" content="Nonô transportes, Locação de retroescavadeira, caminhão plataforma, carreta prancha, prancha 03 eixos, prancha 04 eixos, caminhão munck, escavadeira hidráulica.">
    <meta name="abstract" content="Locação equipamentos, transporte de equipamentos, serviços relacionados a construção civil.">
    <link rel="canonical" href="https://www.nonotransporteselocacoes.com.br">
    <meta name="robots" content="index, follow">
    <meta name="distribution" content="global">
    <meta name="language" content="pt_BR">
    <meta property="og:title" content="Nonô Transportes">
    <meta property="og:url" content="https://www.nonotransporteselocacoes.com.br/">
    <meta property= "og:site_name" content="Nonô Transportes">
    <meta property="og:description" content="Nonô transportes, Locação de retroescavadeira, caminhão plataforma, carreta prancha, prancha 03 eixos, prancha 04 eixos, caminhão munck, escavadeira hidráulica.">
    <meta property="og:type" content="website">
  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNBJDQP"
      height="0" width="0" style="display:none;visibility:hidden"></iframe>
    </noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- NAVEGAÇÃO MENU -->
    <header id="header">
      <a id="logo" href="index.html">
        <img src="/content/logo&icons/logo.png" alt="Logo Nonô transportes">
      </a>
      <nav id="nav">
        <button id="btn-mobile" aria-label="Abrir Menu" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <ul id="menu" role="menu">
          <li class="list active"><a href="index.html">Home</a></li>
          <!-- SERVICES -->
          <li class="list"><a href="#service">Serviços</a></li>
          <!-- EQUIPAMENTS -->
          <li class="list"><a href="#equipamentos">Equipamentos</a></li>
          <!-- BUDGET -->
          <li class="list"><a href="#orcamento">Orçamento</a></li>
          <!-- CONTACTS -->
          <li class="list"><a href="#contact">Contato</a></li>
        </ul>
      </nav>
    </header>
    <!-- CAROUSEL -->
    <div id="carousel" class="carousel slide" data-bs-ride="carousel" data-bs-pause="false">
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
          <img src="/content/images/2021/carousel/munckefh540-01.jpg" class="d-block" alt="Munck e FH540">
          <div class="carousel-caption">
            <h1>Diferencial</h1>
            <p>Qualidade em atendimento e prestação de Serviços!</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="/content/images/2021/carousel/03_eixos.jpg" class="d-block" alt="p03eixos">
          <div class="carousel-caption">
            <h1>Sempre a frente</h1>
            <p>Com frotas e equipamentos prontos para te atender!</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="/content/images/2021/carousel/volvof540-04.jpg" class="d-block" alt="Volvo FH540">
          <div class="carousel-caption">
            <h1>Transparência</h1>
            <p>É nosso dever cultivar as boas práticas e relações saudáveis.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
          <img src="/content/images/2021/carousel/02RETRO-03.jpg" class="d-block" alt="Munck Luna 45">
          <div class="carousel-caption">
            <h1>Nossa missão</h1>
            <p>Ser referêcia na prestação de serviços e locação de equipamentos!</p>
          </div>
        </div>
      </div>
    </div>
    
    <!-- BUTTON RETURN TO TOP -->
    <button onclick="topFunction()" id="btnToTop" title="Go to top">
      <i class="fas fa-long-arrow-alt-up"></i>
    </button>
    <!-- LOGO CLIENTS era 586 linhas -->
    <section class="client">
      <div class="container">
        <h2>Parceiros</h2>
        <div id="client" class="owl-carousel owl-theme">
          <?php foreach($clientes as $cliente) { ?>
            <div <?= $cliente['id'] ?>>
              <img src="<?=$cliente['img']?>" alt="<?=$cliente['alt']?>">
            </div>
          <?php } ?>
        </div>
    </section>
    <!-- SERVIÇOS-->
    <section id="service">
      <div class="container">
        <h2>O que fazemos?</h2>
        <div id="services">
          <?php foreach($servicos as $servico){ ?>
            <div id="card-service" <?= $servico['id'] ?>>
              <img src="<?= $servico['img'] ?>" class="card-img-top" alt="<?= $servico['alt'] ?>">
              <div class="card-content">
                <h4><?= $servico['title'] ?></h4>
                <p><?= $servico['description'] ?></p>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </section>

    <!-- EQUIPAMENTOS-->
    <section id="equipamentos" >
      <div class="container">
        <h2>Portfólio</h2>
        <div id="portfolio">
          <a href="https://drive.google.com/u/0/uc?id=1BD8x7KlAQ5Mq8rwmnDdZcw-MP_taky_f&export=download"><i class="ph-download"></i>Portfólio completo</a>
        </div>
        <div class="row">
          <!-- CAÇAMBAS -->
          <div class="col">
            <h4 class="gradient">Caçambas</h4>
            <p>
              Para atender a demanda, disponibilizamos caminhões basculantes para realizar retiradas/transporte de materiais a granel. 
              Com descarte e locais apropriados e autorizados pelos agentes de fiscalização.
            </p>
            <div class="logo-equipaments">
              <img src="/content/logo&icons/VOLVO200X140.jpg" alt="Logotipo da marca Volvo">
            </div>
            <small class="gradient">Arraste para o lado →</small>
            <div class="owl-carousel equipamentos">
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/cacambas/01.jpg" alt="Foto de Escavadeira hidráulica">
                  <figcaption>Carreta caçamba 30TN</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/cacambas/02.jpg" alt="Foto de Escavadeira hidráulica">
                  <figcaption>Caminhão VM330 com caçamba</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/cacambas/03.jpg" alt="Foto de Escavadeira hidráulica">
                  <figcaption>Caminhão VM330 com caçamba</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/cacambas/04.jpg" alt="Foto de Escavadeira hidráulica">
                  <figcaption>Conjunto de três caçambas</figcaption>
                </figure>
              </div>
            </div>
          </div>
          <!-- RETROESCAVADEIRAS -->
          <div class="col">
            <h4 class="gradient">Máquinas</h4>
            <p>
              Nosso portfólio é composto por 06 Retroescavadeira JCB 3CX. O equipamento é líder de mercado 
              em 74 países, ou seja, um conjunto perfeito aliando o baixo custo de propriedade e força superior
              como padrão.
            </p>
            <p>
              Completando o conjunto, nossa Pá carregadeira WA200-6 KOMATSU faz a diferença com sua alta produtividade
              e baixo consumo de combustível. E também nosso mais novo equipamento é a Escavadeira hidráulica JCB JS220LC, 
              possuindo o peso operacional de 22 toneladas, foi desenvolvida para apresentar força, produtividade, eficiência, 
              segurança e facilidade de manutenção.
            </p>
            <div class="logo-equipaments">
              <img src="/content/logo&icons/JCB200X140.jpg" alt="">
              <img src="/content/logo&icons/KOMATSU200X140.jpg" alt="">
            </div>
            <small class="gradient">Arraste para o lado →</small>
            <div class="owl-carousel equipamentos">
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/RetroePa/Escavadeirajcb220.jpg" alt="Foto de Escavadeira hidráulica">
                  <figcaption>Escavadeira hidráulica JCB JS220LC</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/RetroePa/liugong_01.jpg" alt="Foto de pá carregadeira LiuGong">
                  <figcaption>Pá carregadeira LiuGong 835</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/RetroePa/pc-001.jpg" alt="Foto de retroescavadeira">
                  <figcaption>Pá carregadeira WA200-6 KOMATSU</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/RetroePa/re-002.jpg" alt="Foto de retroescavadeira">
                  <figcaption>Retroescavadeira JCB 3CX 4X4 - RE02</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/RetroePa/re-003.jpg" alt="Foto de retroescavadeira">
                  <figcaption>Retroescavadeira JCB 3CX 4X4 - RE03</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/RetroePa/re-004.jpg" alt="Foto de Retroescavadeira ">
                  <figcaption>Retroescavadeira JCB 3CX 4X4 - RE04</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/RetroePa/re-005.jpg" alt="Foto de Retroescavadeira ">
                  <figcaption>Retroescavadeira JCB 3CX 4X4 - RE05</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/RetroePa/re-006.jpg" alt="Foto de Retroescavadeira ">
                  <figcaption>Retroescavadeira JCB 3CX 4X4 - RE06</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/RetroePa/re-008.jpg" alt="Foto de Retroescavadeira ">
                  <figcaption>Retroescavadeira CASE 580N 4X2 - RE08</figcaption>
                </figure>
              </div>
            </div>
          </div>
          <!-- CAMINHÕES MUNCK -->
          <div class="col">

            <h4 class="gradient">Caminhões munck</h4>
            <p>
              Caminhão munck ou caminhão com guindauto é um equipamento com o objetivo de içar
              qualquer tipo de material suportado pelo mesmo, carregar, transportar e descarregar
              com facilidade e agilidade.
            </p>
            <div class="logo-equipaments">
              <img src="/content/logo&icons/LUNAALG200X140.jpg" alt="">
              <img src="/content/logo&icons/IMAP200X140.jpg" alt="">
              <img src="/content/logo&icons/VOLVO200X140.jpg" alt="">
              <img src="/content/logo&icons/FORD200X140.jpg" alt="">
            </div>
            <small class="gradient">Arraste para o lado →</small>
            <div class="owl-carousel equipamentos">
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Muncks/munck-001.jpg" alt="Foto Caminhão Munck">
                  <figcaption>Ford Cargo 2422 CN e Munck Argo AGI 43</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Muncks/2540.jpg" alt="Foto Caminhão Munck">
                  <figcaption>M. Benz / Axor 2540 e Munck luna 47</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Muncks/munck-003.jpg" alt="Foto Caminhão Munck">
                  <figcaption>Ford Cargo 2422 e Munck Luna 47</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Muncks/munck-004.jpg" alt="Foto Caminhão Munck">
                  <figcaption>Volvo VM 270 6X4R e Munck Luna 45</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Muncks/munck-006.jpg" alt="Foto Caminhão Munck">
                  <figcaption>Ford Cargo 2422 CN e Munck Imap IM55</figcaption>
                </figure>
              </div>
            </div>
          </div>
          <!-- PLATAFORMAS -->
          <div class="col">
            
            <h4 class="gradient">Plataformas</h4>
            <p>
              Esse equipamento tem várias características que o definem como caminhão plataforma
              guincho, podem oferecer variadas capacidades de cargas de acordo com a necessidade das 
              operações. Com nossos dois caminhões guincho podemos mobilizar os nossos equipamentos
              com segurança, eficiência e confiabilidade.
            </p>
            <div class="logo-equipaments">
              <img src="/content/logo&icons/WOLKS200X140.jpg" alt="">
              <img src="/content/logo&icons/VOLVO200X140.jpg" alt="">
            </div>
            <small class="gradient">Arraste para o lado →</small>
            <div class="owl-carousel equipamentos">
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Plataformas/pt-001.jpg" alt="Foto de caminhão plataforma carregado">
                  <figcaption>Volkswagen 15-180 CNM</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Plataformas/pt-002.jpg" alt="Foto de caminhão plataforma carregado">
                  <figcaption>Volkswagen 15-180 CNM</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Plataformas/pt-003.jpg" alt="Foto de caminhão plataforma carregado">
                  <figcaption>Volkswagen 15-180 CNM</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Plataformas/pt-004.jpg" alt="Foto de caminhão plataforma carregado">
                  <figcaption>Volvo VM 270 8X2R</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Plataformas/pt-005.jpg" alt="Foto de caminhão plataforma carregado">
                  <figcaption>Volvo VM 270 8X2R</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Plataformas/pt-006.jpg" alt="Foto de caminhão plataforma carregado">
                  <figcaption>Volvo VM 270 8X2R</figcaption>
                </figure>
              </div>
            </div>
          </div>
          <!-- PRANCHAS -->
          <div class="col">
            <h4 class="gradient">Carretas Prancha</h4>
            <p>
              Diferente dos caminhões guincho, a principal característica das carretas prancha
              é transportar equipamentos e materiais pesados de grande porte. Em nosso portfólio,
              temos dois cavalo (cabine), uma prancha 03 eixos, uma prancha 04 eixos, uma prancha
              rebaixada e duas carreta carga seca.
            </p>
            <div class="logo-equipaments">
              <img src="/content/logo&icons/VOLVO200X140.jpg" alt="">
              <img src="/content/logo&icons/MERCEDES200X140.jpg" alt="">
            </div>
            <small class="gradient">Arraste para o lado →</small>
            <div class="owl-carousel equipamentos">
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Pranchas/cavalo-001.jpg" alt="Foto de carreta e prancha">
                  <figcaption>M. Benz / Axor 2544 S</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Pranchas/cavalo-002.jpg" alt="Foto de carreta e prancha">
                  <figcaption>M. Benz / Axor 2544 S</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Pranchas/cavalo-003.jpg" alt="Foto de carreta e prancha">
                  <figcaption>M. Benz / Axor 2544 S</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Pranchas/cavalo-004.jpg" alt="Foto de carreta e prancha">
                  <figcaption>Volvo FH 540 6X4T</figcaption>
                </figure>
              </div>
              <div>
                <figure>
                  <img src="/content/images/2021/portfolio/Pranchas/cavalo-006.jpg" alt="Foto de carreta e prancha">
                  <figcaption>Volvo FH 540 6X4T</figcaption>
                </figure>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- FORMULÁRIO -->
    <section id="orcamento">
      <div class="container">
        <h2>Orçamento</h2>
        
          <form class="row" action="/app/Email_send.php" method="post">
            
            <h4>Solicite um orçamento!</h4>
          <small>OBS.: Os itens com asteríscos são de preenchimento obrigatório.</small>
          <div class="col-md-6">
            <label class="form-label" for="name">Nome e sobrenome: *</label>
            <input class="form-control" type="text" name="name" id="name" placeholder="Nome e sobrenome" required>
          </div>

          <div class="col-12">
            <label class="form-label" for="email">E-mail: *</label>
            <input class="form-control" type="email" name="email" id="email" placeholder="ex: example@example.com" required>
          </div>

          <div class="col-12">
            <label class="form-label" for="cell">Celular: *</label>
            <input class="form-control" type="tel" name="phone" id="cell" placeholder="(00) 0 0000-0000" required>
          </div>

          <div class="col-12">
            <label class="form-label" for="option">Orçamento para: *</label>
            <select class="form-select" name="subject" id="option" required>
              <option value="Locação mensal">Locação mensal de equipamentos</option>
              <option value="Diária">Locação diária</option>
              <option value="Retroescacadeira">Locação de retroescavadeira</option>
              <option value="Transporte">Locação de caminhão plataforma ou prancha para transporte</option>
              <option value="Munck">Locação de munck</option>
              <option value="Guindaste">Locação de guindastes</option>
              <option value="Remoção">Equipe de remoção</option>
              <option value="Outros">Outros</option>
            </select>
          </div>
          <div class="col-12">
            <label class="form-label" for="description">Descreva o que precisa:</label>
            <textarea class="form-control" name="message" id="description"></textarea>
          </div>
          <!-- <input type="text" name="honeypot" style="display: none;"> -->
          <div>
            <button id="envio" class="btn" type="submit">Solicitar orçamento</button>
            <!-- name="enviar" -->
          </div>
        </form>
      </div>
    </section>
    
    <!-- FOOTER -->
    <footer class="text-center text-muted">
      <div class="logo-footer">
        <img src="/content/logo&icons/nono.png" alt="Logo Nonô">
      </div>
      <div class="container">
        <!-- CONTACTS -->
        <div id="endereco">
          <h4>Endereço:</h4>
          <p>Núcleo rural alexandre Gusmão Gleba 02 CH 195A Brazlândia - DF</p>
          <p>CEP: 72.701-997</p>
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3840.3843897682245!2d-48.14937308513006!3d-15.730791825584642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a33c7ee703e27%3A0xb105d5be90164bb2!2sNon%C3%B4%20Transportes!5e0!3m2!1spt-BR!2sbr!4v1663597462977!5m2!1spt-BR!2sbr" height="400" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        <div id="contact" class="contact-footer">
          <div class="row">
            <div class="col contact-footer-itens">
              <a target="blank" href="https://wa.me/message/IB4OWSY7HO5XI1"><i class="fab fa-whatsapp"></i> (61)99988-3184</a>
              <a target="blank" href="https://wa.me/qr/JBHPSM3SNVTRN1"><i class="fab fa-whatsapp"></i> (61)99153-8990</a>
              <a target="blank" href="https://wa.me/message/QVFKFR6ESFPLH1"><i class="fab fa-whatsapp"></i> (61)3354-7090</a>
              <a target="blank" href="mailto:nono.transportes@hotmail.com?subject=Orçamento para"><i class="far fa-envelope"></i> nono.transportes@hotmail.com</a>
            </div>
            <div class="col qrcode-insta">
              <a target="blank" href="https://instagram.com/nonotransportes.rental?utm_medium=copy_link"><i class="fab fa-instagram"></i> Siga-nos</a>
              <img class ="qrcode" src="/content/logo&icons/frame.png" alt="QR code instagram">
            </div>
          </div>
        </div>
      </div>
      <!-- REFERENCE -->
      <div class="footer-reference">
        <span>
          &copy;Nonô Transportes e serviços LTDA - CNPJ: 35.226.051/0001-10 | Criation and development <a target="blank" href="https://www.opedronunes.com.br"><img src="/content/logo&icons/logoPN.png" alt="Logo Pedro Nunes-Dev"></a>
        </span>
      </div>
    </footer>

    <script src="/assets/js/bootstrapv5.2.min.js"></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
    <script src="/assets/js/owl.carousel.min.js"></script>
    <script src="/assets/js/carousel.js"></script>
    <script src="/assets/js/btnMobile.js"></script>
    <script src="/assets/js/index.js"></script>
  </body>
</html>