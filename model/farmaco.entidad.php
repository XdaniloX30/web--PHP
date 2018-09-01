<?php
class Farmaco
{
	private $id_farmaco;
	private $descripcion;
	private $precio;
	private $unidad;
	private $id_tipoFarmaco;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
	
}