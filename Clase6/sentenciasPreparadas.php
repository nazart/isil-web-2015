<h2>Sentencias Preparadas</h2>
<pre>
    <?php
    $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
    if ($mysqli->connect_errno) {
        echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }
    if (!($sentencia = $mysqli->prepare("INSERT INTO marca(marca_id,marca_nombre,marca_imagen,marca_flag_activo) VALUES (?,?,?,?)"))) {
        echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
    }
    /* Sentencia preparada, etapa 2: vincular y ejecutar */
    $marca_id = 'asd';
    $marca_nombre = 'nombre';
    $marca_imagen = 'marca_imagen';
    $marca_flag_activo = 'asdasda';
    if (!$sentencia->bind_param("issi", $marca_id, $marca_nombre, $marca_imagen, $marca_flag_activo)) {
        echo "Falló la vinculación de parámetros: (" . $sentencia->errno . ") " . $sentencia->error;
    }

    if (!$valor = $sentencia->execute()) {
        echo "Falló la ejecución: (" . $sentencia->errno . ") " . $sentencia->error;
    }
    print_r($valor);
    ?>
</pre>