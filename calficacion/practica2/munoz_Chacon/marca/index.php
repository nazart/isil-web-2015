<?php
require_once '/../entity/Marca1.php';
require_once '/../conection/db.php';

// Logica
$marc = new Marca();
$model = new MarcaModel();

if(isset($_REQUEST['action']))
{
	switch($_REQUEST['action'])
	{
		case 'actualizar':
			$marc->__SET('id',              $_REQUEST['id']);
			$marc->__SET('Nombre',          $_REQUEST['Nombre']);
			$marc->__SET('Flag_Activo',        $_REQUEST['Flag_Activo']);
			$marc->__SET('Fecha_Registro',            $_REQUEST['Fecha_Registro']);
			$marc->__SET('Fecha_Actualizacion', $_REQUEST['Fecha_Actualizacion']);
                                
			$model->Actualizar($marc);
			header('Location: index.php');
			break;

		case 'registrar':
			$marc->__SET('Nombre',          $_REQUEST['Nombre']);
			$marc->__SET('Flag_Activo',        $_REQUEST['Flag_Activo']);
			$marc->__SET('Fecha_Registro',            $_REQUEST['Fecha_Registro']);
			$marc->__SET('Fecha_Actualizacion', $_REQUEST['Fecha_Actualizacion']);

			$model->Registrar($marc);
			header('Location: index.php');
			break;

		case 'eliminar':
			$model->Eliminar($_REQUEST['id']);
			header('Location: index.php');
			break;

		case 'editar':
			$marc = $model->Obtener($_REQUEST['id']);
			break;
	}
}

?>

<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Anexsoft</title>
        <link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.5.0/pure-min.css">
	</head>
    <body style="padding:15px;">

        <div class="pure-g">
            <div class="pure-u-1-12">
                
                <form action="?action=<?php echo $marc->id > 0 ? 'actualizar' : 'registrar'; ?>" method="post" class="pure-form pure-form-stacked" style="margin-bottom:30px;">
                    <input type="hidden" name="id" value="<?php echo $marc->__GET('id'); ?>" />
                    
                    <table style="width:500px;">
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <td><input type="text" name="Nombre" value="<?php echo $marc->__GET('Nombre'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Fecha Registro</th>
                            <td><input type="text" name="Fecha_Registro" value="<?php echo $marc->__GET('Fecha_Registro'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Flag Activo</th>
                            <td>
                                <select name="Flag_Activo" style="width:100%;">
                                    <option value="1" <?php echo $marc->__GET('Flag_Activo') == 1 ? 'selected' : ''; ?>>Activo</option>
                                    <option value="2" <?php echo $marc->__GET('Flag_Activo') == 2 ? 'selected' : ''; ?>>Inactivo</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th style="text-align:left;">Fecha Actualizacion</th>
                            <td><input type="text" name="Fecha_Actualizacion" value="<?php echo $marc->__GET('Fecha_Actualizacion'); ?>" style="width:100%;" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <button type="submit" class="pure-button pure-button-primary">Guardar</button>
                            </td>
                        </tr>
                    </table>
                </form>

                <table class="pure-table pure-table-horizontal">
                    <thead>
                        <tr>
                            <th style="text-align:left;">Nombre</th>
                            <th style="text-align:left;">Fecha Registro</th>
                            <th style="text-align:left;">Flag Activo</th>
                            <th style="text-align:left;">Fecha Actualizacion</th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                    <?php foreach($model->Listar() as $r): ?>
                        <tr>
                            <td><?php echo $r->__GET('Nombre'); ?></td>
                            <td><?php echo $r->__GET('Fecha_Registro'); ?></td>
                            <td><?php echo $r->__GET('Flag_Activo') == 1 ? 'A' : 'I'; ?></td>
                            <td><?php echo $r->__GET('Fecha_Actualizacion'); ?></td>
                            <td>
                                <a href="?action=editar&id=<?php echo $r->id; ?>">Editar</a>
                            </td>
                            <td>
                                <a href="?action=eliminar&id=<?php echo $r->id; ?>">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>     
              
            </div>
        </div>

    </body>
</html>
