<?php
declare(strict_types=1);
require(__DIR__.'/assets/languages.php');


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title> Fast Security 1.0 </title>
		<link href="https://fonts.googleapis.com/css?family=Archivo+Black" rel="stylesheet">
    <link href="assets/style.css" rel="stylesheet">
   	<!-- <link rel="shortcut icon" type="image/png" href=" link here "> -->
  </head>
  <body>
    <main>

      <section> <!-- section 1 -->
        <header> <!-- main header -->
          <div class="header-bg">
            <img class="logo" src="#" alt="#">
            <img class="lang" src="#" alt="#">
            <a href="?lang=eng"> engelska </a>
            <a href="?lang=swe"> svenska </a>
          </div>
        </header>
        <div class="first-page-img">
          <article class="title">
            <h1> <?= $languages[$lang]['titleS1']; ?> </h1>
          </article>
        </div>
      </section>

      <section class="s-padding"> <!-- section 2 -->
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
      </section>

      <section> <!-- section 3 -->
        <div class="first-page-img">
          <article class="title">
            <h1> <?= $languages[$lang]['titleF2']; ?> </h1>


          </article>
        </div>
      </section>

      <section class="s-padding"> <!-- section 4 -->
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
        </article>
      </section>

      <section> <!-- section 5 -->
        <article>

          <h1 style="height: 1070px;"> TEMPORARY TEXT </h1> <!-- REMOVE LATER -->

        </article>
      </section>

      <footer> <!-- main footer -->
        <h1 style="height: 500px;"> TEMPORARY TEXT </h1> <!-- REMOVE LATER -->
      </footer>

      <script type="text/javascript" src="assets/script.js"> </script>
      <script src="http://localhost:35729/livereload.js"> </script>
    </main>
  </body>
</html>
