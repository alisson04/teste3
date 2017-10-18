<?php

require 'config.php';
require 'connection.php';
require 'database.php';

$cliente = array(
    'nome' => $_POST['tNome']
);

$grava = DBUpdate('clientes', $cliente, 'id ='.$_POST['id']);


if ($grava) {
    header("Location:index.php");
} else {
    echo 'Erro ao salvar';
}
