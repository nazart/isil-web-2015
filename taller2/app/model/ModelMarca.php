<?php
require_once realpath(__DIR__.'/Model.php');

class ModelMarca extends Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAllMarca(){
        return $this->_conection->ejecuteSql('select * from marca')->fetchAll();
    }
    
    public function getMarca($idMarca){
        
    }
    
    public function insertMarca(){
        
    }
    
    public function updateMarca(){
        
    }
    
    public function deleteMarca(){
        
    }
}

