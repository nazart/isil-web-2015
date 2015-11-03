<?php
class conection_db {
    public $_conection;
    public $_sql;
    
    function __construct() {
        $this->_conection = new mysqli("127.0.0.1", 'root', '', 'jcugarte');
    }
    
    function sql($sql){
        $this->_sql = $this->_conection->query($sql);
        return $this;
    }
    
    function fetchAll(){
        $data = array();
        while ($row = $this->_sql->fetch_assoc()){
            $data[] = $row;
        }
        return $data;
    }
    function fetch(){
        return $this->_sql->fetch_assoc(); 
    }
}
