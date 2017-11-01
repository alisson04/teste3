<?php
session_start();
if (!empty($_SESSION['carrinho'])) {
                unset($_SESSION['carrinho']);
            }
header("Location: ../carrinho.php");