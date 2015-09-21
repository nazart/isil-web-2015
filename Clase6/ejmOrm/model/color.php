<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of color
 *
 * @author Nazart
 */

require_once realpath(__DIR__.'/../conection/ORM.php');

class color extends ORM {

    public $id, $nombre;
    protected static $table = 'color';
    protected static $primary_key = 'color';

    public function __construct($data) {
        parent::__construct();
        if ($data && sizeof($data)) {
            $this->populateFromRow($data);
        }
    }

    public function populateFromRow($data) {
        $this->id = isset($data['id']) ? intval($data['id']) : null;
        $this->nombre = isset($data['nombre']) ? $data['nombre'] : null;
    }

//put your code here
}
