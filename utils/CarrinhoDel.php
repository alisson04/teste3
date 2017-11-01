<?php

session_start();

$id = $_POST['excluirItemCarrinho'];

$key = array_search('item 2', $_SESSION['carrinho']);

$arrayProdutos = array($id => 1);
$_SESSION['carrinho'] = $arrayProdutos;
header("Location: ../index.php");
