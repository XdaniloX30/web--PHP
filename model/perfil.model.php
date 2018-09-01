<?php
class PerfilModel
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

			$stm = $this->pdo->prepare("SELECT * FROM perfil;");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$per = new Perfil();
				
				$per->__SET('id_perfil', $r->id_perfil);
				$per->__SET('descripcion_perfil', $r->descripcion_perfil);


				$result[] = $per;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	

	public function Obtener($codreserva)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM perfil WHERE id_perfil = ?;");
			          

			$stm->execute(array($codreserva));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$per = new Perfil();

			    $per->__SET('id_perfil', $r->id_perfil);
				$per->__SET('descripcion_perfil', $r->descripcion_perfil);


			return $per;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_perfil)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM perfil WHERE id_perfil = ?;");			          

			$stm->execute(array($id_perfil));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Perfil $data)
	{
		try 
		{
			$sql = "UPDATE perfil SET 
			            		descripcion_perfil = ?	
				    WHERE id_perfil   = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('descripcion_perfil'), 
					$data->__GET('id_perfil') 
					
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Perfil $data)
	{
		try 
		{
		$sql = "INSERT INTO perfil (id_perfil,descripcion_perfil) 
		        VALUES (?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
					$data->__GET('id_perfil'), 
					$data->__GET('descripcion_perfil')
					)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
}