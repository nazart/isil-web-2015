<?php

class Alumno
{
    private $marca_id;
    private $marca_nombre;
    private $marca_flag_activo;
    private $marca_fecha_registro;
    private $marca_ultima_actualizacion;

    public function __GET($k){ return $this->$k; }
    public function __SET($k, $v){ return $this->$k = $v; }
}   