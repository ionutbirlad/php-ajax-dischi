<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.3/handlebars.min.js"></script> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="public/css/style.css">
    <!-- <script src="https://kit.fontawesome.com/80a8b5f4b8.js" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script> -->
      <!-- VERSIONE BASE -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js" integrity="sha256-4iQZ6BVL4qNKlQ27TExEhBN1HFPvAvAMbFavKKosSWQ=" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/locale/it.js" integrity="sha256-D8y560ZGsKY1LoAajKkQCG7y0Vkye361MH4yFv2K5kk=" crossorigin="anonymous"></script> -->
      <!-- VERSIONE BASE -->
      <!-- OWL CAROUSEL -->
    <!-- <link rel="stylesheet" href="owlcarousel/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="owlcarousel/owl.theme.default.min.css"> -->
    <!-- <script src="owlcarousel/owl.carousel.min.js"></script> -->
      <!-- OWL CAROUSEL -->
    <!-- google font -->
    <!-- favicon -->
  </head>
  <body>

    <header>
      <div class="container">
        <div class="logo">
          <a href="#">
            <img src="img/spotify.svg" alt="">
          </a>
        </div>

        <div class="menu">
          <ul>
            <li><a href="#">Discover</a></li>
            <li><a href="#">Genres</a></li>
            <li><a href="#">New releases</a></li>
            <li><a href="#">About us</a></li>
          </ul>
        </div>
      </div>
    </header>

    <main>
      <?php include 'data.php'; ?>

      <div class="container">
        <div class="row title">
          <h2>New releases</h2>
        </div>
        <div class="row cards">

          <?php foreach ($albums as $key => $album) { ?>
            <div class="card">
              <div class="cover"><img src="<?php echo $album['cover']; ?>" alt=""></div>
              <div class="album"><span class="text"><?php echo $album['title']; ?></span></div>
              <div class="artist"><span class="text"><?php echo $album['artist']; ?></span></div>
              <div class="year"><span class="text"><?php echo $album['year']; ?></span></div>
            </div>
          <?php } ?>

        </div>

        <div class="row metodo">
          <a href="http://localhost:8889/Esercizi_Boolean/20-04-2020/php-ajax-dischi/index_2.php">Passa a metodo AJAX</a>
        </div>
      </div>
    </main>


    <script src="js/main.js" charset="utf-8"></script>
  </body>
</html>
