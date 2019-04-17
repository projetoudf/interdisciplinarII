<?php
    require "../conexao.php";
    $sql = "DELETE FROM fotos WHERE Id_Produto=" . $_REQUEST["Id_Produto"].";";
    $sql.= "DELETE FROM produto WHERE Id_Produto=". $_REQUEST["Id_Produto"].";";
    
    $res = $conexao->multi_query($sql) or die($conexao->error);
    if ($res == true) {
        print "<script>alert('Excluiu o anúncio com sucesso!'); window.history.go(-1);</script>";
    } else {
        print "<br><div class='alert alert-danger'>Não foi possível excluir.</div>; window.history.go(-1);";
    }