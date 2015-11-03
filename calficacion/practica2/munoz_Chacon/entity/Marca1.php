<?php
class Marca
{
	private $id;
	private $Nombre;
	private $flagActivo;
	private $FechaRegistro;
	private $FechaActualizacion;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
}