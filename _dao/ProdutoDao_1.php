<?php

/**
 * Description of Usuarios
 *
 * @author Plotter
 */
require_once 'DaoGenerico.php';

class ProdutoDao extends DaoGenerico {
    protected $tabela = 'tbl_produtos';
    
    public function findUnit($id){
        $sql = "SELECT * FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
        return $stm->fetch();
    }
    
    public function findAll(){
        DaoGenerico::findAllGenerico('tbl_usuarios');
    }
    
    public function insert($user){
        DaoGenerico::insertGenerico('tbl_usuarios', 'nome, email', ':nome, :email');
    }
    
    public function update($id){
        $sql = "UPDATE $this->tabela SET nome = :nome, email = :email WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->bindParam(':nome', $this->nome);
        $stm->bindParam(':email', $this->email);
        $stm->execute();
    }
    
    public function delete($id){
        $sql = "DELETE FROM $this->tabela WHERE id = :id";
        $stm = DB::prepare($sql);
        $stm->bindParam(':id', $id, PDO::PARAM_INT);
        $stm->execute();
    }
}
