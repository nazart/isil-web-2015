<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ORM
 *
 * @author Nazart
 */
class ORM {  
    private static $database;
    protected static $table;
    protected static $primary_key;
    function __construct() {
        self::getConnection();
    }
    private static function getConnection() {
        require_once realpath(__DIR__.'/Database.php');
        self::$database = Database::getConnection(DB_PROVIDER, DB_HOST, DB_USER, DB_PASSWORD, DB_DB);
    }
    public static function find($id) {
        $results = self::where(self::$primary_key, $id);
        return $results[0];
    }
    public static function where($field, $value) {
        $obj = null;
        self::getConnection();
        $query = "SELECT * FROM " . static ::$table . " WHERE " . $field . " = ?";
        $results = self::$database->execute($query, null, array($value));
        if ($results) {
            $class = get_called_class();
            for ($i = 0;$i < sizeof($results);$i++) {
                $obj[] = new $class($results[$i]);
            }
        }
        return $obj;
    }
    public static function all($order = null) {
        $objs = null;
        self::getConnection();
        $query = "SELECT * FROM " . static ::$table;
        if ($order) {
            $query.= $order;
        }
        $results = self::$database->execute($query, null, null);
        if ($results) {
            $class = get_called_class();
            foreach ($results as $index => $obj) {
                $objs[] = new $class($obj);
            }
        }
        return $objs;
    }
    public function save() {
        $values = get_object_vars($this);
        $filtered = null;
        foreach ($values as $key => $value) {
            if ($value !== null && $value !== '' && strpos($key, 'obj_') === false && $key !== self::$primary_key) {
                if ($value === false) {
                    $value = 0;
                }
                $filtered[$key] = $value;
            }
        }
        $columns = array_keys($filtered);
        if ($this->{self::$primary_key}) {
            $columns = join(" = ?, ", $columns);
            $columns.= ' = ?';
            $query = "UPDATE " . static ::$table . " SET $columns WHERE ".self::$primary_key." =" . $this->{self::$primary_key};
        } else {
            $params = join(", ", array_fill(0, count($columns), "?"));
            $columns = join(", ", $columns);
            $query = "INSERT INTO " . static ::$table . " ($columns) VALUES ($params)";
        }
        $result = self::$database->execute($query, null, $filtered);
        if ($result) {
            $result = array('error' => false, 'message' => self::$database->getInsertedID());
        } else {
            $result = array('error' => true, 'message' => self::$database->getError());
        }
        return $result;
    }
}