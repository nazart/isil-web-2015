<?php
error_reporting(0);
include_once realpath(__DIR__.'/../conection/accesodb.php');

//include '../model/accesodb.php';

class Marca{
    public function ConsultarByNombre($name)
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from marca where marca_nombre like '$name%' ORDER BY marca_nombre desc";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
       
    }
    public function GetByPrueba($des)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from marca where marca_nombre like '$des%' order by marca_nombre desc";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
    }
    public function GetById($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "select * from marca where marca_id=$id";
        
        $rpta = $obj->ConsultarById($sql);
        return $rpta;
    }
     public function ConsultarMarca()
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from marca";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
    }
    public function ConsultarByAll()
    {
        $obj= new Accesodb();
        $obj->Conectar();
        $sql = "select * from marca";
        
        $rpta = $obj->Consultar($sql);
        return $rpta;
        
    }
    public function Nuevo($nom,$fecreg,$fecact,$flag)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "Insert into marca(marca_nombre, marca_fecha_registro,marca_fecha_ultima_actualizacion,marca_flag_activo)"
                . "values('$nom','$fecreg','$fecact','$flag')";
       
       $id = $obj->Insertar($sql); 
       echo $sql;
       exit();
       return $id;
        
    }
    public function Update($id,$nom,$fecreg,$fecact,$flag)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "update marca set nombre_marca='$nom',"
                ."marca_fecha_registro='$fecreg',"
                ."marca_fecha_ultima_actualizacion='$fecact',"
                ."marca_flag_activo='$flag',"
                ."where id=$id";
       $id = $obj->Actualizar($sql); 
       return $id;
        
    }
    public function Delete($id)
    {
        $obj = new Accesodb();
        $obj->Conectar();
        $sql = "delete from marca where id = $id";
        $result = $obj->Eliminar($sql);
        if(!$result)
        {
            return FALSE;
        }
        else {
            
            return TRUE;
        }
        
    }
}


