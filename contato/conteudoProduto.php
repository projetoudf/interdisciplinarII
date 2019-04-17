<?php
include "../conexao.php";
if (!empty($_REQUEST['Id_Produto'])) {
    if ($conexao->connect_error) {
        die("Unable to connect database: " . $conexao->connect_error);
    }
    //get content from database
    $sql = $conexao->query("SELECT * FROM produto WHERE Id_Produto =" . $_GET['Id_Produto']);
    if ($sql->num_rows > 0) {
        $row = $sql->fetch_assoc();
        echo '<h4 class="text-center"><b><u> ' . ucfirst($row['Nome_Produto']) . ' - ' . $row['Id_Produto'] . '</u></b></h4>';
        echo '<p class="texto_modal_detalhes"><b>Altura:</b> ' . $row['Altura'] . '</p>';
        echo '<p class="texto_modal_detalhes"><b>Largura: </b>' . $row['Largura'] . '</p>';
        echo '<p class="texto_modal_detalhes"><b>Comprimento: </b>' . $row['Comprimento'] . '</p>';
        echo '<p class="texto_modal_detalhes"><b>Cor: </b>' . $row['Cor'] . '</p>';
        echo '<p class="texto_modal_detalhes"><b>Sobre: </b>' . $row['Sobre'] . '</p>';
    } else {
        echo 'Conteudo não encontrado..';
    }
} else {
    echo 'Contudo não encontrado..';
}