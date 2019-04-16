<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- CSS CUSTOM -->
  <link rel="stylesheet" href="css/estilo.css">
  <!-- Icones -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <title>Pingo de Amor</title>

  <style>
    .banner {
      height: 60vh;
      width: 100%;
      background-image: url("img/title.jpg");
      background-size: cover;
      background-repeat: no-repeat;
    }


    .carousel-inner>.carousel-item>img {
      width: 100% !important;
      height: 40vh !important;

    }
  </style>

</head>

<body>
  <?php include "menu.php";
      ?>
  <div class="banner sombra">
  </div>

  <div class="container-fluid">
    <div class="row my-2 sombra">
      <div class="col-sm-5 border">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/caixa1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/caixa2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/york.png" alt="Third slide">
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
      <div class="col-sm-7 border">
        <h2 class="display-4">Titulo</h2>
        <p class="h4">Cor, altura, largura, comprimento</p>
        <p> É importante questionar o quanto o desafiador cenário globalizado possibilita uma melhor visão global dos
          paradigmas corporativos. É importante questionar o quanto o desafiador cenário globalizado possibilita uma
          melhor visão global dos paradigmas corporativos. É importante questionar o quanto o desafiador cenário
          globalizado possibilita uma melhor visão global dos paradigmas corporativos.</p>
        <span>
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-success">Success</button>
        </span>
      </div>
    </div>
    <div class="row sombra my-2">
      <div class="col-sm-7 border">
        <h2 class="display-4">Titulo</h2>
        <p class="h4">Cor, altura, largura, comprimento</p>
        <p> É importante questionar o quanto o desafiador cenário globalizado possibilita uma melhor visão global dos
          paradigmas corporativos. É importante questionar o quanto o desafiador cenário globalizado possibilita uma
          melhor visão global dos paradigmas corporativos. É importante questionar o quanto o desafiador cenário
          globalizado possibilita uma melhor visão global dos paradigmas corporativos.</p>
        <span>
          <button type="button" class="btn btn-primary">Primary</button>
          <button type="button" class="btn btn-secondary">Secondary</button>
          <button type="button" class="btn btn-success">Success</button>
        </span>
      </div>
      <div class="col-sm-5 border">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/caixa1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/caixa2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/york.png" alt="Third slide">
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
    </div>

    <?php include ($_SERVER['DOCUMENT_ROOT']."/produto/listarProduto.php"); ?>
  </div>

  <?php 
        include "footer.php";
      ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
</body>

</html>