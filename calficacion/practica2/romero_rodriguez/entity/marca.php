<?php
include_once realpath(__DIR__.'/../conection/db.php');
class entity_marca {
    
    private $_nombre;
    private $_estado;
    private $_Fechareg;
    private $_UFechareg;
    
    function getMarca($id){
        $conection = new conection_db();
        $data = $conection->sql('Select * from marca where marca_id="'.$id.'"')->fetch();
        $this->_nombre = $data['marca_nombre'];
        $this->_estado = $data['marca_flag_activo'];
        $this->_Fechareg = $data['marca_fecha_registro'];
        $this->_UFechareg = $data['marca_fecha_ultima_actualizacion'];
        
    }
    function getNombre(){
        return $this->_nombre;
    }
    
    function getEstado(){
        return $this->_estado;
    }
    
    function getFecha(){
        return $this->_Fechareg;
    }
    
    function getUFecha(){
        return $this->_UFechareg;
    }
    
    function nuevo($nombre,$estado,$fecha,$ultFech){
        $conection = new conection_db();
        $data = $conection->sql('insert into marca values="'.$nombre.','.$estado.','.$fecha.
                ','.$ultFech.'"')->fetch();
        $this->_nombre = $data['marca_nombre'];
        $this->_estado = $data['marca_flag_activo'];
        $this->_fechaReg = $data['marca_fecha_registro'];
        $this->_UltfechaReg = $data['marca_fecha_ultima_actualizacion'];
        
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
