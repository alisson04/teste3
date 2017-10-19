<?php

/**
 * Description of CrudUser
 *
 * @author Plotter
 */
class Usuario{
    public $tabela;
    private $nome;
    private $email;
    
    function __construct() {
        $this->tabela = 'tbl_usuarios';
    }

        function getNome() {
        return $this->nome;
    }

    function getEmail() {
        return $this->email;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEmail($email) {
        $this->email = $email;
    }
}
