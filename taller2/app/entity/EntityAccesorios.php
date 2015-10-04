<?php
require_once realpath(__DIR__.'/../model/ModelAccesorios.php');

class EntityAccesorios {
    
    protected $_id;
    protected $_nombre;
    protected $_estado;
    protected $_fechaRegistro;
    protected $_fechaActualizacion;
    
    function indentify($id) {
        $modelAccesorios = new ModelAccesorios();
        $data = $modelAccesorios->getAccesorios($id);
        $this->_id = $data['accesorio_id'];
        $this->_nombre = $data['accesorio_nombre'];
        $this->_estado = $data['accesorio_flag_activo'];
        $this->_fechaRegistro = $data['accesorio_fecha_registro'];
        $this->_fechaActualizacion = $data['accesorio_fecha_actualizacion'];
        return $data;
    }
    
    function getId(){
        return $this->_id;
    }
    
    function setNombre($nombre){
        $this->_nombre = $nombre;
    }
    
    function getNombre(){
        return $this->_nombre;
    }
    
    function setEstado($estado){
        $this->_estado = $estado;
    }
    
    function getEstado(){
        return $this->_estado;
    }
    
    function save(){
        $modelAccesorios = new ModelAccesorios();
        $data['accesorio_nombre']=  $this->_nombre;
        $data['accesorio_flag_activo']=  $this->_estado;
        if($this->_id!=''){
            /*para actualizar*/
            $data['accesorio_fecha_actualizacion']=  date('Y-m-d H:i:s');
            $modelAccesorios->updateAccesorios($data, $this->_id);    
        }else {
            /*para crear*/
            $data['accesorio_fecha_registro']=  date('Y-m-d H:i:s');
            $data['accesorio_fecha_actualizacion']=  date('Y-m-d H:i:s');
            $modelAccesorios->insertAccesorios($data);
        }
    }
    function delete(){
        $modelAccesorios = new ModelAccesorios();
        return $modelAccesorios->deleteAccesorios($this->_id);
    }
    
    static function getAllAccesorio(){
        $modelAccesorios = new ModelAccesorios();
        return $modelAccesorios->getAllAccesorios();
    }
    
}