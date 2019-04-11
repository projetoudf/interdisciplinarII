<?php
    require "../conexao.php";
    $sql = "DELETE FROM mensagem WHERE Id_Mensagem=" . $_REQUEST["Id_Mensagem"].";";
    
    $res = $conexao->query($sql) or die($conexao->error);
    if ($res == true) {
        print "<script>alert('Excluiu a mensagem com sucesso!'); window.location.href ='/contato/mensagens.php';</script>";
    } else {
        print "<br><div class='alert alert-danger'>Não foi possível deletar.</div>; window.history.go(-1);";
    }