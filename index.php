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
   	<!-- <link rel="shortcut icon" type="image/png" href=" link here "> -->
  </head>
  <body>
    <main>

      <!-- Start dot-menu -->
      <!-- <div class="dot-menu">
        <span class="dot-btn" data-section="S01"><div class="dot-o"></div></i>Intro</span>
        <span class="dot-btn" data-section="S02"><div class="dot-o"></div></i>Info</span>
        <span class="dot-btn" data-section="S03"><div class="dot-o"></div></i>Contact</span>
        <span class="dot-btn" data-section="S04"><div class="dot-o"></div></i>More</span>
      </div> -->
      <!-- End dot-menu -->

      <header> <!-- main header -->
          <img class="logo" src="assets/images/Fill 50.jpg" alt="#">
            <p class="title"> <?= $languages[$lang]['titleS1']; ?> </p>
          <!-- <a href="?lang=eng"> engelska </a>
          <a href="?lang=swe"> svenska </a> -->
      </header>

      <section id="S01" class="section-component"> <!-- section 1 -->
        <div class="first-page-img">
          <img class="hidden-pic-1" src="assets/images/group 2.jpg" alt="#" width="100%" height="100%">
          <img class="hidden-pic-2" src="assets/images/Preview2.jpg" alt="#" width="100%" height="100%">
        </div>
      </section>

      <section id="S02" class="section-component"> <!-- section 2 -->
        <div class="wrapper">
          <p> Vision, Historia & Framtid </p>
          <div class="features-container">
            <div class="box-1">
              <img src="assets/images/Group 4.jpg" alt="#" width="100%" height="100%">
            </div>
              <div class="text-features">
                <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
                <p> <?= $languages[$lang]['textS2']; ?> </p>
              </div>
              <div class="text-features">
                <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
                <p> <?= $languages[$lang]['textS2']; ?> </p>
              </div>
              <div class="text-features">
                <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
                <p> <?= $languages[$lang]['textS2']; ?> </p>
              </div>
              <div class="button"> Jag vill bli en del av FS1.0 </div>
              <p> Ladda ner en digital version av FS1.0 LOOKBOOK </p>
            </div>
          </div>

          <div>
            <!-- <form class="form"> -->
             <!-- <label for=“mail”>Email</label> -->
             <!-- <input id="mail" type="email" placeholder="Email" /> -->
             <!-- <button type="submit">Send to email</button> -->
            <!-- </form> -->
          </div>
        </div>
      </section>

      <section id="S03" class="section-component"> <!-- section 3 -->
        <div class="second-page-img">
          <header>
            <p class="title"> <?= $languages[$lang]['titleF2']; ?> </p>
          </header>
          <img class="hidden-pic-1" src="assets/images/group 2.jpg" alt="#" width="100%" height="100%">
          <img class="hidden-pic-2" src="assets/images/preview2.jpg" alt="#" width="100%" height="100%">
        </div>
      </section>

      <section id="S04" class="section-component"> <!-- section 4 -->
        <div class="wrapper">
          <div class="picture-container">
            <div class="picture big-picture">
              <img src="assets/images/rectangle copy 2.jpg" alt="#" width="100%" height="100%">
            </div>
            <div class="picture">
              <img src="assets/images/rectangle copy 3.jpg" alt="#" width="100%" height="100%">
            </div>
            <div class="picture">
              <img src="assets/images/rectangle copy 4.jpg" alt="#" width="100%" height="100%">
            </div>
          </div>
          <article class="features-container">
            <div class="text-features">
              <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
              <p> <?= $languages[$lang]['textS2']; ?> </p>
            </div>
            <div class="text-features">
              <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
              <p> <?= $languages[$lang]['textS2']; ?> </p>
            </div>
            <div class="text-features">
              <h3> <?= $languages[$lang]['titleS2']; ?> </h3>
              <p> <?= $languages[$lang]['textS2']; ?> </p>
            </div>
          </div>
        </article>
      </section>

      <section> <!-- section 5 -->
        <article>
          <div class="left-panel">
            <div class="right_panel" id="right_panel">
              <i class="fa fa-arrows-h" aria-hidden="true"></i>
            </div>
          </div>
        </article>
      </section>

      <footer class="main-footer"> <!-- main footer -->
        <h1 style="height: 500px;"> TEMPORARY TEXT </h1> <!-- REMOVE LATER -->
      </footer>

      <script type="text/javascript" src="assets/script.js"> </script>
      <script src="http://localhost:35729/livereload.js"> </script>
    </main>
  </body>
</html>
