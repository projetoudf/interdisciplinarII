<?php
    $host = "localhost";
    $user = "caixas"; // Trocar pelo nome do banco, quando criado
    $pass = "root";
    $db = "root";
    $conexao = new mysqli($host,$user,$pass,$db) or die($conexao -> error);
    if (!mysqli_set_charset($conexao, 'utf8')) {
        printf('Error ao usar utf8: %s', mysqli_error($conexao));
        exit;
    }