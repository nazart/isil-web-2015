<h1>Controlar el numero de visitas de un usuarios</h1>
<?php

session_start();

if (empty($_SESSION['cantidadVisitas'])) {
   $_SESSION['cantidadVisitas'] = 1;
} else {
   $_SESSION['cantidadVisitas']++;
}
/*eliminar una variabe sesion*/
//unset($_SESSION);
?>

<p>
El usuario, ha visto esta página <?php echo $_SESSION['cantidadVisitas']; ?> veces.
</p>

<p>
Para continuar, <a href="index.php">Regresar</a>.
</p>