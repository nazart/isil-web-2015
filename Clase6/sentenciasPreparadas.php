<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <h2>Sentencias Preparadas</h2>

        <pre>
Me permite ejecutar la sentencia varias veces
            <?php
            $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
            if ($mysqli->connect_errno) {
                echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }
            if (!($sentencia = $mysqli->prepare("INSERT INTO marca(marca_id,marca_nombre,marca_imagen,marca_flag_activo) VALUES (?,?,?,?);"))) {
                echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
            }

            /* Sentencia preparada, etapa 2: vincular y ejecutar */

            $marca_id = 'asd';
            $marca_nombre = 'nombre';
            $marca_imagen = 'marca_imagen';
            $marca_flag_activo = 'asdasda';
            /* Agrega variables a una sentencia preparada como parámetros */
            if (!$sentencia->bind_param("issi", $marca_id, $marca_nombre, $marca_imagen, $marca_flag_activo)) {
                echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
            }
            echo 'ejecutando una vez la consulta';
            if (!$valor = $sentencia->execute()) {
                echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
            } else {
                echo PHP_EOL . 'Inserto una Fila' . PHP_EOL;
            }

            echo 'Ejecutando varias veces la misma consulta' . PHP_EOL;
            foreach (range(1, 3) as $index) {
                $marca_nombre = 'Nombre' . $index;
                if (!$valor = $sentencia->execute()) {
                    echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
                } else {
                    echo PHP_EOL . 'Inserto una Fila' . PHP_EOL;
                }
            }
            print_r($valor);
            ?>
        </pre>
    </body>
</html>