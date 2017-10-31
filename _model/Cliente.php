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
    private $status;
    private $chave_confirmacao;
    private $tabela;
    private $dao;

    //CONSTRUTOR
    public function __construct() {
        $this->status = 0;
        $this->tabela = 'tbl_clientes';
        $this->dao = new DaoGenerico();
    }

    //FUNCTIONS
    function insert() {
        if (!$this->dao->findByWhereSingleGenerico($this->tabela, $this->email)) {
            $obj = array('nome' => $this->nome, 'email' => $this->email, 'senha' => $this->senha, 'status' => $this->status, 'chave_confirmacao' => $this->chave_confirmacao);
            return $this->dao->insertGenerico($this->tabela, $obj);
        }
    }

    function update($where) {
        $set = "nome='$this->nome', email='$this->email', senha='$this->senha', cpf_cnpj='$this->cpf_cnpj', cep='$this->cep', "
                . "status='$this->status', chave_confirmacao='$this->chave_confirmacao'";
        return $this->dao->updateGenerico($this->tabela, $set, $where);
    }

    function findAllOrder() {
        return $this->dao->findAllOrderByGenerico($this->tabela, 'nome');
    }

    function findById($id) {
        $id = 'id =' . $id;
        return $this->dao->findByWhereSingleGenerico($this->tabela, $id);
    }

    function findByChave($chave) {
        $chave = "chave_confirmacao ='" . $chave . "'";
        return $this->dao->findByWhereSingleGenerico($this->tabela, $chave);
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

    function getStatus() {
        return $this->status;
    }

    function getChave_confirmacao() {
        return $this->chave_confirmacao;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setChave_confirmacao($chave_confirmacao) {
        $this->chave_confirmacao = $chave_confirmacao;
    }

}
