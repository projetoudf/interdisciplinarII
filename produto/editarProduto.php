<?php
    session_start();
    include_once "../conexao.php";
    include_once "../funcoes.php";
    if (isset($_REQUEST["Nome_Produto"])) {
        $id = mysqli_real_escape_string($conexao,$_REQUEST['Id_Produto']);
        $nome = mysqli_real_escape_string($conexao,$_REQUEST['Nome_Produto']);
	    $cor = mysqli_real_escape_string($conexao,$_REQUEST['Cor']); 
	    $altura = mysqli_real_escape_string($conexao,$_REQUEST['Altura']);
        $largura = mysqli_real_escape_string($conexao,$_REQUEST['Largura']);
        $comprimento = mysqli_real_escape_string($conexao,$_REQUEST['Comprimento']);
	    $sobre = mysqli_real_escape_string($conexao,$_REQUEST['Sobre']);
        if($_FILES["imagem1"]["size"]>0){
        $imagem1 = upload_file($_FILES['imagem1']);
        }
        if($_FILES["imagem2"]["size"]>0){
        $imagem2 = upload_file($_FILES['imagem2']);
        }
        if($_FILES["imagem3"]["size"]>0){
        $imagem3 = upload_file($_FILES['imagem3']);
        }
        if($_FILES["imagem4"]["size"]>0){
        $imagem4 = upload_file($_FILES['imagem4']);
        }
        $usuario = $_SESSION['id'];

        $sql = "UPDATE produto SET Nome_Produto='$nome', Cor='$cor', Altura='$altura', Largura='$largura', Comprimento='$comprimento', Sobre='$sobre', Id_Usuario='$usuario' WHERE Id_Produto='$id';";
        if($_FILES["imagem1"]["size"]>0){
        $sql .= "INSERT INTO fotos (Imagem, Id_Produto) VALUES ('$imagem1', '$id');";
        }
        if($_FILES["imagem2"]["size"]>0){
        $sql .= "INSERT INTO fotos (Imagem, Id_Produto) VALUES ('$imagem2', '$id');";
        }
        if($_FILES["imagem3"]["size"]>0){
        $sql .= "INSERT INTO fotos (Imagem, Id_Produto) VALUES ('$imagem3', '$id');";
        }
        if($_FILES["imagem4"]["size"]>0){
        $sql .= "INSERT INTO fotos (Imagem, Id_Produto) VALUES ('$imagem4', '$id');";
        }

        $res = $conexao->multi_query($sql) or die($conexao->error);
        if($res==true){
            echo '<script type="application/javascript">alert("Editado com sucesso!"); window.location.href ="/index.php";;</script>';
        }else{
            echo '<script type="application/javascript">alert("Não foi possível editar.."); window.location.href ="index.php";;</script>';
        }
    }
    $listar = "SELECT * FROM produto WHERE Id_Produto=".$_REQUEST["Id_Produto"];
    $resultado = $conexao->query($listar);
    $row = $resultado->fetch_assoc();
    ?>

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
    <title>Caixas da Tati</title>
</head>

<body>
    <?php include "../menu.php";
      ?>
    <br>
    <form action="editarProduto.php" enctype="multipart/form-data" method="POST">
    <input type="hidden" name="Id_Produto" value="<?php echo $row['Id_Produto']; ?>">

        <h1 class="text-center">Editar o Anúncio:</h1><br>
        <div class="container">
            <div class="row">
                <div class="form-group col-6">
                    <label>Título</label>
                    <input type="text" name="Nome_Produto" class="form-control" value="<?php echo $row['Nome_Produto']; ?>" required>
                </div>
                <div class="form-group col-6">
                    <label>Cor</label>
                    <input type="text" name="Cor" class="form-control" value="<?php echo $row['Cor']; ?>" required>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label>Altura</label>
                    <input type="text" name="Altura" class="form-control" value="<?php echo $row['Altura']; ?>" required>
                </div>
                <div class="form-group col-4">
                    <label>Largura</label>
                    <input type="text" name="Largura" class="form-control" value="<?php echo $row['Largura']; ?>" required>
                </div>
                <div class="form-group col-4">
                    <label>Comprimento</label>
                    <input type="text" name="Comprimento" class="form-control" value="<?php echo $row['Comprimento']; ?>" required>
                </div>
            </div>
            <div class="form-group">
                <textarea class="form-control limiteDeCaracteres" id="Sobre" name="Sobre" rows="5" cols="20"
                maxlength="500"><?php echo $row['Sobre'];?></textarea>
            </div>
            <div class="form-group">
                <div class="form-group col-md-5 custom-file">
                    <label for="imagem1" class="custom-file-label"></label>
                    <input type="file" class="custom-file-input" id="imagem1" name="imagem1">

                </div>
                <div class="form-group col-md-5 custom-file float-right">
                    <label for="imagem2" class="custom-file-label"></label>
                    <input type="file" class="custom-file-input" id="imagem2" name="imagem2">
                </div>
            </div>
            <div class="form-group my-2">

                <div class="form-group col-md-5 custom-file">
                    <label for="imagem3" class="custom-file-label"></label>
                    <input type="file" class="custom-file-input" id="imagem3" name="imagem3">
                </div>
                <div class="form-group col-md-5 custom-file float-right">
                    <label for="imagem4" class="custom-file-label"></label>
                    <input type="file" class="custom-file-input" id="imagem4" name="imagem4">
                </div>
                <p class="ml-auto" style="font-size: 0.7rem;">*as fotos devem ter a mesma proporção! (preferencialmente deitadas!)</p>
            </div>    <div>
            <div class="form-group">
                <a href="/index.php" class="btn btn-secondary mr-auto">Cancelar</a>
                <button type="submit" class="btn btn-lg btn-primary float-right">Enviar</button>
            </div>
    </form>


    <?php include "../footer.php";
      ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
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