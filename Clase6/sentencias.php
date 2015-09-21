<h2>Programaci&oacute;n Procedimental</h2>
<p>
    El servidor MySQL soporta el uso de diferentes capas de transporte para conexiones. 
    Las conexiones usan TCP/IP, sockets de dominio Unix o tuberías con nombre de Windows.

    El nombre del host localhost tiene un significado especial. 
    Está vinculado al uso de sockets de dominio Unix. 
    No es posible abrir una conexión TCP/IP usando como nombre de host localhost, 
    se debe usar 127.0.0.1 en su lugar.
</p>
<pre>
    <?php
    $mysqli = mysqli_connect("127.0.0.1", "root", "", "jcugarte");
    print_r($mysqli);
    echo "\n" . (mysqli_connect_errno());
    echo "\n" . (mysqli_connect_error());
    $resultado = mysqli_query($mysqli, "select * from marca");
    $fila = mysqli_fetch_assoc($resultado);
    print_r($resultado);
    print_r($fila);
    ?>
</pre>
<h2>Programaci&oacute;n Objetos</h2>
<pre>
    <?php
    $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
    if ($mysqli->connect_errno) {
        echo "\nFallo al conectar a MySQL: " . $mysqli->connect_errno; /* numero de error del mysql */
        echo "\nFallo al conectar a MySQL: " . $mysqli->connect_error; /* descripcion del error PHP */
    } else {
        $resultado = $mysqli->query("select * from marca");
        $fila = $resultado->fetch_assoc();
        print_r($mysqli);
        print_r($resultado);
        print_r($fila);
    }
    ?>
</pre>