<?php

//função para criptografar a senha
function make_hash($str){
  return sha1(md5($str));
}
$t = make_hash("1");
// Função para renomear as imagens e salvar na pasta "img"
//TODO pensar em uma nova maneira de renomear os arquivos, de modo que eles fiquem identificáveis.

