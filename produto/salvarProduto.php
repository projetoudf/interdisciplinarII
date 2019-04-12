<?php
require "../conexao.php";
if (isset($_REQUEST['nome'])){
	$nome = mysqli_real_escape_string($conexao,$_REQUEST['Nome']);
	$cor = mysqli_real_escape_string($conexao,$_REQUEST['Cor']); 
	$altura = mysqli_real_escape_string($conexao,$_REQUEST['Altura']);
    $largura = mysqli_real_escape_string($conexao,$_REQUEST['Largura']);
    $comprimento = mysqli_real_escape_string($conexao,$_REQUEST['Comprimento']);

	
    $sql = "INSERT INTO produto (Nome_Produto, Cor, Altura, Largura, Comprimento) VALUES ('$nome','$cor', '$altura', '$largura', '$comprimento');";
    $conexao->query($sql);
		// success
			if($sql){
				echo '<script type="application/javascript">alert("Mensagem enviada com sucesso. Aguarde nosso retorno!"); window.location.href ="/index.php"; </script>';
			}else{
				echo '<script type="application/javascript">alert("Houve um problema. Tente novamente...".mysql_error()); window.location.href ="/index.php";</script>';
			}
		}
?>