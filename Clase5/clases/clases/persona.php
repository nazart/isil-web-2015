<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of persona
 *
 * @author Nazart
 */

class Persona extends entity {

    public $apodo;
    protected $nombre;
    protected $apellido;
    protected $edad;
    protected $direccion;
    protected $dni;
    protected $sexo;
    protected $auto;
    
    const SEXO_MASCULINO = 'm';
    const SEXO_FEMENINO = 'f';
    
    const NOMBRE_ENTITY = 'persona';

    public function __construct($datos = array()) {
        $this->setValues($datos);
    }

    private function setValues($datos){
        if (is_array($datos) && !empty($datos)) {
            $this->nombre = isset($datos['nombre']) ? $datos['nombre'] : null;
            $this->apellido = isset($datos['apellido']) ? $datos['apellido'] : null;
            $this->edad = isset($datos['edad']) ? $datos['edad'] : null;
            $this->direccion = isset($datos['direccion']) ? $datos['direccion'] : null;
            $this->dni = isset($datos['dni']) ? $datos['dni'] : null;
            $this->sexo = isset($datos['sexo']) ? $datos['sexo'] : null;
        }
    }
    
    public function nuevoUsuario(){
        $this->save($this->getProperties(),self::NOMBRE_ENTITY);
    }
    
    static function listPersona(){
       return entity::getEntity(self::NOMBRE_ENTITY);
    }
    
    //public function 
}
