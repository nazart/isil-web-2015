<?php
require_once realpath(__DIR__.'/Model.php');
class ModelAsistenciaAlumno extends Model {
        
    
    public function __construct() {
        parent::__construct();
        $this->_table = 'alumno_asistencia';
        $this->_primaryKey = 'alumno_asistencia_id';
    }
    
    public function getAsistenciaAlumnos($idAsistencia){
        $sql = 'select * from '.$this->_table.' where asistencia_id = '.$idAsistencia;
        return $this->_conection->ejecuteSql($sql)->fetchAll();
    }
    
    public function insertAsistenciaAlumno($data){
        return $this->_conection->ejecuteSql($this->prepareInsertSql($data));
    }
    
    public function updateAsistenciaAlumno($data,$id){
        return $this->_conection->ejecuteSql($this->prepareUpdateSql($data,$id));
    }
}

