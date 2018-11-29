<?php
declare(strict_types=1);
require(__DIR__.'/assets/languages.php');


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Fast Security 1.0 </title>
    <link href="assets/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <main>
      <!-- Start floated sidebar activator -->
      <div class="activator-menu"> <span class="bold-menu">Be Special. </span> <span class="light-menu"> Menu </span> </div>
        <div class="side-menu side-menu-close">
          <div class="languages">
            <a href="?lang=swe"> Svenska </a>
            <p> | </p>
            <a href="?lang=eng"> English </a>
          </div>
          <ul class="menu-items">
            <li class="smaller">Meny</li>
            <li>Vision, Historia & Framtid</li>
            <li>Komfort, Elegans & Modernitet</li>
            <li>Lookbook</li>
          </ul>
          <div class="info">
            <h2>Be special. FS1.0</h2>
            <p>Håll dig uppdaterad om FS1.0 och få veta så fort den finns tillgänglig för just dig.
            Ta del av exklusiva erbjudanden och kampanjer, de första 1000 anmälningarna får en gratis lookbook.
            <a href="#"> Ladda ner pdf-version här.</a> </p>
            <br>
          </div>
          <form class="form" method="post">
            <input type="text" name="name" placeholder="Name Surname">
            <input type="email" name="email" placeholder="E-mail">
            <label class="checkbox-flex"><input type="checkbox" name="accept">Jag har läst och godkänner</label>
            <button type="button" name="button">Skicka</button>
            <div class="flex-contact">
              <p>hello@fastsecurity.com</p>
              <p>+46 31 777 00 00</p>
            </div>
          </form>
        </div>
      <!-- End floated sidebar activator -->

      <header> <!-- main header -->
        <img class="logo" src="assets/images/fastsecurity_logo_fs_color.png" alt="#">
      </header>

      <section> <!-- section 1 -->
        <div class="first-page-img">
          <img class="hidden-pic-1" src="assets/images/fastsecurity_01.png" alt="#" width="100%" height="100%">
          <img class="hidden-pic-2" src="assets/images/fastsecurity_mobile_01.png" alt="#" width="100%" height="100%">
        </div>
        <p class="first-title"> You are special.</p>

      </section>

      <section> <!-- section 2 -->
        <div class="wrapper">
          <p class="intro-text"> Vision, Historia & Framtid </p>
          <div class="features-container">
            <div class="box-1">
              <img src="assets/images/fastsecurity_carousel_01_01.png" alt="#" width="100%" height="100%">
            </div>
              <div class="text-features">
                <p> Vision </p>
                <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
                <p> <?= $languages[$lang]['textS2']; ?> </p>
              </div>
              <div class="text-features">
                <p> Vision </p>
                <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
                <p> <?= $languages[$lang]['textS2']; ?> </p>
              </div>
              <div class="text-features">
                <p> Vision </p>
                <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
                <p> <?= $languages[$lang]['textS2']; ?> </p>
              </div>
              <div class="flex">
                <div class="button"> Jag vill bli en del av FS1.0 </div>
                <a class="lookbook" href="assets/lookbook.pdf" download> Ladda ner en digital version av FS1.0 Lookbook </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section> <!-- section 3 -->
        <div class="second-page-img">
          <img class="hidden-pic-1" src="assets/images/fastsecurity_02.png" alt="#" width="100%" height="100%">
          <img class="hidden-pic-2" src="assets/images/fastsecurity_mobile_02.png" alt="#" width="100%" height="100%">
          <div class="quotes">
            <div class="quotes-center">
              <p>“ I have always been interested in vehicles and the life around them. The FS1.0 is the car I se myself driving sooner than I expected. It has everything I want in a car. And it can fly. </p>
              <p> <span class="bold-menu"> I am special. “</span> </p>
              <p> Christiano Ronaldo, Professional fotball player </p>
            </div>
          </div>
        </div>
      </section>

      <section> <!-- section 4 -->
        <div class="wrapper">
          <p class="intro-text"> Vision, Historia & Framtid </p>
          <article class="features-container">
          <div class="picture-container">

            <!-- slideshow -->
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="w-100" src="assets/images/fastsecurity_carousel_02_01.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="w-100" src="assets/images/fastsecurity_carousel_02_02.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="w-100" src="assets/images/fastsecurity_carousel_02_03.png" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
            <div class="text-features">
              <p> Vision </p>
              <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
              <p> <?= $languages[$lang]['textS2']; ?> </p>
            </div>
            <div class="text-features">
              <p> Vision </p>
              <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
              <p> <?= $languages[$lang]['textS2']; ?> </p>
            </div>
            <div class="text-features">
              <p> Vision </p>
              <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
              <p> <?= $languages[$lang]['textS2']; ?> </p>
            </div>
            <div class="flex">
              <div class="button"> Jag vill bli en del av FS1.0 </div>
              <a class="lookbook" href="assets/lookbook.pdf" download> Ladda ner en digital version av FS1.0 Lookbook </a>
            </div>
          </div>
        </article>
      </section>

      <section> <!-- section 5 -->
        <article class="hide-overflow">
          <div class="left-panel">
            <div class="right_panel" id="right_panel">
              <p> Drag för detaljer </p>
            </div>
            <img class="bg-left-panel hidden-pic-1" src="assets/images/fastsecurity_slider_front.png" alt="#">
            <img class="bg-left-panel hidden-pic-2" src="assets/images/fastsecurity_mobile_slider_front.png" alt="#">
          </div>
        </article>
      </section>

      <section> <!-- section 6 -->
        <div class="wrapper">
          <p class="intro-text"> Vision, Historia & Framtid </p>
          <div class="features-container">
            <div class="picture-container">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/images/Fastsecurity_carousel_03_01.png" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/Fastsecurity_carousel_03_02.png" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/Fastsecurity_carousel_03_03.png" alt="Third slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/Fastsecurity_carousel_03_04.png" alt="Fourth slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/images/Fastsecurity_carousel_03_05.png" alt="Fifth slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>

              <div class="text-features">
                <p> Vision </p>
                <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
                <p> <?= $languages[$lang]['textS2']; ?> </p>
              </div>
              <div class="flex">
                <div class="button"> Jag vill bli en del av FS1.0 </div>
                <a class="lookbook" href="assets/lookbook.pdf" download> Ladda ner en digital version av FS1.0 Lookbook </a>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section> <!-- section 7 -->
        <div class="second-page-img">
          <img class="hidden-pic-1" src="assets/images/fastsecurity_04.png" alt="#" width="100%" height="100%">
          <img class="hidden-pic-2" src="assets/images/fastsecurity_mobile_04.png" alt="#" width="100%" height="100%">
        </div>
        <div class="quotes">
          <div class="quotes-center">
            <p>“ I have always been interested in vehicles and the life around them. The FS1.0 is the car I se myself driving sooner than I expected. It has everything I want in a car. And it can fly. </p>
            <p> <span class="bold-menu"> I am special. “</span> </p>
            <p> Christiano Ronaldo, Professional fotball player </p>
          </div>
        </div>
      </section>

      <footer> <!-- main footer -->
        <div class="footer-holder">
          <div class="footer-align-left">
            <p>“ I have always</p>
            <p>“ I have always</p>
            <p>“ I have always</p>
            <p>“ I have always</p>
          </div>
          <div class="footer-align-right">
            <div class="languages-footer">
              <a href="?lang=swe"> Svenska </a>
              <p> | </p>
              <a href="?lang=eng"> English </a>
            </div>
            <p> Christiano Ronaldo, Professional fotball player </p>
            <p>“ I have always</p>
            <p>“ I have always</p>
          </div>
        </div>
        <div class="icons">
          <img src="assets/images/g3763.svg" alt="#">
          <img src="assets/images/g5991.svg" alt="#">
          <img src="assets/images/Group.svg" alt="#">
        </div>
      </footer>

      <script type="text/javascript" src="assets/script.js"> </script>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      <script src="http://localhost:35729/livereload.js"> </script>
    </main>
  </body>
</html>
