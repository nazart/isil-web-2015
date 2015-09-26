<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>

        <h2>Resultados</h2>
        <?php
        $mysqli = new mysqli("127.0.0.1", "root", "", "jcugarte");
        ?>

        <h2>Tipo Array</h2>
        <hr>
        <pre>
    <strong>Por defecto MYSQLI_BOTH</strong>
    <strong>fecth array te devuelve una fila actual asocida con indices</strong>
            <?php
            $resultado = $mysqli->query("select * from marca");
            $datos = $resultado->fetch_array();
            print_r($datos);
            ?>
        </pre>
        <hr>
        <pre>
    <strong>asociado MYSQLI_ASSOC</strong>;
    <strong>fetch_assoc te devuelve una fila actual asocida</strong>
            <?php
            $resultado = $mysqli->query("select * from marca");
            $datos = $resultado->fetch_array(MYSQLI_ASSOC);
            //$datos = $resultado->fetch_assoc();
            print_r($datos);
            ?>
        </pre>
        <hr>
        <pre>
    <strong>sin asociar MYSQLI_NUM;</strong>
    <strong>fetch_row te devuelve una fila actual con indices numericos</strong>
            <?php
            $resultado = $mysqli->query("select * from marca");
            $datos = $resultado->fetch_array(MYSQLI_NUM);
            //$datos = $resultado->fetch_row();
            print_r($datos);
            ?>
        </pre>
        <hr>
        <pre>
    <strong>Recorrer el array</strong>
    recorriendo fila por fila
            <?php
            $resultado = $mysqli->query("select * from marca");
            $datos = $resultado->fetch_assoc();
            print_r($datos);
            $datos = $resultado->fetch_assoc();
            print_r($datos);
            ?>
    mejor lo hago con un while
            <?php
            $resultado = $mysqli->query("select * from marca");
            while ($row = $resultado->fetch_assoc()) {
                //print_r($datos);
                $data[] = $datos;
            }
            print_r($data);
            ?>
        </pre>

        <h2>Tipo Object</h2>
        <hr>
        <pre>
    <strong>fetch_object: Te devuelve un objeto</strong>
            <?php
            $resultado = $mysqli->query("select * from marca");
            $datos = $resultado->fetch_object();
            print_r($datos);
            echo 'id marca: ' . $datos->marca_id . PHP_EOL;
            echo 'nombre marca: ' . $datos->marca_nombre . PHP_EOL;
            ?>
        </pre>
        <hr>
        <pre>
    <strong>fetch_object: Asignando a un objeto</strong>
            <?php

            class Marca {

                private $marca_id;
                private $marca_nombre;
                protected $marca_imagen;
                public $marca_flag_activo;
                private $marca_fecha_registro;
                private $marca_fecha_ultima_actualizacion;

                public function getId() {
                    return $this->marca_id;
                }

                public function getNombre() {
                    return $this->marca_nombre;
                }

                public function autocompletaConCeros() {
                    return str_pad($this->marca_id, 6, "0", STR_PAD_LEFT);
                }

            }

            $resultado = $mysqli->query("select * from marca");
            $datos = $resultado->fetch_object('Marca'); /* El resultado es un objeto instanciado referido con por su nombre */
            print_r($datos);
            echo 'Id Marca: ' . $datos->getId() . PHP_EOL;
            echo 'Nombre Marca: ' . $datos->getNombre() . PHP_EOL;
            echo 'Id Marca Autocompletado: ' . $datos->autocompletaConCeros() . PHP_EOL;
            while ($datos = $resultado->fetch_object('Marca')) {
                echo '<br>';
                echo 'Id Marca: ' . $datos->getId() . PHP_EOL;
                echo 'Nombre Marca: ' . $datos->getNombre() . PHP_EOL;
                echo 'Id Marca Autocompletado: ' . $datos->autocompletaConCeros() . PHP_EOL;
            }
            ?>
        </pre>
    </body>
</html>