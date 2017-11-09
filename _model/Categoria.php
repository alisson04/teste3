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
    private $tamanhos;
    private $cores;
    private $materiais;
    private $precos;
    private $tabela;
    private $dao;

    public function __construct() {
        $this->tabela = 'tbl_categorias';
        $this->dao = new DaoGenerico();
    }

    function insert() {
        $obj = array('nome' => $this->nome, 'tamanhos' => $this->tamanhos, 'cores' => $this->cores, 'materiais' => $this->materiais, 
            'precos' => $this->precos);
        $this->dao->insertGenerico($this->tabela, $obj);
    }

    function findAllOrder() {
        return $this->dao->findAllOrderByGenerico($this->tabela, 'nome');
    }

    function findById($id) {
        $id = 'id =' . $id;
        return $this->dao->findByWhereSingleGenerico($this->tabela, $id);
    }
    
    function findByNome($nome) {
        $nome = "nome ='" . $nome ."'" ;
        return $this->dao->findByWhereSingleGenerico($this->tabela, $nome);
    }

    //SETS GETS
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
    function getTamanhos() {
        return $this->tamanhos;
    }

    function getCores() {
        return $this->cores;
    }

    function getMateriais() {
        return $this->materiais;
    }

    function getPrecos() {
        return $this->precos;
    }

    function setTamanhos($tamanhos) {
        $this->tamanhos = $tamanhos;
    }

    function setCores($cores) {
        $this->cores = $cores;
    }

    function setMateriais($materiais) {
        $this->materiais = $materiais;
    }

    function setPrecos($precos) {
        $this->precos = $precos;
    }
}
