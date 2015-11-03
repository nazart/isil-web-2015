<?php
class marca_model
{
    private $pdo;

    public function __CONSTRUCT()
    {
        try
        {
            $this->pdo = new PDO("127.0.0.1", 'root', 'mysql', 'jcugarte');
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

            $stm = $this->pdo->prepare("SELECT * FROM jcugarte");
            $stm->execute();

            foreach($stm->fetchAll(PDO::FETCH_OBJ) as $r)
            {
                $alm = new marca_auto();

                $alm->__SET('marca_id', $r->marca_id);
                $alm->__SET('marca_nombre', $r->marca_nombre);
                $alm->__SET('marca_flag_activo', $r->marca_flag_activo);
                $alm->__SET('marca_fecha_registro', $r->marca_fecha_registro);
                $alm->__SET('marca_ultima_actualizacion', $r->marca_ultima_actualizacion);

                
               
                $result[] = $alm;
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
                      ->prepare("SELECT * FROM jcugarte WHERE marca_id = ?");
                      

            $stm->execute(array($id));
            $r = $stm->fetch(PDO::FETCH_OBJ);

            $alm = new marca_auto();

            $alm->__SET('marca_id', $r->marca_id);
                $alm->__SET('marca_nombre', $r->marca_nombre);
                $alm->__SET('marca_flag_activo', $r->marca_flag_activo);
                $alm->__SET('marca_fecha_registro', $r->marca_fecha_registro);
                $alm->__SET('marca_ultima_actualizacion', $r->marca_ultima_actualizacion);

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
                      ->prepare("DELETE FROM jcugarte WHERE marca_id = ?");                      

            $stm->execute(array($id));
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Actualizar(marca_auto $data)
    {
        try 
        {
            $sql = "UPDATE jcugarte SET 
                        marca_id          = ?, 
                        marca_nombre        = ?,
                        marca_flag_activo           = ?, 
                        marca_fecha_registro = ?
                        marca_ultima_actualizacion=?
                    WHERE marca_id = ?";

              
            
            
   
            $this->pdo->prepare($sql)
                 ->execute(
                array(
                    $data->__GET(' marca_nombre'), 
                   
                    $data->__GET('marca_flag_activo'),
                    $data->__GET('marca_fecha_registro'),
                     $data->__GET('marca_ultima_actualizacion'), 
                    $data->__GET('marca_id')
                    )
                );
        } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }

    public function Registrar(marca_auto $data)
    {
        try 
        {
        $sql = "INSERT INTO alumnos (marca_nombre,marca_flag_activo,marca_fecha_registro,marca_ultima_actualizacion) 
                VALUES (?, ?, ?, ?,?)";

        $this->pdo->prepare($sql)
             ->execute(
            array(
                $data->__GET('marca_nombre'), 
                $data->__GET('marca_flag_activo'), 
                $data->__GET('marca_fecha_registro'),
                $data->__GET('marca_ultima_actualizacion')
                )
            );
        
         } catch (Exception $e) 
        {
            die($e->getMessage());
        }
    }
}