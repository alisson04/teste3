<?php

session_start();
include_once("./_dao/DB.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);

if ($btnLogin) {
    $usuario = filter_input(INPUT_POST, 'usuario', FILTER_SANITIZE_STRING);
    $senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);
    //echo "$usuario - $senha";
    if ((!empty($usuario)) AND ( !empty($senha))) {
        //Gerar a senha criptografa
        //echo password_hash($senha, PASSWORD_DEFAULT);
        //Pesquisar o usuário no BD
        $result_usuario = "SELECT id, nome, email FROM tbl_clientes WHERE nome='$usuario' LIMIT 1";
        $stm = DB::prepare($result_usuario);
        $stm->execute();
        $resultado_usuario = $stm->fetch();

        if ($resultado_usuario) {
            if (/* password_verify($senha, $row_usuario['id']) */$senha == $resultado_usuario->id) {
                $_SESSION['cliente'] = $resultado_usuario;
                header("Location: administrativo.php");
            } else {
                $_SESSION['msg'] = "Login e senha incorreto!";
                header("Location: login.php");
            }
        } else {
            $_SESSION['msg'] = "Login e senha incorreto!";
            header("Location: login.php");
        }
    } else {
        $_SESSION['msg'] = "Login e senha incorretossss!";
        header("Location: login.php");
    }
} else {
    $_SESSION['msg'] = "Página não encontrada";
    header("Location: login.php");
}
