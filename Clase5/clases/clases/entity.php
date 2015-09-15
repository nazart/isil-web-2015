<?php

session_start();
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of entity
 *
 * @author Nazart
 */
abstract class entity {

    protected $id;

    protected function setId($id) {
        $this->id = $id;
    }

    protected function getId() {
        return $this->id;
    }
    /*me permite accedder a las atributos de la clase*/
    function setPropertie($properti, $value) {
        $propsFormat = $this->setFormatProperti();
        if (in_array($properti, $propsFormat)) {
            $this->$properti = $value;
        } else {
            trigger_error('El Key <b>"' . $index . '"</b> no coinciden con las propiedades de la clase ', E_USER_ERROR);
            exit;
        }
    }
    
    function setFormatProperti() {
        $cl = new ReflectionClass($this);
        $props = $cl->getProperties(ReflectionProperty::IS_PROTECTED);
        foreach ($props as $prop) {
            $propsFormat[] = $prop->getName();
        }
        return $propsFormat;
    }

    function setProperties($array) {
        $this->init($array);
    }

    function getProperties() {
        $cl = new ReflectionClass($this);
        $props = $cl->getProperties(ReflectionProperty::IS_PROTECTED);
        foreach ($props as $prop) {
            $propsFormat[$prop->getName()] = $this->{$prop->getName()};
        }
        return $propsFormat;
    }

    function getPropertie($propertie) {
        if (property_exists($this, $propertie)) {
            return $this->{$propertie};
        } else {
            return false;
        }
    }

}
