<?php
require_once realpath(__DIR__.'/Model.php');
class ModelNota extends Model {
        
    
    public function __construct() {
        parent::__construct();
        $this->_table = 'nota';
        $this->_primaryKey = 'nota_id';
    }
    
    public function getAllNota(){
        return $this->_conection->ejecuteSql('select * from nota')->fetchAll();
    }
    
    public function getNota($idAlumno){
        return $this->_conection->ejecuteSql('select * from nota where alumno_id = "'.$idAlumno.'"')->fetch();
    }
    
    public function insertNota($data){
        return $this->_conection->ejecuteSql($this->prepareInsertSql($data));
    }
    
    public function updateNota($data,$id){
        return $this->_conection->ejecuteSql($this->prepareUpdateSql($data,$id));
    }
}

