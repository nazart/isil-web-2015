<?php

require_once realpath(__DIR__ . '/../model/ModelCuroAlumno.php');

class EntityMatricula {

    protected $_id;
    protected $_nombre;
    protected $_credito;
    protected $_activo; /* o es 1 o 0 */

    function indentify($id) {
        
    }

    function save() {
        $modelMatricula = new ModelMatricula();
        $data['curso_nombre'] = $this->_nombre;
        $data['curso_credito'] = $this->_credito;
        $data['curso_flag_activo'] = $this->_activo;
        if ($this->_id != '') {
            $modelMatricula->updateMatricula($data, $this->_id);
        } else {
            $modelMatricula->insertMatricula($data);
        }
    }

}
