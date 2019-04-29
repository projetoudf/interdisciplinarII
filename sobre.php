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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="/css/estilo.css">
    <style>
      body{
        background-image: url("backgrounds/sakura.png");
        background-repeat: repeat;
      }
    </style>
    
    <!-- Icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Caixas da Tati</title>

  </head>
  <body>
      <?php include ($_SERVER['DOCUMENT_ROOT']."/menu.php");
      ?>
      <div class="container-fluid">
        <div class="row">
          <div class="permissoes d-flex justify-content-center flex-wrap">
            <h3 class="border rounded col-md-6 mt-5" style="background-color: white;">Somos uma iniciativa familiar que começou como um hobbie e agora estamos expandindo o negócio.
              Nosso lema é trabalhar com amor. Tratamos todos os pedidos com o maior cuidado possível e prezamos pela excelência.
              Todos os produtos são pintados à mão, conforme solicitado pelo cliente.
              Esperamos que fiquem satisfeitos, e estamos aqui para qualquer questionamento!    
            </h3>
          </div>
        </div>
      </div>

        <?php include ($_SERVER['DOCUMENT_ROOT']."/footer.php");
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>