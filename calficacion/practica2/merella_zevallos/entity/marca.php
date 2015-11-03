<?php
include_once realpath(__DIR__.'/../conection/db.php');
class entity_marca {
    
    private $_nombre;
    private $_estado;
    
    function getMarca($id){
        $conection = new conection_db();
        $data = $conection->sql('Select * from marca where marca_id="'.$id.'"')->fetch();
        $this->_nombre = $data['marca_nombre'];
        $this->_estado = $data['marca_flag_activo'];
    }
    function getNombre(){
        return $this->_nombre;
    }
    
    function getEstado(){
        return $this->_estado;
    }
    
    function nuevo($nombre,$activo){
        
          $conection = new conection_db();
        return $conection->sql('insert into marca(marca_nombre,marca_flag_activo) value("'.$nombre.'","'.$activo.'")');  
    }
    
    function editar($nombre,$activo){
        $conection = new conection_db();
        return $conection->sql('update marca set marca_id = "'.$nom.'",marca_flag_activo="'.activo.'" where marca_id = "'.$id.'"');
    }
    
    function eliminar($id){
         $conection = new conection_db();
        return $conection->sql('DELETE FROM marca where id = "'.$id.'"');
    }
    
    static function listar(){
        $conection = new conection_db();
        return $conection->sql('Select * from marca')->fetchAll();
    }
    
}