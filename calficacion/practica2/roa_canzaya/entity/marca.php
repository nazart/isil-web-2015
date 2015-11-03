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
    
    function nuevo(){
        try {
                $nombre_marca = $_POST["nombre"];
                $activo_marca = $_POST["activo"];
                $fech_in_marca = $_POST["fecha_in"];
                $cn = mysql_connect("localhost","root","jcugarte");
                mysql_select_db("jcugarte");
                $sql = "insert into marca (nombre, activo, fecha_in)
                                values ('$nombre_marca', '$activo_marca','$fech_in_marca') ";
                mysql_query($sql);

		$id = AccesoBD::nuevo($this->cn,$sql);
		return $id;
		}catch (Exception $e){
			throw $e;
		}
        
    }
    
    function editar(){
        
    }
    
    function eliminar($id){
        	try {
				
			$sql = "DELETE FROM marca where marca_id = '$id' ";
			mysql_query($sql);
			if(mysql_error()){
				throw new Exception( mysql_error() );
			}
		}catch (Exception $e){
			throw $e;
		}
    }
    
    static function listar(){
        $conection = new conection_db();
        return $conection->sql('Select * from marca')->fetchAll();
    }
    
}
