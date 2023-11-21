<?php
//require "./app/data/Clientes_data.php";
require "./app/data/Servicos_data.php";
require "./app/data/Equipamentos.php";

$data = json_decode(file_get_contents("./app/clientes.json"));
$clientes_data = $data->clientes;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KNBJDQP');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-60GJ8990XD"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
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
  <meta name="keywords" content="escavadeira hidraulica, terraplanagem, caçamba de entulho, escavadeira,carregadeira, maquinas, retroescavadeira, munck, caminhão munck, prancha, transportadora, escavação">
  <link rel="canonical" href="https://www.nonotransporteselocacoes.com.br">
  <meta name="robots" content="index, follow">
  <meta name="distribution" content="global">
  <meta name="language" content="pt_BR">
  <meta property="og:title" content="Nonô Transportes">
  <meta property="og:url" content="https://www.nonotransporteselocacoes.com.br/">
  <meta property="og:site_name" content="Nonô Transportes">
  <meta property="og:description" content="Nonô transportes, Locação de retroescavadeira, caminhão plataforma, carreta prancha, prancha 03 eixos, prancha 04 eixos, caminhão munck, escavadeira hidráulica.">
  <meta property="og:type" content="website">
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KNBJDQP" height="0" width="0" style="display:none;visibility:hidden"></iframe>
  </noscript>
  <!-- End Google Tag Manager (noscript) -->

  <!-- NAVEGAÇÃO MENU -->
  <header id="header" class="container">
    <a id="logo" href="index.php">
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
  <main class="container">
    <!--CLIENTES-->
    <section class="client">
      <h2>Parceiros</h2>
      <div id="client" class="owl-carousel owl-theme">
        <?php foreach ($clientes_data as $c) { ?>
          <div <?= $c->id ?>>
            <img src="<?= $c->img ?>" alt="<?= $c->alt ?>">
          </div>
        <?php } ?>
      </div>
    </section>
    <!-- SERVIÇOS-->
    <section id="service">
      <h2>O que fazemos?</h2>
      <div id="services">
        <?php foreach ($servicos as $servico) { ?>
          <div id="card-service" <?= $servico['id'] ?>>
            <img src="<?= $servico['img'] ?>" class="card-img-top" alt="<?= $servico['alt'] ?>">
            <div class="card-content">
              <h4><?= $servico['title'] ?></h4>
              <p class="text-secondary"><?= $servico['description'] ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
    <!--RELAÇÃO DE MÁQUINAS E EQUIPAMENTOS-->
    <section id="equipamentos">
      <h2>Portfólio</h2>
      <div id="portfolio">
        <a href="https://drive.google.com/u/0/uc?id=1BD8x7KlAQ5Mq8rwmnDdZcw-MP_taky_f&export=download"><i class="ph-download"></i>Portfólio completo</a>
      </div>
      <div class="row">
        <?php foreach ($equipamentos as $e) { ?>
          <div class="col" <?= $e['id'] ?>>
            <h4 class="gradient"><?= $e['title'] ?></h4>
            <p><?= $e['description'] ?></p>
          </div>
          <div class="logo-equipaments d-flex gap-1">
            <?php foreach ($e['logos'] as $l) { ?>
              <div class="logo-equipaments">
                <img src="<?= $l['img'] ?>" alt="<?= $l['alt'] ?>">
              </div>
            <?php } ?>
          </div>
          <small class="gradient">Arraste para o lado →</small>
          <div class="owl-carousel equipamentos">
            <?php foreach ($e['imgs'] as $i) { ?>
              <figure <?= $i['id'] ?>>
                <img src="<?= $i['img'] ?>" alt="<?= $i['alt'] ?>">
                <figcaption><?= $i['description'] ?></figcaption>
              </figure>
            <?php } ?>
          </div>
        <?php } ?>
    </section>
    <!-- FORMULÁRIO -->
    <section id="orcamento">
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
              <img class="qrcode" src="/content/logo&icons/frame.png" alt="QR code instagram">
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
  </main>

  <script src="/assets/js/bootstrapv5.2.min.js"></script>
  <script src="/assets/js/jquery-3.6.0.min.js"></script>
  <script src="/assets/js/owl.carousel.min.js"></script>
  <script src="/assets/js/carousel.js"></script>
  <script src="/assets/js/btnMobile.js"></script>
  <script src="/assets/js/index.js"></script>
</body>

</html>