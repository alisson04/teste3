<?php

/**
 * Description of DaoGenerico
 *
 * @author Plotter
 */

require_once 'DB.php';

class DaoGenerico {

    public static function findAllGenerico($tabela) {
        $sql = "SELECT * FROM $tabela";
        $stm = DB::prepare($sql);
        $stm->execute();
        return $stm->fetchAll();
    }

    public static function insertGenerico($tabela, $fields, $values) {
        $sql = "INSERT INTO $tabela ($fields) VALUES ($values)";
        $stm = DB::prepare($sql);
        $n = "alisson";
        $e = "teste";
        $stm->bindParam(':nome', $n);
        $stm->bindParam(':email', $e);

        return $stm->execute();
    }
}
