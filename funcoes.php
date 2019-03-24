<?php

//função para criptografar a senha
function make_hash($str){
  return sha1(md5($str));
}

// Função para renomear as imagens e salvar na pasta "imagens_anuncio"
//TODO pensar em uma nova maneira de renomear os arquivos, de modo que eles fiquem identificáveis.
function upload_file($file)
    {
            $extension = explode('.', strtolower($file["name"]));
            $newName = md5(uniqid(time())) . '.' . $extension[1];
            $destination = 'imagens_anuncio/' . $newName;
            move_uploaded_file($file['tmp_name'], $destination);
            return $newName;
    }