<?php

session_start();
unset($_SESSION['cliente']);

$_SESSION['msg'] = "Deslogado com sucesso";
header("Location: login.php");