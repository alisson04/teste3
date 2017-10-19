<?php

/**
 * Description of Usuarios
 *
 * @author Plotter
 */

require_once 'Usuario.php';
require_once 'DaoGenerico.php';

class UsuarioDao extends DaoGenerico {
    protected $tabela = 'tbl_usuarios';
    
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
        //DaoGenerico::insertGenerico('tbl_usuarios', 'nome, email', ':nome, :email');
        print_r($user->tabela);
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
