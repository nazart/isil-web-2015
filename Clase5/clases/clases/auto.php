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
class auto extends entity {

    protected $marca;
    protected $modelo;
    protected $placa;
    protected $combustible;


    public function __construct($datos = array()) {
        $this->setValues($datos);
    }

    private function setValues($datos){
        if (is_array($datos)) {
            $this->marca = isset($datos['marca']) ? $datos['marca'] : null;
            $this->modelo = isset($datos['modelo']) ? $datos['modelo'] : null;
            $this->placa = isset($datos['placa']) ? $datos['placa'] : null;
            $this->combustible = isset($datos['combustible']) ? $datos['combustible'] : null;
        }
    }
    
    public function nuevoAuto(){
        
    }
    
    public function actualizarAuto($id,$datos){
        $this->setValues($datos);
    }
    
    public function getMarca($marca) {
        $this->marca = $marca;
    }

    public function setMarca() {
        return $this->marca;
    }

    public function getModelo($modelo) {
        $this->modelo = $modelo;
    }

    public function setModelo() {
        return $this->modelo;
    }

    public function getPlaca($placa) {
        $this->placa = $placa;
    }

    public function setPlaca() {
        return $this->placa;
    }

    public function getCombustible($combustible) {
        $this->combustible = $combustible;
    }

    public function setCombustible() {
        return $this->combustible;
    }
}
