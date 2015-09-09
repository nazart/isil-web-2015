<h1>Ver Cookie Creada</h1>
<?php if(isset($_COOKIE['cookiePortal'])): ?>
El valor de la cookie es: "<?=$_COOKIE['cookiePortal'];?>"
<?php else: ?>
No se ha creado ninguna Cookie
<?php endif; ?>
<a href="ejm2.php">Crear cookie</a>

