<?php
include "../conexao.php";
if (!empty($_REQUEST['Id_Produto'])) {
    if ($conexao->connect_error) {
        die("Unable to connect database: " . $conexao->connect_error);
    }
    //get content from database
    $sql = $conexao->query("SELECT * FROM produto WHERE Id_Produto =" . $_REQUEST['Id_Produto']);
    if ($sql->num_rows > 0) {
        $row = $sql->fetch_assoc();
        echo '<h4 class="text-justify"><b>Eu gostei do produto: <u> ' . ucfirst($row['Nome_Produto']) . '</u></b></h4>';
        echo '<div class="form-group row">';
        echo '<label for="nome" class="col-sm-1 col-form-label">Nome</label>';
        echo '<div class="col-sm-11">';
        echo '<input type="text" class="form-control mb-2" id="nome" name="nome" placeholder="Nome" required>';
        echo '</div>';
        echo '<label for="telefone" class="col-sm-1 col-form-label">Telefone</label>';
        echo '<div class="col-sm-5">';
        echo '<input type="text" class="form-control" id="telefone" name="telefone" placeholder="Telefone" required>';
        echo '</div>';
        echo '<label for="email" class="col-sm-1 col-form-label">Email</label>';
        echo '<div class="col-sm-5">';
        echo '<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>';
        echo '</div>';
        echo '</div>';
        echo '<input type="hidden" name="Id_Produto" value="' . $row['Id_Produto'] . '" id="Id_Produto">';
        echo '<div class="form-group">';
        echo '<label for="mensagem">Mensagem</label>';
        echo '<textarea class="form-control" id="mensagem" name="mensagem" rows="4" required></textarea>';
        echo '</div>';
    } else {
        echo 'Conteudo não encontrado..';
    }
}
if (isset($_POST["mensagem"])) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $telefone = $_POST["telefone"];
    $mensagem = $_POST["mensagem"];
    $id_produto = $_POST["Id_Produto"];
    $sql = "INSERT INTO mensagem 
            (Nome_Cliente, Email, Telefone, Mensagem, Id_Produto)
             VALUES 
            ('$nome', '$email','$telefone','$mensagem','$id_produto')";
    $res = $conexao->query($sql) or die($conexao->error);
    if($res==true){
        echo '<script type="application/javascript">alert("Mensagem enviada. Aguarde nosso retorno!"); window.location.href ="/index.php";;</script>';
    }else{
        echo '<script type="application/javascript">alert("Não foi possível enviar a mensagem. Tente novamente..."); window.location.href ="index.php";;</script>';
    }