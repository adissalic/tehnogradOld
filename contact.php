<!DOCTYPE html>
<html lang="zxx">
  <head>
    <title>Tehnograd-company</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Tehnograd-company" />
    <meta
      name="keywords"
      content="tehnograd, company, tehnograd-company, tuzla, zgrade, stanovi"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="shortcut icon" />

    <!-- Google font -->
    <link
      href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&display=swap"
      rel="stylesheet"
    />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/slicknav.min.css" />

    <!-- Main Stylesheets -->
    <link rel="stylesheet" href="css/style.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-157838266-2"
    ></script>

    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "TUA-157838266-2");
    </script>
  </head>
  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
      <a href="index.html" class="site-logo">
        <img src="img/logo123.png" class="logo-image" alt="" />
      </a>
      <ul class="main-menu">
        <li><a href="index.html">Naslovna</a></li>
        <li><a href="about.html">O nama</a></li>
        <li><a href="stanovi.html">Stanovi</a></li>
        <li><a href="poslovniprostori.html">Poslovni prostori</a></li>
        <li><a href="blog.html">Novosti</a></li>
        <li><a class="active" href="contact.php">Kontakt</a></li>
        <li class="header-right">
          <div class="hr-box">
            <img src="img/location-icon.png" alt="" />
            <h6>Fra Grge Martića 8 Tuzla 75000</h6>
          </div>
        </li>
      </ul>
    </header>
    <div class="clearfix"></div>
    <!-- Header section end -->

    <!-- Page top section -->
    <section class="page-top-section set-bg" data-setbg="img/header-bg/1.jpg">
      <div class="container">
        <h2>Kontakt</h2>
      </div>
    </section>
    <!-- Page top section end -->

    <!-- Contact section -->
    <section class="contact-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h2 class="contact-title">Informacije</h2>
            <div class="contact-info-warp">
              <h4>Lokacija</h4>
              <div class="contact-info">
                <img src="img/icons/1-dark.png" alt="" />
                <div class="cf-text">
                  <p>Fra Grge Martića 8 Tuzla 75000</p>
                </div>
              </div>
            </div>
            <div class="contact-info-warp">
              <h4>Informacije</h4>
              <div class="contact-info">
                <img src="img/icons/2-dark.png" alt="" />
                <div class="cf-text">
                  <p>Tel: 387 35 252 642</p>
                  <p>Fax: 387 35 252 640</p>
                </div>
              </div>
            </div>
            <div class="contact-info-warp">
              <h4>E-mail</h4>
              <div class="contact-info">
                <img src="img/icons/3-dark.png" alt="" />
                <div class="cf-text">
                  <p>Marketing</p>
                  <p>marketing@tehnograd-company.ba</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-8" id="from">
            <h2 class="contact-title">Pošaljite upit</h2>

            <form
              class="contact-form"
              action="mailer.php"
              method="post"
            >
            <?php
            if($_GET['success'] == 1) {
             echo "<div class=\"form-messages success\">Vaš upit je uspješno poslan.</div>"; }
              
             if($_GET['success'] == -1) {
                echo "<div class=\"form-messages error\">Ops. Nastao je problem. Pokušajte ponovo.</div>"; }
             ?>

              <input
                class="col-md-6"
                type="text"
                name="name"
                placeholder="Ime"
                required
              />

              <input
                class="col-md-6"
                type="text"
                name="email"
                placeholder="Vaš E-mail"
                required
              />
              <input
                class="col-md-12"
                type="text"
                name="message1"
                placeholder="Unesite ID objekta Npr. PPTT 001"
              />
              <input
                type="text"
                name="message"
                placeholder="Poruka"
                size="50"
                required
              />

              <input
                type="submit"
                value="Pošalji poruku"
                class="site-btn"
              />
            </form>
          </div>
        </div>
        <div class="container1234">
          <h4>Mail:</h4>
        </div>
        <div class="col-lg-12">
          <a href="mailto:direktor@tehnograd-company.ba ">
            <button class="mails">Generalni direktor</button></a
          >

          <a href="mailto:tehnicki@tehnograd-company.ba">
            <button class="mails">Tehnički direktor</button></a
          >
          <a href="mailto:finansije@tehnograd-company.ba">
            <button class="mails">Finansijski direktor</button></a
          >
          <a href="mailto:pravna_s@tehnograd-company.ba ">
            <button class="mails">Pravna služba</button></a
          >
          <a href="mailto:sekretarica@tehnograd-company.ba">
            <button class="mails">Sektretarica</button></a
          >
          <a href="mailto:priprema@tehnograd-company.ba">
            <button class="mails">Služba pripreme</button></a
          >
          <a href="mailto:kadrovska@tehnograd-company.ba">
            <button class="mails">Kadrovska služba</button></a
          >

          <a href="mailto:komercijala@tehnograd-company.ba ">
            <button class="mails">Služba nabavke</button></a
          >
        </div>
        <div class="container1234">
          <h4>Telefon:</h4>
        </div>
        <div class="col-lg-12">
          <a href="tel:035-252-433">
            <button class="mails">Generalni direktor</button></a
          >

          <a href="tel:035-252-433">
            <button class="mails">Tehnički direktor</button></a
          >
          <a href="tel:035-252-374">
            <button class="mails">Finansijski direktor</button></a
          >
          <a href="tel:035-251-211">
            <button class="mails">Pravna služba</button></a
          >
          <a href="tel:035-252-433">
            <button class="mails">Sektretarica</button></a
          >
          <a href="tel:035-250-071">
            <button class="mails">Služba pripreme</button></a
          >
          <a href="tel:035-251-211">
            <button class="mails">Kadrovska služba</button></a
          >

          <a href="tel:035-250-034">
            <button class="mails">Služba nabavke</button></a
          >
        </div>
      </div>

      <div class="map">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2843.843504347438!2d18.669522515526726!3d44.538836779100905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475ead18f8b95b33%3A0x87c3a7f153e7b87!2sTehnograd%20Company!5e0!3m2!1shr!2sba!4v1573525228199!5m2!1shr!2sba"
          style="border:0"
          allowfullscreen
        ></iframe>
      </div>
    </section>
    <!-- Contact section end -->

    <!-- Newsletter section  -->
    <section
      class="newsletter-section set-bg"
      data-setbg="img/newsletter-bg.jpg"
    >
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="section-title text-white mb-0">
              <h2>Pratite <span>novosti</span></h2>
            </div>
          </div>
          <div class="col-lg-6">
            <form method="POST" action="subscribe.php" class="newsletter-form">
              <br />
              <input
                class="col-lg-5"
                type="text"
                name="Email"
                placeholder="Tvoj e-mail ovdje"
              />
              <input
                class="site-btn col-lg-1"
                type="submit"
                value="Prati novosti"
              />
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Newsletter section end -->

    <!-- Footer section -->
    <footer class="footer-section set-bg" data-setbg="img/footer-bg.jpg">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget">
              <h4>Lokacija</h4>
              <div class="fw-info-box">
                <img src="img/icons/1.png" alt="" />
                <div class="fw-info-text">
                  <p>Fra Grge Martića 8 Tuzla 75000</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget">
              <h4>Informacije</h4>
              <div class="fw-info-box">
                <img src="img/icons/2.png" alt="" />
                <div class="fw-info-text">
                  <p>Tel: 387 35 252 642</p>
                  <p>Fax: 387 35 252 640</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget">
              <h4>E-mail</h4>
              <div class="fw-info-box">
                <img src="img/icons/3.png" alt="" />
                <div class="fw-info-text">
                  <p>marketing@tehnograd-company.ba</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="footer-widget">
              <h4>Social Media</h4>
              <div class="fw-info-box">
                <div class="social-links">
                  <a
                    href="https://www.facebook.com/TehnogradCompanyTuzla"
                    target="_blank"
                    ><i class="fa fa-facebook"></i
                  ></a>
                  <a
                    href="https://www.instagram.com/tehnogradcompany"
                    target="_blank"
                    ><i class="fa fa-instagram"></i
                  ></a>
                  <a
                    href="https://www.linkedin.com/company/tehnograd-company-d-o-o-tuzla/"
                    target="_blank"
                    ><i class="fa fa-link"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 order-2 order-md-1">
            <div class="copyright">
              <p>
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved |
                <a href="https://alicadis.com" target="_blank">Adis Alić</a>
              </p>
            </div>
          </div>
          <div class="col-md-6 order-1 order-md-2">
            <ul class="footer-menu">
              <li><a href="index.html">Naslovna</a></li>
              <li><a href="about.html">O nama</a></li>
              <li><a href="stanovi.html">Stanovi</a></li>
              <li><a href="poslovniprostori.html">Poslovni prostori</a></li>
              <li><a href="blog.html">Novosti</a></li>
              <li><a href="contact.php">Kontakt</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer section end -->
    <!--====== Javascripts & Jquery ======-->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/circle-progress.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
