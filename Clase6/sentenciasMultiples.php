<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h2>Sentencias multiples</h2>
        <pre>
            <?php
            $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
            if ($mysqli->connect_errno) {
                echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            if (!$mysqli->query("DROP TABLE IF EXISTS test") || !$mysqli->query("CREATE TABLE test(id INT)")) {
                echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
            }

            $sql = "SELECT COUNT(*) AS _num FROM test; ";
            $sql.= "INSERT INTO test(id) VALUES (1); ";
            $sql.= "INSERT INTO test(id) VALUES (2); ";
            $sql.= "INSERT INTO test(id) VALUES (3); ";
            $sql.= "SELECT COUNT(*) AS _num FROM test; ";
            $sql.= "SELECT * FROM test; ";

            if (!$mysqli->multi_query($sql)) {
                echo "Falló la multiconsulta: (" . $mysqli->errno . ") " . $mysqli->error;
            }


            do {
                if ($resultado = $mysqli->store_result()) {
                    print_r($resultado->fetch_assoc());
                    $resultado->free();
                }
            } while ($mysqli->more_results() && $mysqli->next_result());
            ?>
more_results verifica que exista mas resultado en un multiquery
next_result prepara el resultado de un multiquery
        </pre>
        <h2>
            Consideraciones de seguridad    
        </h2>
        <pre>
Las funciones de la API mysqli_query() y mysqli_real_query() 
no establecen una bandera de conexión necesaria para activar las multiconsultas en el servidor. 
Se usa una llamada extra a la API para las sentencias múltiples para reducir la verosimilitud 
de los ataques de inyecciones SQL accidentales. 
Un atacante puede intentar añadir sentencias como ; DROP DATABASE mysql o ; SELECT SLEEP(999). 
Si el atacante tiene éxito al añadir SQL a la cadena de sentencias pero no se usa mysqli_multi_query, 
el servidor no ejecutará la segunda sentencia SQL inyectada y maliciosa.

            <?php
            $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
            $resultado = $mysqli->query("SELECT 1; DROP TABLE test");
            if (!$resultado) {
                echo PHP_EOL . "Error al ejecutar la consulta: (" . $mysqli->errno . ") " . $mysqli->error;
            }
            ?>
        </pre>
    </body>
</html>