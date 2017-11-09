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
    private $idCategoriaFk;
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
        $obj = array('nome' => $this->nome, 'tamanho' => $this->tamanho, 'cor' => $this->cor, 'material' => $this->material, 
            'preco' => $this->preco, 'status' => $this->status, 'idCategoriaFk' => $this->idCategoriaFk);
        return $this->dao->insertGenerico($this->tabela, $obj);
    }

    function update($where) {
        
    }

    function findAllOrder() {
        return $this->dao->findAllOrderByGenerico($this->tabela, 'id, nome, tamanho, cor, material, preco, status');
    }

    function findById($id) {
        $id = 'id =' . $id;
        return $this->dao->findByWhereSingleGenerico($this->tabela, $id);
    }

    function findByChave($chave) {
        
    }

    //SETS e GETS
    function getId() {
        return $this->id;
    }

    function getNome() {
        return $this->nome;
    }

    function getTamanho() {
        return $this->tamanho;
    }

    function getCor() {
        return $this->cor;
    }

    function getMaterial() {
        return $this->material;
    }

    function getPreco() {
        return $this->preco;
    }

    function getStatus() {
        return $this->status;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setTamanho($tamanho) {
        $this->tamanho = $tamanho;
    }

    function setCor($cor) {
        $this->cor = $cor;
    }

    function setMaterial($material) {
        $this->material = $material;
    }

    function setPreco($preco) {
        $this->preco = $preco;
    }

    function setStatus($status) {
        $this->status = $status;
    }
    function getIdCategoriaFk() {
        return $this->idCategoriaFk;
    }

    function setIdCategoriaFk($idCategoriaFk) {
        $this->idCategoriaFk = $idCategoriaFk;
    }
}
