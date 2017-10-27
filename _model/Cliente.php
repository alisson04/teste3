<?php

/**
 * Description of Categoria
 *
 * @author Plotter
 */
require_once '_dao/DaoGenerico.php';

class Cliente extends DaoGenerico {

    private $id;
    private $nome;
    private $email;
    private $senha;
    private $cpf_cnpj;
    private $cep;
    
    private $tabela;
    private $dao;
    
    //CONSTRUTOR
    public function __construct() {
        $this->tabela = 'tbl_clientes';
        $this->dao = new DaoGenerico();
    }
    
    //FUNCTIONS
    function insert() {
        $obj = array('nome'=>$this->nome,'email'=>$this->email,'senha'=>$this->senha);
        $this->dao->insertGenerico($this->tabela, $obj);
    }

    function findAllOrder() {
        return $this->dao->findAllOrderByGenerico($this->tabela, 'nome');
    }
    
    function findById($id) {
        $id = 'id ='.$id;
        return $this->dao->findByWhereGenerico($this->tabela, $id);
    }

    //SETS e GETS
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    function getEmail() {
        return $this->email;
    }

    function getSenha() {
        return $this->senha;
    }

    function getCpf_cnpj() {
        return $this->cpf_cnpj;
    }

    function getCep() {
        return $this->cep;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setSenha($senha) {
        $this->senha = $senha;
    }

    function setCpf_cnpj($cpf_cnpj) {
        $this->cpf_cnpj = $cpf_cnpj;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }
}
