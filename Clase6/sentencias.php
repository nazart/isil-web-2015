<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <h2>Sentencias</h2>
        <pre>
            <?php
            $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
            if ($mysqli->connect_errno) {
                echo "\nFallo al conectar a MySQL: " . $mysqli->connect_errno; /* numero de error del mysql */
                echo "\nFallo al conectar a MySQL: " . $mysqli->connect_error; /* descripcion del error PHP */
            } else {
                if ($mysqli->query("DROP TABLE IF EXISTS test")) {
                    echo 'si la tabla test existe se ha sido eliminada' . PHP_EOL;
                }
                if ($mysqli->query("CREATE TABLE test(id INT)")) {
                    echo 'se ha creado la tabla test' . PHP_EOL;
                }
                if ($mysqli->query("INSERT INTO test(id) VALUES (1)")) {
                    echo 'se ha insertado una fila en test' . PHP_EOL;
                }
            }
            ?>
        </pre>
        mostrando resultados almacenados en buffer
        <pre>
            <?php
            $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
            if ($mysqli->connect_errno) {
                echo "\nFallo al conectar a MySQL: " . $mysqli->connect_errno; /* numero de error del mysql */
                echo "\nFallo al conectar a MySQL: " . $mysqli->connect_error; /* descripcion del error PHP */
            } else {
                if ($mysqli->query("DROP TABLE IF EXISTS test")) {
                    echo 'si la tabla test existe se ha sido eliminada' . PHP_EOL;
                }
                if ($mysqli->query("CREATE TABLE test(id INT)")) {
                    echo 'se ha creado la tabla test' . PHP_EOL;
                }
                if ($mysqli->query("INSERT INTO test(id) VALUES (1), (2), (3)")) {
                    echo 'se ha insertado una fila en test' . PHP_EOL;
                }
                $resultado = $mysqli->query("SELECT id FROM test ORDER BY id ASC");
                echo "Orden inverso...\n";
                for ($num_fila = $resultado->num_rows - 1; $num_fila >= 0; $num_fila--) {
                    $resultado->data_seek($num_fila); /* Salta el puntero a un numero determinado de fila */
                    $fila = $resultado->fetch_assoc();
                    echo " id = " . $fila['id'] . "\n";
                }
                echo "Orden del conjunto de resultados...\n";
                $resultado->data_seek(0);
                while ($fila = $resultado->fetch_assoc()) {
                    echo " id = " . $fila['id'] . "\n";
                }
            }
            ?>
        </pre>
        Mostrando resultados y tipos de cadena

        <pre>
Es posible convertir valores de columnas de tipo integer y float a números de PHP 
estableciendo la opción de conexión <strong>MYSQLI_OPT_INT_AND_FLOAT_NATIVE</strong>, si se esta´utilizando 
la biblioteca <strong>mysqlnd</strong>. Si se establece, la biblioteca mysqlnd comprobará los tipos de columna de los metadatos 
del conjunto de resultados y convertirá las columnas númerocas de SQL a números de PHP, 
si el rango de valores del tipo de datos de PHP lo permite. De esta forma, por ejemplo, 
las columnas INT de SQL son devueltas como enteros.

            <?php
            $mysqli = new mysqli();
            $mysqli->options(MYSQLI_OPT_INT_AND_FLOAT_NATIVE, 1);
            $mysqli->real_connect("127.0.0.1", "root", "", "jcugarte");
            if ($mysqli->connect_errno) {
                echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
            }

            if (!$mysqli->query("DROP TABLE IF EXISTS test") ||
                    !$mysqli->query("CREATE TABLE test(id INT, etiqueta CHAR(1))") ||
                    !$mysqli->query("INSERT INTO test(id, etiqueta) VALUES (1, 'a')")) {
                echo "Falló la creación de la tabla: (" . $mysqli->errno . ") " . $mysqli->error;
            }

            $resultado = $mysqli->query("SELECT id, etiqueta FROM test WHERE id = 1");
            $fila = $resultado->fetch_assoc();
            //echo json_encode($fila);

            printf("id = %s (%s)\n", $fila['id'], gettype($fila['id']));
            printf("etiqueta = %s (%s)\n", $fila['etiqueta'], gettype($fila['etiqueta']));
            ?>
        </pre>

    </body>
</html>