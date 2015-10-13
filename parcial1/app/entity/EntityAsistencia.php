<?php
require_once realpath(__DIR__ . '/../model/ModelAsistencia.php');
require_once realpath(__DIR__ . '/../model/ModelAsistenciaAlumno.php');
require_once realpath(__DIR__ . '/EntityAlumno.php');

class EntityAsistencia {

    protected $_id;
    protected $_fechaAsistencia;
    protected $_nombre;
    protected $_horaInicio;
    protected $_horaFin;
    protected $_alumnos;

    function indentify($id) {
        $modelAsistencia = new ModelAsistencia();
        $data = $modelAsistencia->getAsistencia($id);
        $this->_id = $data['asistencia_id'];
        $this->_fechaAsistencia = $data['asistencia_fecha'];
        $this->_nombre = $data['asistencia_nombre'];
        $this->_horaInicio = $data['asistencia_hora_inicio'];
        $this->_horaFin = $data['asistencia_hora_final'];
        $this->_alumnos = $this->listarAlumnos();
    }
    
    function listarAlumnos(){
        $modelAsistenciaAlumno = new ModelAsistenciaAlumno();
        return $modelAsistenciaAlumno->getAsistenciaAlumnos($this->_id);
    }

    function getId() {
        return $this->_id;
    }

    function setNombre($nombre) {
        $this->_nombre = $nombre;
    }

    function getNombre() {
        return $this->_nombre;
    }

    function getFechaAsistencia() {
        return $this->_fechaAsistencia;
    }

    function setFechaAsistencia($fechaAsistencia) {
        $this->_fechaAsistencia = $fechaAsistencia;
    }

    function getHoraInicio() {
        return $this->_horaInicio;
    }

    function setHoraInicio($horaInicio) {
        $this->_horaInicio = $horaInicio;
    }
    
    function getHoraFin() {
        return $this->_horaFin;
    }

    function setHoraFin($horaFin) {
        $this->_horaFin = $horaFin;
    }
    
    function getAlumnos(){
        return $this->_alumnos;
    }
    function setAumnos($alumnos=''){
        return false;
    }
    
    /*
     * $alumnoRegistrados son los alumnos que asistieron
     * array(1,2,3,4,5,6)
     */
    function registrarAsistencia($alumnoRegistrados) {
        $alumnos = EntityAlumno::getAllAlumno();
        $modelAsistenciaAlumno = new ModelAsistenciaAlumno();
        foreach($alumnos as $index){
            if(in_array($index['alumno_id'], $alumnoRegistrados)){
                $estado = 1;
            }  else {
                $estado = 0;
            }
            $data['alumno_id'] = $index['alumno_id'];
            $data['asistencia_id'] = $this->_id;
            $data['alumno_asistencia_estado'] = $estado;
            $data['alumno_asistencia_fecha_hora_registro'] = date('Y-m-d H:i:s');
            /*Queda pendiente definir si es dentro o fuera de la hora de la asistencia*/
            $data['alumno_asistencia_flagofline'] = 1;
            $modelAsistenciaAlumno->insertAsistenciaAlumno($data);
            unset($data);
        }
        return true;
    }
    
    static function getAllAsistencias(){
        $modelAsistencia = new ModelAsistencia();
        return $modelAsistencia->getAllAsistencia();
    }
}
