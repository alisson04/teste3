<?php

class Contato {
    private $id = null;
    private $nome;
    
    public function __construct($nome) {
       $this->nome = $nome;
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
}