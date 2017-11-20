<?php
if(!isset($_SESSION))
{
session_start();
}
?>

<a href="carrinho.php" >
    <img id = "icon_carrinho_de_compras" class = "icon" src = "_imagens/icon/carrinho_de_compras.png"
         onMouseOver = "this.src = '_imagens/icon/carrinho_de_comprasVerde.png'"
         onMouseOut = "this.src = '_imagens/icon/carrinho_de_compras.png'" alt = "link_carrinho" >
    <span class = "badge badge-light" style = "background-color:#F08080; border-radius: 10px; color: white;">
        <?php
        if (empty($_SESSION['carrinho'])) {
        echo 0;
        } else {
        echo count(($_SESSION['carrinho']));
        }
        ?>
    </span>
</a>