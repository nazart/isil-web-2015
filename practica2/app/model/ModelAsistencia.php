<?php
require_once realpath(__DIR__.'/Model.php');
class ModelAsistencia extends Model {
        
    
    public function __construct() {
        parent::__construct();
        $this->_table = 'asistencia';
        $this->_primaryKey = 'asistencia_id';
    }
    
    public function getAllAsistencia(){
        return $this->_conection->ejecuteSql('select * from asistencia')->fetchAll();
    }
    
    public function getAsistencia($idAsistencia){
        return $this->_conection->ejecuteSql('select * from asistencia where asistencia_id = "'.$idAsistencia.'"')->fetch();
    }
    
    public function insertAsistencia($data){
        return $this->_conection->ejecuteSql($this->prepareInsertSql($data));
    }
    
    public function updateAsistencia($data,$id){
        return $this->_conection->ejecuteSql($this->prepareUpdateSql($data,$id));
    }
}

