<?php
require_once realpath(__DIR__.'/Model.php');
class ModelCursoAlumno extends Model {
        
    
    public function __construct() {
        parent::__construct();
        $this->_table = 'curso_alumno';
        $this->_primaryKey = 'curso_alumno_id';
    }
    
    public function getAllCursoAlumno(){
        return $this->_conection->ejecuteSql('select * from curso_alumno')->fetchAll();
    }
    
    public function getCursoAlumno($idCursoAlumno){
        return $this->_conection->ejecuteSql('select * from curso_alumno where curso_alumno_id = "'.$idCursoAlumno.'"')->fetch();
    }
    
    public function insertCursoAlumno($data){
        return $this->_conection->ejecuteSql($this->prepareInsertSql($data));
    }
    
    public function updateCursoAlumno($data,$id){
        return $this->_conection->ejecuteSql($this->prepareUpdateSql($data,$id));
    }
    
    public function deleteCursoAlumno($id){
        return $this->_conection->ejecuteSql($this->prepareDelete($id));
    }
    
}

