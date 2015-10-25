<?php
require_once realpath(__DIR__.'/Model.php');
class ModelCurso extends Model {
        
    
    public function __construct() {
        parent::__construct();
        $this->_table = 'curso';
        $this->_primaryKey = 'curso_id';
    }
    
    public function getAllCurso(){
        return $this->_conection->ejecuteSql('select * from curso')->fetchAll();
    }
    
    public function getCurso($idCurso){
        return $this->_conection->ejecuteSql('select * from curso where curso_id = "'.$idCurso.'"')->fetch();
    }
    
}

