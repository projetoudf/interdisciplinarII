<?php
session_start();
require "../conexao.php";
include "../funcoes.php";

	$nome = mysqli_real_escape_string($conexao,$_REQUEST['Nome_Produto']);
	$cor = mysqli_real_escape_string($conexao,$_REQUEST['Cor']); 
	$altura = mysqli_real_escape_string($conexao,$_REQUEST['Altura']);
  $largura = mysqli_real_escape_string($conexao,$_REQUEST['Largura']);
  $comprimento = mysqli_real_escape_string($conexao,$_REQUEST['Comprimento']);
	$sobre = mysqli_real_escape_string($conexao,$_REQUEST['Sobre']);
	$imagem1 = upload_file($_FILES['imagem1']);
	$imagem2 = upload_file($_FILES['imagem2']);
	$imagem3 = upload_file($_FILES['imagem3']);
	$imagem4 = upload_file($_FILES['imagem4']);
	$usuario = $_SESSION['id'];



	
		$sql = "INSERT INTO produto (Nome_Produto, Cor, Altura, Largura, Comprimento, Sobre, Id_Usuario) VALUES ('$nome','$cor', '$altura', '$largura', '$comprimento', '$sobre', '$usuario');";
		$sql .= "INSERT INTO fotos (Imagem, Id_Produto) VALUES ('$imagem1', (select MAX(Id_Produto) FROM produto));";
		$sql .= "INSERT INTO fotos (Imagem, Id_Produto) VALUES ('$imagem2', (select MAX(Id_Produto) FROM produto));";
		$sql .= "INSERT INTO fotos (Imagem, Id_Produto) VALUES ('$imagem3', (select MAX(Id_Produto) FROM produto));";
		$sql .= "INSERT INTO fotos (Imagem, Id_Produto) VALUES ('$imagem4', (select MAX(Id_Produto) FROM produto));";

    $conexao->multi_query($sql);
		// success
			if($sql){
				echo '<script type="application/javascript">alert("Produto publicado com sucesso!"); window.location.href ="/index.php";  </script>';
			}else{
				echo '<script type="application/javascript">alert("Houve um problema. Tente novamente...".mysql_error()); window.location.href ="/index.php";</script>';
			}
			//
?>