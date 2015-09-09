<!DOCTYPE html>
<html>
    <head>
        <title>
            Registro de usuarios
        </title>
    </head>
    <body>
        <h2>Busqueda de usuarios</h2>
        <form method="GET" action="buscarUsuarios.php">
            <label>
                Buscar Usuarios
                <input type="text" name="search" id="search"></label>
            <br>
            <label>Ascendente<input type="radio" checked name="orden" value="asc"></label>
            <label>Descendente<input type="radio" name="orden" value="desc"></label>
            <input type="submit" name="enviar" value="enviar">
        </form>
        <hr>
        <h2>Registro de usuarios</h2>
        <form method="POST" action="grabarUsuario.php">
            <div>
                <label for="nombre"> Nombre:</label>
                <input type="text" name="nombre" id="nombre">
            </div>
            <div>
                <label for="apellidos"> Apellidos:</label>
                <input type="text" name="apellidos" id="apellidos">
            </div>
            <div>
                <label for="direccion"> Direccion:</label>
                <input type="text" name="direccion" id="direccion">
            </div>
            <div>
                <label>Sexo:</label>
                <label> Maculino <input type="radio" value="m" name="sexo" id="sexo1"></label>
                <label> Femenino <input type="radio" value="f" name="sexo" id="sexo2"></label>
            </div>
            <div>
                Preferencias deportivas: 
                <label>Futboll<input type="checkbox" value="f" name="preferencias[]"></label>
                <label>Voley<input type="checkbox" value="v" name="preferencias[]"></label>
                <label>Box<input type="checkbox" value="b" name="preferencias[]"></label>
                <label>Natacion<input type="checkbox" value="n" name="preferencias[]"></label>
            </div>
            <div>
                <input type="submit" name="send" value="Grabar">
            </div>
                
        </form>
    </body>
</html>