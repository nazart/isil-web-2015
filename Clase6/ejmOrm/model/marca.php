<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of marca
 *
 * @author Nazart
 */

require_once realpath(__DIR__.'/../conection/ORM.php');

class marca extends ORM {

    public $marca_id, $marca_nombre;
    protected static $table = 'marca';
    protected static $primary_key = 'marca_id';
    
    public function __construct($data) {
        parent::__construct();
        if ($data && sizeof($data)) {
            $this->populateFromRow($data);
        }
    }

    public function populateFromRow($data) {
        $this->marca_id = isset($data['marca_id']) ? intval($data['marca_id']) : null;
        $this->marca_nombre = isset($data['marca_nombre']) ? $data['marca_nombre'] : null;
    }

//put your code here
}
