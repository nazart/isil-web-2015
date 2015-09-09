<h1>Crear Una Cookie</h1>
<?php
setcookie("cookieSimple","valorCookie");
?>
<a href="verCookie.php">Ver cookie creada</a>

<h1>Crear Una Cookie permanente</h1>
<?php
/*Timestamp numero de segundos transcurrido desde 1970*/
setcookie("cookiePermanente","valor",time()+10);
?>
<a href="verCookieExpire.php">Ver cookie creada</a>

<h1>Crear Una Cookie Para una ruta</h1>
<?php
setcookie("cookieRuta","valor",time()+100,"/Clase4/sesiones/ruta/");
?>
<a href="verCookieRuta.php">Ver cookie creada</a>

<h1>Crear Una Cookie Para una Todo el portal</h1>
<?php
setcookie("cookiePortal","valor",time()+10,"/");
?>
<a href="verCookiePortal.php">Ver cookie creada</a>

