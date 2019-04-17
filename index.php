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
    @import url('https://fonts.googleapis.com/css?family=Dancing+Script:700');

    .banner {
      height: 60vh;
      width: 100%;
    }
    .banner .content{
    position: absolute;
    z-index:999;
    text-align: center;
    width: 100%;
    margin-top: 30vh;
    }

    .banner::after {
      content: "";
      position: absolute;
      top: 0px;
      left: 0px;
      width: 100%;
      height: 60vh;
      z-index:99;
      background-image: url("img/title.jpg");
      background-size: cover;
      opacity: 0.4;
      margin-top: 50px;

    }


    .carousel-inner>.carousel-item>img {
      width: 100% !important;
      height: 40vh !important;

    }
    .centered {
      position: relative;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      font-family: 'Dancing Script', cursive;

    }
  </style>

</head>

<body>
  <?php include "menu.php";
        include "conexao.php";
      ?>
  <div class="banner sombra">
    <div class="content">
      <h1 class="display-1 centered">Pingo de Caixas</h1>
    </div>
  </div>

  <div class="container-fluid">
    <?php include ($_SERVER['DOCUMENT_ROOT']."/produto/listarProduto.php"); ?>
  </div>
  <br>

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