<?php

session_start();

$id = $_POST['excluirItemCarrinho'];
unset($_SESSION['carrinho'][$id]);

header("Location: ../carrinho.php");
