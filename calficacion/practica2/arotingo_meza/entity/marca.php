<?php
include_once realpath(__DIR__.'/../conection/db.php');
class entity_marca {
    
    function nuevo(){
       
     $query="INSERT INTO marca (marca_fecha_registro, marca_nombre) VALUES('$marca_fecha_registro', '$marca_nombre')"; 
   $resultado=$mysqli->query($query);
   
   $this->marca_id = isset($data['$marca_fecha_registro']) ? intval($data['$marca_fecha_registro']) : null;
        $this->marca_nombre = isset($data['marca_nombre']) ? $data['marca_nombre'] : null;
        
    }
    function editar(){
        
    }
    
    function eliminar(){
        
    }
    
    static function listar(){
        $conection = new conection_db();
        return $conection->sql('Select * from marca')->fetch();
    }
    
}
