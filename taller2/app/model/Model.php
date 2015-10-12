<?php
require_once realpath(__DIR__.'/../conection/coneccion.php');
abstract class  Model {
    protected $_conection;
    protected $_table;
    
    public function __construct() {
        $this->_conection = new Conection();
    }
    
    public function prepareInsertSql($parametros){
        
    }
    
    public function prepareUpdateSql($parametros){
        
    }
}
