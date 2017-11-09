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


//Chamado pelo javaScript para post com AJAX
if (isset($_POST['produtoTamanho']) && isset($_POST['produtoId']) && isset($_POST['produtoQuantidade']) && isset($_POST['produtoCor']) 
        && isset($_POST['produtoMaterial'])) {
    $tamanho = $_POST['produtoTamanho'];
    $quanti = $_POST['produtoQuantidade'];

    /*if (empty($_SESSION['carrinho'])) {
        $arrayProdutos = array($id => $quanti);
        $_SESSION['carrinho'] = $arrayProdutos;
    } else {
        $_SESSION['carrinho'][$id] = $quanti;
    }*/
}