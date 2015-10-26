<?php
require_once realpath(__DIR__.'/Model.php');
class ModelAlumno extends Model {
        
    
    public function __construct() {
        parent::__construct();
        $this->_table = 'alumno';
        $this->_primaryKey = 'alumno_id';
    }
    
    public function getAllAlumno(){
        return $this->_conection->ejecuteSql('select * from alumno')->fetchAll();
    }
    
    public function getAlumno($idAlumno){
        return $this->_conection->ejecuteSql('select * from alumno where alumno_id = "'.$idAlumno.'"')->fetch();
    }
    
    public function getAlumnoForCodigo($codigoAlumno){
        return $this->_conection->ejecuteSql('select * from alumno where alumno_codigo = "'.$codigoAlumno.'"')->fetch();
    }


    public function insertAlumno($data){
        $this->_conection->ejecuteSql($this->prepareInsertSql($data));
        return $this->_conection->getLastInsertId();
    }
    
    public function updateAlumno($data,$id){
        return $this->_conection->ejecuteSql($this->prepareUpdateSql($data,$id));
    }
    
    public function deleteAlumno($id){
        return $this->_conection->ejecuteSql($this->prepareDelete($id));
    }
}

