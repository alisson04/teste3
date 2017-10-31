<?php

/**
 * Description of Categoria
 *
 * @author Plotter
 */
require_once '_dao/DaoGenerico.php';

class Produto extends DaoGenerico {

    private $id;
    private $nome;
    private $tamanho;
    private $cor;
    private $material;
    private $preco;
    private $status;
    private $tabela;
    private $dao;

    //CONSTRUTOR
    public function __construct() {
        $this->status = 1;
        $this->tabela = 'tbl_produtos';
        $this->dao = new DaoGenerico();
    }

    //FUNCTIONS
    function insert() {
        $obj = array('nome' => $this->nome, $this->tamanho, $this->cor, $this->material, $this->preco, 'status' => $this->status);
        return $this->dao->insertGenerico($this->tabela, $obj);
    }

    function update($where) {
        
    }

    function findAllOrder() {
        return $this->dao->findAllOrderByGenerico($this->tabela, 'nome');
    }

    function findById($id) {
        
    }

    function findByChave($chave) {
        
    }

    //SETS e GETS
}
