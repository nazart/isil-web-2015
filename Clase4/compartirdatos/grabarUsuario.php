<?php
//print_r($_POST);
?>

<h1>Datos del los usuarios grabados</h1>

<div>
    Nombre: <?=$_POST['nombre'];?><br/>
    Apellidos: <?=$_POST['apellidos'];?><br/>
    Direccion: <?=$_POST['direccion'];?><br/>
    Sexo: <?=$_POST['sexo'];?><br/>
    Preferencias: <?php var_dump($_POST['preferencias']);?><br/>
</div>