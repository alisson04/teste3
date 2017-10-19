<?php

/**
 * Description of UserController
 *
 * @author Plotter
 */
require_once '_dao/UsuarioDao.php';
require_once '_dao/Usuario.php';

class UserController {

    private $usuarioDao;

    function __construct() {
        
    }

    public function insert($user) {
        $usuarioDao = new UsuarioDao();
        $usuarioDao->insert($user);
    }

}
