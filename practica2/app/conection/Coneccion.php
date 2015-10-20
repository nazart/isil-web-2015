<?php
require_once realpath(__DIR__.'/conf.php');
class conection {
    protected $_query;
    protected $_conection;
    public function __construct() {
        $this->_conection = new mysqli(CONECTION_HOST, CONECTION_USER, CONECTION_PASSWORD, CONECTION_BD);
    }
    
    public function ejecuteSql($sql){
        $this->_query = $this->_conection->query($sql);
        return $this;
    }
    
    function fetchAll(){$data = array();
        while ($row = $this->_query->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
    
    function fetch(){
        return $this->_query->fetch_assoc(); 
    }
    

}