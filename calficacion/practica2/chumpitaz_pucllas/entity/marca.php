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
    
    function nuevo($nom,$est=0){
        $conection = new conection_db();
        $sql="insert into marca (marca_nombre, marca_flag_activo) values (\"".$nom."\",\"".$est."\")";
        $conection->sql($sql);
        
    }
    
    function editar($id,$nom,$est){
        $conection = new conection_db();
        $conection->sql("update marca set marca_nombre='".$nom."' where id_marca='".$id."', set marca_flag_activo='".$est."' where id_marca='".$id."'"  );
        echo "Marca actualizada correctamente";
        echo "<a href='index.php'>Volver al inicio</a>";
    }
    
    function eliminar($id){
        $conection = new conection_db();
        $conection->sql('delete from marca where marca_id="'.$id.'"');
    }
    
    static function listar(){
        $conection = new conection_db();
        return $conection->sql('Select * from marca')->fetchAll();
    }
    
}