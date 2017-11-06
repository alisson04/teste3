<?php

session_start();

$id = $_POST['tIdProduto'];
$quanti = $_POST['cQuantidade'];

if (empty($_SESSION['carrinho'])) {
    $arrayProdutos = array($id => $quanti);
    $_SESSION['carrinho'] = $arrayProdutos;
} else {
    $_SESSION['carrinho'][$id] = $quanti;
}   