<?php
include_once realpath(__DIR__.'/../conection/db.php');
class entity_marca {
    
    function nuevo(){
        
        
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
