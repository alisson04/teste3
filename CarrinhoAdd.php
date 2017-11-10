<?php

session_start();

//Chamado pelo javaScript para post com AJAX
if (isset($_POST['produtoTamanho']) && isset($_POST['produtoIdCat']) && isset($_POST['produtoQuantidade']) && isset($_POST['produtoCor']) 
        && isset($_POST['mate']) && isset($_POST['produtoPreco'])) {

    $tamanho = $_POST['produtoTamanho'];
    $idCat = $_POST['produtoIdCat'];
    $quanti = $_POST['produtoQuantidade'];
    $cor = $_POST['produtoCor'];
    $material = $_POST['mate'];
    $preco = $_POST['produtoPreco'];

    $arrayAtributos = array("id" => $idCat, "tamanho" => $tamanho, "quantidade" => $quanti, "cor" => $cor, "material" => $material,
        "preco" => $preco);

    if (empty($_SESSION['carrinho'])) {
        $arrayProdutos = array('1' => $arrayAtributos);
        $_SESSION['carrinho'] = $arrayProdutos;
        header("Location: produtos.php");
    } else {
        $_SESSION['carrinho'][(count(($_SESSION['carrinho'])) + 1)] = $arrayAtributos;
        header("Location: index.php");
    }
}