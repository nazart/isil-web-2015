<?php

require_once realpath(__DIR__ . '/../model/ModelCurso.php');

class EntityCurso {

    protected $_id;
    protected $_nombre;
    protected $_credito;
    protected $_activo; /* o es 1 o 0 */

    const CURSO_ACTIVO = 1;
    const CURSO_INACTIVO = 0;

    function indentify($id) {
        $modelCurso = new ModelCurso();
        $data = $modelCurso->getCurso($id);
        $this->_id = $data['curso_id'];
        $this->_nombre = $data['curso_nombre'];
        $this->_credito = $data['curso_credito'];
        $this->_activo = $data['curso_fecha'];
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

    function getCredito() {
        return $this->_credito;
    }

    function setCredito($credito) {
        $this->_credito = $credito;
    }

    function getActivo() {
        return $this->_activo;
    }

    function setActivo($activo) {
        $this->_activo = $activo;
    }

    function save() {
        $modelCurso = new ModelCurso();
        $data['curso_nombre'] = $this->_nombre;
        $data['curso_credito'] = $this->_credito;
        $data['curso_flag_activo'] = $this->_activo;
        $data['curso_correo'] = $this->_correo;
        if ($this->_id != '') {
            $modelCurso->updateCurso($data, $this->_id);
        } else {
            $modelCurso->insertCurso($data);
        }
    }

    function delete() {
        $modelCurso = new ModelCurso();
        return $modelCurso->deleteCurso($this->_id);
    }

    static function getAllCurso() {
        $modelCurso = new ModelCurso();
        return $modelCurso->getAllCurso();
    }

}
