<?php

echo '1';
session_start();
include_once("conexao.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

echo '2';
if ($btnLogin) {
    echo '3';
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    //echo "$usuario - $senha";
    if ((!empty($usuario)) AND ( !empty($senha))) {
        echo '4';
        //Gerar a senha criptografa
        //echo password_hash($senha, PASSWORD_DEFAULT);
        //Pesquisar o usuário no BD
        $result_usuario = "SELECT id, nome FROM tbl_usuarios WHERE nome='$usuario' LIMIT 1";
        
        echo '4.4';
        $resultado_usuario = mysqli_query($conn, $result_usuario);
        
        echo '4.6';
        if ($resultado_usuario) {
            echo '5';
            $row_usuario = mysqli_fetch_assoc($resultado_usuario);
            if (/**password_verify($senha, $row_usuario['id'])*/$senha == $row_usuario['id']) {

                echo '6';
                $_SESSION['id'] = $row_usuario['id'];
                $_SESSION['nome'] = $row_usuario['nome'];
                header("Location: administrativo.php");
                echo '123';
            } else {

                echo '7';
                $_SESSION['msg'] = "Login e senha incorreto!";
                header("Location: login.php");
                echo '123';
            }
        }else{
            echo 'EERRRROU';
        }
    } else {

        echo '8';
        $_SESSION['msg'] = "Login e senha incorreto!";
        header("Location: login.php");
    }
} else {
    echo '444';
    $_SESSION['msg'] = "Página não encontrada";
    header("Location: login.php");
}
