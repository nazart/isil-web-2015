<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

        <h2>Programaci&oacute;n Procedimental</h2>
        <pre>
            <?php
            /* Insertas el host, el usuaruo */
            $mysqli = mysqli_connect("127.0.0.1", "root", "", "jcugarte");
            print_r($mysqli);
            echo "\n" . (mysqli_connect_errno());
            echo "\n" . (mysqli_connect_error());
            ?>
        </pre>
        <h2>Programaci&oacute;n Objetos</h2>
        <pre>
            <?php
            //$mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
            //if ($mysqli->connect_errno) {
             //   echo "\nFallo al conectar a MySQL: " . $mysqli->connect_errno; /* numero de error del mysql */
               // echo "\nFallo al conectar a MySQL: " . $mysqli->connect_error; /* descripcion del error PHP */
            //}
            ?>
        </pre>
    </body>
</html>