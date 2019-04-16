<?php

//função para criptografar a senha
function make_hash($str){
  return sha1(md5($str));
}
// Função para renomear as imagens e salvar na pasta "img"
function upload_file($file)
    {
            $extension = explode('.', $file["name"]);
            $new_name = uniqid($extension[0]) . '.' . $extension[1];
            $destination = '../img/' . $new_name;
            move_uploaded_file($file['tmp_name'], $destination);
            return $new_name;
		}
