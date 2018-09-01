<?php
class FarmacoModel
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

			$stm = $this->pdo->prepare("SELECT * FROM farmacos;");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$far = new Farmaco();
				
				$far->__SET('id_farmaco', $r->id_farmaco);
				$far->__SET('descripcion', $r->descripcion);
				$far->__SET('precio', $r->precio);
				$far->__SET('unidad', $r->unidad);
		        $far->__SET('id_tipoFarmaco', $r->id_tipoFarmaco);

				$result[] = $far;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}
	

	public function Obtener($id_farmaco)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM farmacos WHERE id_farmaco = ?;");
			          

			$stm->execute(array($id_farmaco));
			$r = $stm->fetch(PDO::FETCH_OBJ);

					$far = new Farmaco();
				
				$far->__SET('id_farmaco', $r->id_farmaco);
				$far->__SET('descripcion', $r->descripcion);
				$far->__SET('precio', $r->precio);
				$far->__SET('unidad', $r->unidad);
		        $far->__SET('id_tipoFarmaco', $r->id_tipoFarmaco);

				

			return $far;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_farmaco)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM farmacos WHERE id_farmaco = ?;");			          

			$stm->execute(array($id_farmaco));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Farmaco $data)
	{
		try 
		{
			$sql = "UPDATE farmacos SET 
			            descripcion   = ?,
						precio        = ?, 
						unidad        = ? ,
						id_tipoFarmaco    =?				
				    WHERE id_farmaco   = ?;";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('descripcion'), 
					$data->__GET('precio'), 
					$data->__GET('unidad'),
					$data->__GET('id_tipoFarmaco'),
					$data->__GET('id_farmaco')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Farmaco $data)
	{
		try 
		{
		$sql = "INSERT INTO farmacos (descripcion,precio,unidad,id_tipoFarmaco,id_farmaco) 
		        VALUES (?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
					$data->__GET('descripcion'), 
					$data->__GET('precio'), 
					$data->__GET('unidad'),
					$data->__GET('id_tipoFarmaco'),
					$data->__GET('id_farmaco')
					)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
	
}