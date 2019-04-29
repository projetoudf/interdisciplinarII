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
  <title>Caixas da Tati</title>

  <style>
    @import url('https://fonts.googleapis.com/css?family=Dancing+Script:700');

    .banner {
      height: 60vh;
      width: 100%;
      background-image: url("backgrounds/title.jpg");
      background-size: cover;
    }

    .carousel-inner>.carousel-item>img {
      width: 100% !important;
      height: 40vh !important;

    }

  </style>

</head>

<body>
  <?php include "menu.php";
        include "conexao.php";
      ?>
  <div class="banner sombra">

  </div>

  <div class="container-fluid">
    <?php include ($_SERVER['DOCUMENT_ROOT']."/produto/listarProduto.php"); ?>
  </div>

  <span id="page" style="display:none">1</span>
  <span id="trigger" style="display:none">true</span>

  <br>
<!-- Modal Gostei Deste - Enviar Mensagem -->

<div class="modal fade" id="gostei_deste" tabindex="-1" role="dialog" aria-labelledby="modalInformacoesTitulo"
      aria-hidden="true">
      <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
          <div class="modal-content">
              <form action="/produto/enviarMensagem.php" method="POST">
                  <div class="modal-header">
                      <h5 class="modal-title" id="modalInformacoesTitulo">Enviar Mensagem</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">

                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary mr-auto" data-dismiss="modal" aria-hidden="true">Fechar</button>
                      <button type="submit" class="btn btn-success">Enviar</button>
                  </div>
              </form>
          </div>
      </div>
  </div>


<!-- footer -->
  <?php
        include "footer.php";
      ?>
  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

  <script>
    $(document).ready(function () {
        $('.gosteiDeste').on('click', function () {
            var dataURL = $(this).attr('data-href');
            $('.modal-body').load(dataURL, function () {
                $('#gostei_deste').modal({show: true});
            });
        });
    });
  </script>

  
</body>

</html>
