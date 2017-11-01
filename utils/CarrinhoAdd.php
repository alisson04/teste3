<?php

session_start();

$id = $_POST['tIdProduto'];
if (empty($_SESSION['carrinho'])) {
    $arrayProdutos = array($id => 1);
    $_SESSION['carrinho'] = $arrayProdutos;
    header("Location: ../index.php");
} else {
    $_SESSION['carrinho'][$id] = 1;
    header("Location: ../index.php");
}   