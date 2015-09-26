<h2>Procedimientos almacenados</h2>
<p>
    Las bases de datos de MySQL soportan procedimientos almacenados. 
    Un procedimiento almacenado es una subrutina almacenada en el catálogo de la base de datos. 
    Las aplicaciones pueden llamar y ejecutar el procedimiento almacenado. 
    La sentencia de SQL CALL se usa para ejecutar un procedimiento almacenado.

    <strong>Parámetros</strong>
    Los procedimientos almacenados pueden tener parámetros IN, INOUT y OUT, dependiendo de la versión de MySQL. 
    La interfaz mysqli no tiene una noción especial de los diferentes tipos de parámetros.
    Parámetro IN
    Los parámetros de entrada son proporcionados con la sentencia CALL. 
    Asegúrese de que los valores están escapados correctamente.
</p>
<pre>
    <?php
    $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    if (!$mysqli->query("DROP TABLE IF EXISTS test") || !$mysqli->query("CREATE TABLE test(id INT)")) {
        echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    if (!$mysqli->query("DROP PROCEDURE IF EXISTS p") ||
            !$mysqli->query("CREATE PROCEDURE p(IN id_val INT) BEGIN INSERT INTO test(id) VALUES(id_val); END;")) {
        echo "Falló la creación del procedimiento almacenado: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    if (!$mysqli->query("CALL p(1)")) {
        echo "Falló CALL: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    if (!($resultado = $mysqli->query("SELECT id FROM test"))) {
        echo "Falló SELECT: (" . $mysqli->errno . ") " . $mysqli->error;
    }

    print_r($resultado->fetch_assoc());
    ?>
</pre>
<p>
    Usar variables de sesion
</p>
<pre>
    <?php
$mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("DROP PROCEDURE IF EXISTS p") ||
    !$mysqli->query('CREATE PROCEDURE p(OUT msg VARCHAR(50)) BEGIN SELECT "¡Hola!" INTO msg; END;')) {
    echo "Falló la creación del procedimiento almacenado: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->query("SET @msg = ''") || !$mysqli->query("CALL p(@msg)")) {
    echo "Falló CALL: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!($resultado = $mysqli->query("SELECT @msg as _p_out"))) {
    echo "Falló la obtención: (" . $mysqli->errno . ") " . $mysqli->error;
}

$fila = $resultado->fetch_assoc();
echo $fila['_p_out'];
?>
</pre>
 Obtener los resultados de procedimientos almacenados
<pre>
    <?php
$mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
    !$mysqli->query("CREATE TABLE test(id INT)") ||
    !$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)")) {
    echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->query("DROP PROCEDURE IF EXISTS p") ||
    !$mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;')) {
    echo "Falló la creación del procedimiento almacenado: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->multi_query("CALL p()")) {
    echo "Falló CALL: (" . $mysqli->errno . ") " . $mysqli->error;
}

do {
    if ($resultado = $mysqli->store_result()) {
        printf("---\n");
        var_dump($resultado->fetch_all());
        $resultado->free();
    } else {
        if ($mysqli->errno) {
            echo "Store failed: (" . $mysqli->errno . ") " . $mysqli->error;
        }
    }
} while ($mysqli->more_results() && $mysqli->next_result());
?>
</pre>
<h2>
    Procedimientos Almacenados y Sentencias Preparadas
</h2>
<pre>
    <?php
$mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
    !$mysqli->query("CREATE TABLE test(id INT)") ||
    !$mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)")) {
    echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$mysqli->query("DROP PROCEDURE IF EXISTS p") ||
    !$mysqli->query('CREATE PROCEDURE p() READS SQL DATA BEGIN SELECT id FROM test; SELECT id + 1 FROM test; END;')) {
    echo "Falló la creación del procedimiento almacenado: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!($sentencia = $mysqli->prepare("CALL p()"))) {
    echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
}

if (!$sentencia->execute()) {
    echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
}

do {
    if ($resultado = $sentencia->get_result()) {
        printf("---\n");
        var_dump(mysqli_fetch_all($resultado));
        mysqli_free_result($resultado);
    } else {
        if ($sentencia->errno) {
            echo "Store failed: (" . $sentencia->errno . ") " . $sentencia->error;
        }
    }
} while ($sentencia->more_results() && $sentencia->next_result());
?>
</pre>