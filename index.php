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
		<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="assets/style.css" rel="stylesheet">

   	<!-- <link rel="shortcut icon" type="image/png" href=" link here "> -->
  </head>
  <body>
    <main>

      <!-- Start dot-menu -->
      <div class="dot-menu">
        <span class="dot-btn" data-section="S01"><div class="dot-o"></div></i>Intro</span>
        <span class="dot-btn" data-section="S02"><div class="dot-o"></div></i>Info</span>
        <span class="dot-btn" data-section="S03"><div class="dot-o"></div></i>Contact</span>
        <span class="dot-btn" data-section="S04"><div class="dot-o"></div></i>More</span>
      </div>
      <!-- End dot-menu -->

      <header class="main-header"> <!-- main header -->
        <div class="header-bg">
          <img class="logo" src="assets/images/placeholder.jpg" alt="#">
          <a href="?lang=eng"> engelska </a>
          <a href="?lang=swe"> svenska </a>
        </div>
      </header>

      <section id="S01" class="section-component"> <!-- section 1 -->
        <div class="first-page-img">
          <article class="title">
            <h1> <?= $languages[$lang]['titleS1']; ?> </h1>
          </article>
        </div>
      </section>

      <section id="S02" class="section-component"> <!-- section 2 -->
        <div class="wrapper">
          <div class="box-1">
            <img src="assets/images/placeholder.jpg" alt="#" width="100%" height="100%">
          </div>
          <article class="container">
            <div class="text-container">
              <h2 class="text-padding text-color"> <?= $languages[$lang]['titleF']; ?> </h2>
              <p class="text-padding text-color"> <?= $languages[$lang]['titleS2']; ?> </p>
              <p class="text-color"> <?= $languages[$lang]['textS2']; ?> </p>
            </div>
          </article>
          <div>
            <form class="form">
             <!-- <label for=“mail”>Email</label> -->
             <input id="mail" type="email" placeholder="Email" />
             <button type="submit">Send to email</button>
            </form>
          </div>
        </div>
      </section>

      <section id="S03" class="section-component"> <!-- section 3 -->
        <div class="first-page-img">
          <article class="title">
            <h1> <?= $languages[$lang]['titleF2']; ?> </h1>


          </article>
        </div>
      </section>

      <section id="S04" class="section-component"> <!-- section 4 -->
        <div class="wrapper">
          <div class="picture-container">
            <div class="picture big-picture">
              <img src="assets/images/placeholder.jpg" alt="#" width="100%" height="100%">
            </div>
            <div class="picture">
              <img src="assets/images/placeholder.jpg" alt="#" width="100%" height="100%">
            </div>
            <div class="picture">
              <img src="assets/images/placeholder.jpg" alt="#" width="100%" height="100%">
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
