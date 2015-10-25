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
    
    public function insertCurso($data){
        return $this->_conection->ejecuteSql($this->prepareInsertSql($data));
    }
    
    public function updateCurso($data,$id){
        return $this->_conection->ejecuteSql($this->prepareUpdateSql($data,$id));
    }
    
    public function deleteCurso($id){
        return $this->_conection->ejecuteSql($this->prepareDelete($id));
    }
    
}

