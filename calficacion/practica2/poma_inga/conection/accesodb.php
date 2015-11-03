<?php
class Accesodb{
    private $cn;
    
    public function Conectar(){
        
        $this->cn=  mysql_connect("localhost", "root", "mysql");
        mysql_select_db("jcugarte");
    }
    public function Consultar($sql){
        $rs = mysql_query($sql, $this->cn);
        $arreglo = array();
        while($registro = mysql_fetch_assoc($rs)){
            $arreglo[]=$registro;
        }
        return $arreglo;
    }
    public function ConsultarById($query)
    {
        if(!$sql=  mysql_query($query))
        {
            throw new Exception("Error en la consulta");
        }
        else {
            $num = mysql_num_rows($sql);
            while ($num>0)
            {
                $data = mysql_fetch_array($sql);
                $num--;
            }
        }
        return $data;
    }

    public function Insertar($sql)
    {
        mysql_query($sql,  $this->cn);
        $id = mysql_insert_id();
        return $id;
        
    }
    public function Actualizar($sql)
    {
      $resu = mysql_query($sql,$this->cn);
      if(!$resu)
       {
            throw new Exception("Error en la actualizacion");
       }
        else {
            return TRUE;
      }

        
    }
    public function Eliminar($sql)
    {
       $result = mysql_query($sql,  $this->cn);
       
        if(!$result)
        {
            return FALSE;
        }
        else {
            return true;
        }
    }
    
}