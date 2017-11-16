<?php

// Recuperamos os valores dos campos através do método POST
$nome = $_POST["nome"];
$email = $_POST["email"];
$mensagem = $_POST["mensagem"];
// Verifica se o nome foi preenchido
if (empty($nome)) {
    echo "Escreva seu nome";
}
// Verifica se a mensagem foi digitada
elseif (empty($mensagem)) {
    echo "Escreva uma mensagem";
}
// Verifica se a mensagem nao ultrapassa o limite de caracteres
elseif (strlen($mensagem) > 140) {
    echo "A mensagem deve ter no máximo 140 caracteres";
}
// Se não houver nenhum erro
else {
require_once '_dao/DaoGenerico.php';
    // Inserimos no banco de dados
    $dao = new DaoGenerico();
    $obj = array('nome' => $nome, 'mensagem' => $mensagem, 'email' => $email);
    
    // Se inserido com sucesso
    if ($dao->insertGenerico("mensagens", $obj)) {
        echo "FOI!!!.";
    }
    // Se houver algum erro ao inserir
    else {
        echo "Não foi possível inserir a mensagem no momento.";
    }
}
?>