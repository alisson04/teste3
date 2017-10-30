<?php

/**
 * Description of UserController
 *
 * @author Plotter
 */
require_once './_model/Cliente.php';

class ClienteController {

    public function insert($produto) {
        $produtoDao = new DaoGenerico();
        $produtoDao->insertGenerico('tbl_produtos', $produto);
        }

    public function findAll() {
        $produtoDao = new DaoGenerico();
        return $produtoDao->findAllGenerico('tbl_produtos');
    }

    public function findAllOrderByGenerico() {
        $produtoDao = new DaoGenerico();
        return $produtoDao->findAllOrderByGenerico('tbl_produtos', 'nome');
    }
}
