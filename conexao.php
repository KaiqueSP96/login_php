<?php

  $usuario = 'root'; // Usuario Padrão do Banco de Dados.
  $senha = ''; // Senha Vazia é um Padrão para acessar o Banco de Dados.
  $database = 'users'; // Nome do Banco de Dados que estão os usuarios.
  $host = 'localhost'; // Como está sendo usado no seu propio PC, usaremos localhost.

  $mysqli = new mysqli($host, $usuario, $senha, $database); // Criando a Conexão com o Banco de Dados usando mysqli, importante os argumentos estarem nessa ordem, não modifique.

  if($mysqli -> error) {
    die("Falha ao conectar ao servidor: " . $mysqli->error); // Identificando erros, caso eles acontecam.
  }

?>