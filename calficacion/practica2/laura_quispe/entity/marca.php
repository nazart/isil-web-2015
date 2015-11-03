<?php
include_once realpath(__DIR__.'/../conection/db.php');
include_once realpath(__DIR__.'/entity.php');
class entity_marca extends entity {
    
    protected $_nombre;
    protected $_estado;
    PROTECTED $_id;
    function getMarca($id){
        $conection = new conection_db();
        $data = $conection->sql('Select * from marca where marca_id="'.$id.'"')->fetch();
        $this->_nombre = $data['marca_nombre'];
        $this->_estado = $data['marca_flag_activo'];
        $this->_id=$data['marca_id'];
    }
    
    function getNombre(){
        return $this->_nombre;
    }
    
    function getID(){
        return $this->_id;
    }
    
    function getEstado(){
        return $this->_estado;
    }
    
    function nuevo($nombre, $estado){   
        $con = new conection_db();
        echo $sql = 'INSERT INTO marca(marca_nombre, marca_flag_activo) VALUES ("'.$nombre.'",'.$estado.')';
        $con->sql($sql);
    }
    
    function editar($id, $nuevo){  
        $con = new conection_db();
        echo $sql = "UPDATE marca SET marca_nombre= '".$nuevo."'"." WHERE marca_id=".$id;
        //exit();
        $con->sql($sql);
    }
    
    function eliminar(){
        
    }
    
    static function listar(){
        $conection = new conection_db();
        return $conection->sql('Select * from marca')->fetchAll();
    }
    
}
?>