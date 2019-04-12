<?php
require "../conexao.php";
if (isset($_REQUEST['nome'])){
	$nome = mysqli_real_escape_string($conexao,$_REQUEST['nome']);
	$email = mysqli_real_escape_string($conexao,$_REQUEST['email']); 
	$mensagem = mysqli_real_escape_string($conexao,$_REQUEST['mensagem']);
    $telefone = mysqli_real_escape_string($conexao,$_REQUEST['telefone']);

	
    $sql = "INSERT INTO mensagem (Nome_Cliente, Email, Mensagem, Telefone) VALUES ('$nome','$email', '$mensagem', '$telefone');";
    $conexao->query($sql);
		// success
			if($sql){
				echo '<script type="application/javascript">alert("Mensagem enviada com sucesso. Aguarde nosso retorno!"); window.location.href ="/index.php"; </script>';
			}else{
				echo '<script type="application/javascript">alert("Houve um problema. Tente novamente...".mysql_error()); window.location.href ="/index.php";</script>';
			}
		}
?>