<?php
class UsuarioModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = new PDO('mysql:host=localhost;dbname=farmacia', 'root', '');
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);		        
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM usuarios");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$usu = new Usuario();
				
               $usu->__SET('id_usuario', $r->id_usuario);
               $usu->__SET('apellido_usuario',$r->apellido_usuario);
               $usu->__SET('nombre_usuario',$r->nombre_usuario);
               $usu->__SET('codigo_perfil', $r->codigo_perfil);
               $usu->__SET('correo_usuario',$r->correo_usuario);
               $usu->__SET('edad_usuario',  $r->edad_usuario);
               $usu->__SET('login_usuario', $r->login_usuario);
               $usu->__SET('pass_usuario',  $r->pass_usuario);
        
		

				$result[] = $usu;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function ValidarLogin()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT  codigo_perfil,login_usuario,pass_usuario FROM usuarios");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$usu = new Usuario();
				
               $usu->__SET('codigo_perfil', $r->codigo_perfil);
               $usu->__SET('login_usuario', $r->login_usuario);
               $usu->__SET('pass_usuario',  $r->pass_usuario);
        
		

				$result[] = $usu;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	
	
	
	public function Obtener($id_usuario)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM usuarios WHERE id_usuario = ?");
			          

			$stm->execute(array($id_usuario));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$usu = new Usuario();
				
               $usu->__SET('id_usuario', $r->id_usuario);
               $usu->__SET('apellido_usuario',$r->apellido_usuario);
               $usu->__SET('nombre_usuario',$r->nombre_usuario);
               $usu->__SET('codigo_perfil', $r->codigo_perfil);
               $usu->__SET('correo_usuario',$r->correo_usuario);
               $usu->__SET('edad_usuario',  $r->edad_usuario);
               $usu->__SET('login_usuario', $r->login_usuario);
               $usu->__SET('pass_usuario',  $r->pass_usuario);
        
		

			return $usu;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_usuario)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM usuarios WHERE id_usuario = ?");			          

			$stm->execute(array($id_usuario));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Usuario $data)
	{
		try 
		{
			$sql = "UPDATE usuarios SET 
			                     	apellido_usuario = ?,
	                                codigo_perfil = ?,
	                                correo_usuario = ?,
                                 	edad_usuario = ?,
                                 	fechaNacimiento_usuario = ?,             	
                                    login_usuario = ?,
	                                nombre_usuario = ?,
	                                pass_usuario = ? 
				    WHERE id_usuario = ?;";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('apellido_usuario'), 
					$data->__GET('codigo_perfil'), 
					$data->__GET('correo_usuario'),
					$data->__GET('edad_usuario'),
				    $data->__GET('fechaNacimiento_usuario'), 
					$data->__GET('login_usuario'), 
					$data->__GET('nombre_usuario'),
					$data->__GET('pass_usuario'),
					$data->__GET('id_usuario')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Usuario $data)
	{
		try 
		{
		$sql = "INSERT INTO Usuarios (apellido_usuario,codigo_perfil,correo_usuario,edad_usuario,fechaNacimiento_usuario
		                              ,login_usuario,nombre_usuario,pass_usuario,id_usuario) 
		                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
					$data->__GET('apellido_usuario'), 
					$data->__GET('codigo_perfil'), 
					$data->__GET('correo_usuario'),
					$data->__GET('edad_usuario'),
				    $data->__GET('fechaNacimiento_usuario'), 
					$data->__GET('login_usuario'), 
					$data->__GET('nombre_usuario'),
					$data->__GET('pass_usuario'),
					$data->__GET('id_usuario')
					)
				
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}