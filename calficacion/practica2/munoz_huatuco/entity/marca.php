<?php
include_once realpath(__DIR__.'/../conection/db.php');
class entity_marca {
    
    private $_nombre;
    private $_estado;
    private $_fecha;
    private $_fecha2;
    
    function getMarca($id){
        $conection = new conection_db();
        $data = $conection->sql('Select * from marca where marca_id="'.$id.'"')->fetch();
        $this->_nombre = $data['marca_nombre'];
        $this->_estado = $data['marca_flag_activo'];
        $this->_fecha=$data['marca_fecha_registro'];
        $this->_fecha2=$data['marca_fecha_ultima_actualizacion'];
        
    }
    function getNombre(){
        return $this->_nombre;
    }
    
    function getEstado(){
        return $this->_estado;
    }
    
    function getFecha(){
        return $this->_fecha;
        
    }           
    
    function getFecha2(){
        return $this->_fecha2;
        
    }  
    function nuevo(){
        
        
    }
    
    function editar(){
        
    }
    
    function eliminar(){
        
    }
    
    static function listar(){
        $conection = new conection_db();
        return $conection->sql('Select * from marca')->fetchAll();
    }
    
}