<?php
require_once realpath(__DIR__.'/../conection/coneccion.php');
abstract class  Model {
    protected $_conection;
    
    public function __construct() {
        $this->_conection = new Conection();
    }
}
