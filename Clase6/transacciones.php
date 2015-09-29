<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <h2>Transacciones</h2>
        Por defecto, MySQL se ejecuta con el modo de confirmación automática habilitada. 
        Esto significa que tan pronto como se ejecuta una declaración que actualice (modifique) una tabla, 
        MySQL almacena la actualización en el disco para que sea permanente. El cambio no se puede revertir.
        Para desactivar el modo de confirmación automática implícita para una sola serie de declaraciones, 
        utilice la instrucción START TRANSACTION:
        Con START TRANSACTION, autocommit permanece deshabilitado hasta que finalice la transacción con COMMIT o ROLLBACK. 
        A continuación, el modo de confirmación automática vuelve a su estado anterior.
        START TRANSACTION permite varios modificadores que controlan características de la operación. 
        Para especificar varios modificadores, sepárelos con comas.
        <pre>
            <?php
            $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
            if ($mysqli->connect_errno) {
                echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            /* Recomendado: usar la API para cotrolar las configuraciones transaccionales */
            $mysqli->autocommit(false);

            /* No serán monitorizadas y reconocidas por la aplicación y el complemento de balance de carga */
            ?>
        </pre>
        <p>
            El auto commit permite designar el control de las modificaciones 
        </p>
        <pre>
            <?php
            $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
            $mysqli->autocommit(false);
           /* if (!$mysqli->query('SET AUTOCOMMIT = 0')) {
                echo "Falló la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
            }*/
            $mysqli->query("INSERT INTO test(id) VALUES (1)");
            $mysqli->query("INSERT INTO test(id) VALUES (2)");
            $mysqli->query("INSERT INTO test(id) VALUES (3)");
            $mysqli->rollback();
            echo 'No inserto la consulta INSERT INTO test(id) VALUES (1) por el rollback<br>';

            $mysqli->query("INSERT INTO test(id) VALUES (4)");
            $mysqli->query("INSERT INTO test(id) VALUES (5)");
            $mysqli->query("INSERT INTO test(id) VALUES (6)");
            $mysqli->commit();
            echo 'Inserto la consulta INSERT INTO test(id) VALUES (1) por el Commit<br>';
            ?>
        </pre>
        <?php
        $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
        //$mysqli->autocommit(false);
        
        $arrayAccesorios = array(1, 2, 3, 4, 5,array('asdsad'));
        try {
            $sentencia = $mysqli->prepare("INSERT INTO vehiculo(marca_id,modelo_id,vehiculo_precio) VALUES (?,?,?)");
            $marca_id = 2;
            $modelo_id = 2;
            $vehiculo_precio = 23900;
            $sentencia->bind_param("iis", $marca_id, $modelo_id, $vehiculo_precio);
            $sentencia->execute();
            $sentencia = $mysqli->prepare("INSERT INTO vehiculo_accesorio(accesorio_id,vehiculo_id) VALUES (?,?)");
            $sentencia->bind_param("ii", $accesorio_id, $vehiculo_id);
            $vehiculo_id = $mysqli->insert_id;
            foreach ($arrayAccesorios as $index) {
                if (is_int($index)) {
                    $accesorio_id = $index;
                    $sentencia->execute();
                } else {
                    throw new \Exception('Solo permite enteros');
                }
            }
            $mysqli->commit();
        } catch (Exception $ex) {
            echo $ex->getMessage();
            $mysqli->rollback();
        }
        ?>
    </body>
</html>