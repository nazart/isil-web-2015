<?php
require_once realpath(__DIR__.'/../conection/coneccion.php');
abstract class  Model {
    protected $_conection;
    protected $_table;
    protected $_primaryKey;
    public function __construct() {
        $this->_conection = new Conection();
    }
    
    public function prepareInsertSql($parametros = array()){
        $sql = 'INSERT INTO '.$this->_table; 
        $sql .= '('.implode(',', array_keys($parametros)).')';
        $sql .= ' VALUES (\''.implode("','", $parametros).'\')';
        //echo $sql; exit;    
        return $sql;
    }
    
    public function prepareUpdateSql($parametros,$id){
        foreach($parametros as $index=>$value){
            $sqlArray[] = $index." = '".$value."'";
        }
        $sql = 'UPDATE '.$this->_table.' SET ';
        $sql .= implode(' , ', $sqlArray);
        $sql .= ' where '.$this->_primaryKey.' = \''.$id.'\'';
        return $sql;
    }
    public function prepareUpdateSqlWhere($parametros,$arrayWhere){
        foreach($parametros as $index=>$value){
            $sqlArray[] = $index." = '".$value."'";
        }
        foreach($arrayWhere as $index=>$value){
            $sqlArrayWhere[] = $index." = '".$value."'";
        }
        $sql = 'UPDATE '.$this->_table.' SET ';
        $sql .= implode(' , ', $sqlArray);
        $sql .= ' where '.implode(' and ', $sqlArrayWhere);
        return $sql;
    }
    
    public function prepareDelete($id){
        $sql = "delete from ".$this->_table .' where '.$this->_primaryKey.'='."'$id'";
        return $sql;
    }
}
