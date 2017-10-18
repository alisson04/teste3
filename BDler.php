
<?php
require 'config.php';
require 'connection.php';
require 'database.php';
function retorna(){
    return $clientes = DBRead('produtos', null, 'id, nome');    
}
