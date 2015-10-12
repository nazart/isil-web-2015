<?php

require_once realpath(__DIR__ . '/../model/ModelAlumno.php');
require_once realpath(__DIR__ . '/../model/ModelNota.php');

class EntityAlumno {

    protected $_id;
    protected $_nombre;
    protected $_apellidos;
    protected $_fechaNacimiento;
    protected $_correo;

    function indentify($id) {
        $modelAlumno = new ModelAlumno();
        $data = $modelAlumno->getAlumno($id);
        $this->_id = $data['alumno_id'];
        $this->_nombre = $data['alumno_nombre'];
        $this->_apellidos = $data['alumno_apellidos'];
        $this->_fechaNacimiento = $data['alumno_fecha'];
        $this->_correo = $data['alumno_correo'];
        return $data;
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

    function getApellidos() {
        return $this->_apellidos;
    }

    function setApellidos($apellidos) {
        $this->_apellidos = $apellidos;
    }

    function getFechaNacimiento() {
        return $this->_fechaNacimiento;
    }

    function setFechaNacimiento($fechaNacimiento) {
        $this->_fechaNacimiento = $fechaNacimiento;
    }

    function getCorreo() {
        return $this->_correo;
    }

    function setCorreo($correo) {
        $this->_correo = $correo;
    }

    function save() {
        $modelAlumno = new ModelAlumno();
        $data['alumno_nombre'] = $this->_nombre;
        $data['alumno_apellidos'] = $this->_apellidos;
        $data['alumno_fecha'] = $this->_fechaNacimiento;
        $data['alumno_correo'] = $this->_correo;
        if ($this->_id != '') {
            $modelAlumno->updateAlumno($data, $this->_id);
        } else {
            $modelAlumno->insertAlumno($data);
        }
    }

    function registrarNota($practica1, $practica2, $practica3, $practica4, $parcial, $final, $trabajo) {
        $modelNota = new ModelNota();
        $dataNotas = $modelNota->getNota($this->_id);
        $data['alumno_id'] = $this->_id;
        $data['nota_practica_1'] = $practica1;
        $data['nota_practica_2'] = $practica2;
        $data['nota_practica_3'] = $practica3;
        $data['nota_practica_4'] = $practica4;
        $data['nota_parcial_1'] = $parcial;
        $data['nota_examen_final'] = $final;
        $data['nota_trabajo_final'] = $trabajo;
        if (empty($dataNotas)) {
            $modelNota->insertNota($data);
        } else {
            $modelNota->updateNota($data,$dataNotas['nota_id']);
        }
    }
    
    function getNotas(){
        $modelNota = new ModelNota();
        return $modelNota->getNota($this->_id);
    }
    
    function calcularNota($practica1, $practica2, $practica3, $practica4, $parcial, $final, $trabajo){
        return $practica1*0.2+$practica2*0.2+$practica3*0.2+$practica4*0.2+$parcial*0.2+$final*0.2+$trabajo*0.2;
    }

    function delete() {
        $modelAlumno = new ModelAlumno();
        return $modelAlumno->deleteAlumno($this->_id);
    }

    static function getAllAlumno() {
        $modelAlumno = new ModelAlumno();
        return $modelAlumno->getAllAlumno();
    }

}
