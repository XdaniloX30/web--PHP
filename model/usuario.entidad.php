<?php

class Usuario
{
	private $apellido_usuario;
	private $codigo_perfil;
	private $correo_usuario;
	private $edad_usuario;
	private $fechaNacimiento_usuario;
	private $id_usuario;
	private $login_usuario;
	private $nombre_usuario;
	private $pass_usuario;

	public function __GET($k){ return $this->$k; }
	public function __SET($k, $v){ return $this->$k = $v; }
	
}