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
		<!-- <link href="https://fonts.googleapis.com/css?family=Didact+Gothic|Gothic+A1" rel="stylesheet"> -->
    <link href="assets/style.css" rel="stylesheet">
   	<!-- <link rel="shortcut icon" type="image/png" href=" link here "> -->
  </head>
  <body>
    <main>

      <section style="background-color: pink; width: 100%; height: 100vh;"> <!-- section 1 -->
        <header> <!-- main header -->
          <img class="logo" src="#" alt="#">
          <img class="lang" src="#" alt="#">
          <a href="?lang=eng"> engelska </a>
          <a href="?lang=swe"> svenska </a>
        </header>
        <article>

          <h1> <?= $languages[$lang]['titleS1']; ?> </h1>
          <p> <?= $languages[$lang]['textS1']; ?> </p>

        </article>
      </section>

      <section style="background-color: hotpink; width: 100%; height: 100vh;"> <!-- section 2 -->
        <article>


        </article>
      </section>

      <section style="background-color: gray; width: 100%; height: 100vh;"> <!-- section 3 -->
        <article>

          <form>
             <!-- <label for=“name”>Name</label> -->
             <input id="name" type="text" placeholder="Name" />

             <!-- <label for=“mail”>Email</label> -->
             <input id="mail" type="email" placeholder="Email" />
             <button type="submit">Send to email</button>
           </form>

        </article>
      </section>

      <footer> <!-- main footer -->

      </footer>

      <script type="text/javascript" src="assets/script.js"> </script>
      <script src="http://localhost:35729/livereload.js"> </script>
    </main>
  </body>
</html>
