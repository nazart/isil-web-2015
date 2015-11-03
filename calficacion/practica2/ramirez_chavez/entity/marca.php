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
    
    function nuevo($nombre,$estado){
        $conection = new conection_db();
          $data = $conection->sql('insert into marca(marca_nombre,marca_flag_activo) values ("'.$nombre.'","'.$estado.'");')->fetch();
    }
    
    function editar($id, $nombre,$estado){
        $conection = new conection_db();
          $data = $conection->sql('update marca set marca_nombre = "'.$nombre. '" marca_flag_activo = "'.$estado. '"where marca_id="'.$id.'"');
    }
    
    function eliminar($idd){
        $conection = new conection_db();
          $data = $conection->sql('delete from marca where marca_id="'.$idd.'"');
    }
    
    static function listar(){
        $conection = new conection_db();
        return $conection->sql('Select * from marca')->fetchAll();
    }
    
}
