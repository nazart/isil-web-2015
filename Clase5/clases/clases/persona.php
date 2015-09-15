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
    
    const ESTADO_REGISTRADO = 3;

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
        
    }
    
    public function actualizarUsuario($id,$datos){
        $this->setValues($datos);
    }
    
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setApellido($apellido) {
        $this->apellido = $apellido;
    }

    public function getApellido() {
        return $this->apellido;
    }

    public function setEdad($edad) {
        $this->edad = $edad;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function setDireccion($direccion) {
        $this->direccion = $direccion;
    }

    public function getDireccion() {
        return $this->direccion;
    }

    public function setDNI($dni) {
        $this->dni = $dni;
    }

    public function getDNI() {
        return $this->dni;
    }

    public function setSexo($sexo) {
        $valorSexoMasculino = self::SEXO_MASCULINO;
        $valorSexoFemenino = self::SEXO_FEMENINO;
        $valoresSexo = array($valorSexoFemenino, $valorSexoMasculino);
        if (in_array($sexo, $valoresSexo)) {
            $this->sexo = $sexo;
            return true;
        } else {
            return false;
        }
    }

    public function getSexo() {
        return $this->sexo;
    }
    public function setAuto(auto $auto){
        
        $this->auto = $auto;
        
    }

    //public function 
}
