<?php
require_once "conexao.php";
require_once "funcoes.php";

$usuario = mysqli_real_escape_string($conexao,$_POST['email']);
$senha = mysqli_real_escape_string($conexao,make_hash($_POST['senha']));
$query = "select * from usuario where Email = '$usuario' and Senha = '$senha'";
$result = mysqli_query($conexao, $query);
$row = mysqli_num_rows($result);
$dados = mysqli_fetch_array($result);
if($row == 1) {
    session_start();
    $_SESSION['Email'] = $dados['Email'];
    header("Location: index.php");
    exit();
} else {
    echo '<script type="application/javascript">alert("Login OU Senha INCORRETOS. TENTE NOVAMENTE.");window.location.href ="index.php"; </script>';
    exit();
}