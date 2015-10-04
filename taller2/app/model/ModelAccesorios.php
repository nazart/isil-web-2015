<?php
require_once realpath(__DIR__.'/Model.php');
class ModelAccesorios extends Model {
    
    public function __construct() {
        parent::__construct();
    }
    
    public function getAllAccesorios(){
        return $this->_conection->ejecuteSql('select * from accesorio')->fetchAll();
    }
    
    public function getAccesorios($idAccesorio){
        return $this->_conection->ejecuteSql('select * from accesorio where accesorio_id = "'.$idAccesorio.'"')->fetch();
    }
    
    public function insertAccesorios($data){
        $sql = 'INSERT INTO accesorio (accesorio_nombre, accesorio_flag_activo, accesorio_fecha_registro, accesorio_fecha_actualizacion) ';
        $sql .= "VALUES('".$data['accesorio_nombre']."','".$data['accesorio_flag_activo']."','".$data['accesorio_fecha_registro']."','".$data['accesorio_fecha_actualizacion']."')";
        return $this->_conection->ejecuteSql($sql);
    }
    
    public function updateAccesorios($data,$id){
        $sql = "UPDATE accesorio SET accesorio_nombre = '".$data['accesorio_nombre']."',";
        $sql .= "accesorio_flag_activo = '".$data['accesorio_flag_activo']."',";
        $sql .= "accesorio_fecha_actualizacion = '".$data['accesorio_fecha_actualizacion']."' ";
        $sql .= " WHERE accesorio_id = '$id' ;";
        return $this->_conection->ejecuteSql($sql);
    }
    
    public function deleteAccesorios($id){
        
    }
}

