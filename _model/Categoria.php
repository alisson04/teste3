<?php

/**
 * Description of Categoria
 *
 * @author Plotter
 */
require_once '_dao/DaoGenerico.php';

class Categoria extends DaoGenerico {

    private $id;
    private $nome;
    private $tabela;
    private $dao;

    public function __construct() {
        $this->tabela = 'tbl_categorias';
        $this->dao = new DaoGenerico();
    }

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

    function insert() {
        $cat = array('nome' => $this->nome);
        $this->dao->insertGenerico($this->tabela, $cat);
    }

    function findAllOrder() {
        return $this->dao->findAllOrderByGenerico($this->tabela, 'nome');
    }
    
    function findById($id) {
        $id = 'id ='.$id;
        return $this->dao->findByWhereGenerico($this->tabela, $id);
    }
}
