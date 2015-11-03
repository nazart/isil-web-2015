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
    
    function nuevo($marca_nombre){
		$fecha = date("Y-m-d",time());
        $conection = new conection_db();
        $conection->sql('insert into marca(marca_nombre,marca_fecha_registro) values ("' . $marca_nombre . '","' . $fecha . '")');
    }
    
    function editar(){
    }
    
    function eliminar($id){
        $conection = new conection_db();
		$conection->sql('delete from marca where marca_id = ' . $id);
		echo 'Se ha eliminado el registro con id: <strong>' . $id . '</strong>';
		echo '<hr>';
		echo '<a href= "index.php">Regresar</a>';
    }
    
    static function listar(){
        $conection = new conection_db();
        return $conection->sql('Select * from marca')->fetchAll();
    }
}
