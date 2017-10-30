<?php

/**
 * Description of DaoGenerico
 *
 * @author Plotter
 */
require_once 'DB.php';

class DaoGenerico {

    //Buscar tudo
    public static function findAllGenerico($tabela) {
        $sql = "SELECT * FROM $tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

    //Buscar tudo Ordenado
    public static function findAllOrderByGenerico($tabela, $field) {
        $sql = "SELECT * FROM $tabela ORDER BY $field";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

    //Buscar por ID
    public static function findByWhereGenerico($tabela, $where = null, $fields = '*') {
        $where = ($where) ? "WHERE $where" : null;
        $sql = "SELECT $fields FROM $tabela $where";
        echo $sql;
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetch();
    }

//Grava registros
    public static function insertGenerico($table, array $data) {
        $fields = implode(', ', array_keys($data));
        $values = "'" . implode("', '", $data) . "'";
        $sql = "INSERT INTO $table ($fields) VALUES ($values)";
        $stm = DB::prepare($sql);
        return $stm->execute();
    }

}
