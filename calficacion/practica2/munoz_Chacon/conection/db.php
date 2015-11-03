<?php
class MarcaModel
{
	private $pdo;

	public function __CONSTRUCT()
	{
		try
		{
                    //$this->_conection = new mysqli("127.0.0.1", 'root', 'mysql', 'jcugarte');                    
                    $this->pdo = new PDO('mysql:host=127.0.0.1;dbname=jcugarte', 'root', '');
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

			$stm = $this->pdo->prepare("SELECT * FROM marca");
			$stm->execute();

			foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
			{
				$marc = new Marca();

				$marc->__SET('id', $r->id);
				$marc->__SET('Nombre', $r->Nombre);
				$marc->__SET('Flag_Activo', $r->flagActivo);
				$marc->__SET('Fecha_Registro', $r->FechaRegistro);
				$marc->__SET('Fecha_Actualizacion', $r->FechaActualizacion);

				$result[] = $marc;
			}

			return $result;
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

        
        public function Obtener($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("SELECT * FROM marca WHERE id = ?");
			          

			$stm->execute(array($id));
			$r = $stm->fetch(PDO::FETCH_OBJ);

			$marc = new Marca();

			$marc->__SET('id', $r->id);
			$marc->__SET('Nombre', $r->Nombre);
			$marc->__SET('Fecha_Registro', $r->Fecha_Registro);
			$marc->__SET('Flag_Activo', $r->Flag_Activo);
			$marc->__SET('Fecha_Actualizacion', $r->Fecha_Actualizacion);

			return $alm;
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$stm = $this->pdo
			          ->prepare("DELETE FROM marca WHERE id = ?");			          

			$stm->execute(array($id));
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar(Marca $data)
	{
		try 
		{
			$sql = "UPDATE marca SET 
						Nombre          = ?, 
						Fecha_Registro        = ?,
						Flag_Activo            = ?, 
						Fecha_Actualizacion = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				array(
					$data->__GET('Nombre'), 
					$data->__GET('Fecha_Registro'), 
					$data->__GET('Flag_Activo'),
					$data->__GET('Fecha_Actualizacion'),
					$data->__GET('id')
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Marca $data)
	{
		try 
		{
		$sql = "INSERT INTO marca (Nombre,Fecha_Registro,Flag_Activo,Fecha_Actualizacion) 
		        VALUES (?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
			array(
				$data->__GET('Nombre'), 
				$data->__GET('Fecha_Registro'), 
				$data->__GET('Flag_Activo'),
				$data->__GET('Fecha_Actualizacion')
				)
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}