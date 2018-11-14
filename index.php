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

      <section class="section-1"> <!-- section 1 -->
        <header> <!-- main header -->
          <div class="header-bg">
            <img class="logo" src="#" alt="#">
            <img class="lang" src="#" alt="#">
            <a href="?lang=eng"> engelska </a>
            <a href="?lang=swe"> svenska </a>
          </div>
        </header>
        <article class="title-section-1-2">
          <h1> <?= $languages[$lang]['titleS1']; ?> </h1>
        </article>
      </section>

      <section class="section-2"> <!-- section 2 -->
        <div class="box-1">

        </div>
        <article class="text-container">
          <div class="text-section-1-2 text-container-2">
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

      <section class="section-3"> <!-- section 3 -->
        <article class="title-section-1-2">
          <h1> <?= $languages[$lang]['titleF2']; ?> </h1>


        </article>
      </section>

      <section class="section-4"> <!-- section 4 -->
        <div class="picture-container">
          <div class="picture"> </div>
          <div class="picture"> </div>
          <div class="picture"> </div>
        </div>
        <article class="features-container">
          <div class="text-features"> </div>
          <div class="text-features"> </div>
          <div class="text-features"> </div>
        </article>
      </section>

      <section class="section-5"> <!-- section 5 -->
        <article>


        </article>
      </section>

      <footer> <!-- main footer -->

      </footer>

      <script type="text/javascript" src="assets/script.js"> </script>
      <script src="http://localhost:35729/livereload.js"> </script>
    </main>
  </body>
</html>
