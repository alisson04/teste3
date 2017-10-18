<?php

require 'config.php';
require 'connection.php';
require 'database.php';

$cliente = array(
    'nome' => 'tNome'
);

$grava = DBCreate('produtos', $cliente);

if ($grava) {
  //header("Location:index.php");
} else {
    echo 'Erro ao salvar';
}
