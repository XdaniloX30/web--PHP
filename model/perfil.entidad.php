<?php
class Perfil
{
	private $id_perfil;
	private $descripcion_perfil;


	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
	
}