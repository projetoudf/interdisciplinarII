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
    <link rel="stylesheet" href="../css/estilo.css">

    <!-- Icones -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Pingo de Amor</title>
</head>

<body>
    <?php include "../menu.php";
          include "../funcoes.php";
      ?>
    <br>
    <form action="salvarProduto.php" enctype="multipart/form-data" method="POST">
        <h1 class="text-center">Inserir novo Anúncio:</h1><br>
        <div class="container">
            <div class="row">
                <div class="form-group col-6">
                    <label>Nome</label>
                    <input type="text" name="Nome_Produto" class="form-control" required>
                </div>
                <div class="form-group col-6">
                    <label>Cor</label>
                    <input type="text" name="Cor" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label>Altura</label>
                    <input type="text" name="Altura" class="form-control" required>
                </div>
                <div class="form-group col-4">
                    <label>Largura</label>
                    <input type="text" name="Largura" class="form-control" required>
                </div>
                <div class="form-group col-4">
                    <label>Comprimento</label>
                    <input type="text" name="Comprimento" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control limiteDeCaracteres" id="Sobre" name="Sobre" rows="5" cols="20"
                maxlength="500" placeholder="Descrição do produto.."></textarea>
            </div>
            <div class="form-group">
                <div class="form-group col-md-5 custom-file">
                    <label for="imagem1" class="custom-file-label"></label>
                    <input type="file" class="custom-file-input" id="imagem1" name="imagem1" required>
                </div>
                <div class="form-group col-md-5 custom-file float-right">
                    <label for="imagem2" class="custom-file-label"></label>
                    <input type="file" class="custom-file-input" id="imagem2" name="imagem2" required>
                </div>
            </div>
            <div class="form-group my-2">

                <div class="form-group col-md-5 custom-file">
                    <label for="imagem3" class="custom-file-label"></label>
                    <input type="file" class="custom-file-input" id="imagem3" name="imagem3" required>
                </div>
                <div class="form-group col-md-5 custom-file float-right">
                    <label for="imagem4" class="custom-file-label"></label>
                    <input type="file" class="custom-file-input" id="imagem4" name="imagem4" required>
                </div>
                <p class="ml-auto" style="font-size: 0.7rem;">*as fotos devem ter a mesma proporção! (preferencialmente deitadas!)</p>
            </div>    <div>
            <div class="form-group">
            <button type="submit" class="btn btn-lg btn-danger ml-auto">Cancelar</button>

                <button type="submit" class="btn btn-lg btn-primary float-right">Enviar</button>

            </div>
    </form>


    <?php include "../footer.php";
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
    <script type="text/javascript" src="../script.js"></script>

    <script>
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
    var fileName = $(this).val().split("\\").pop();
    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    </script>
    
</body>

</html>