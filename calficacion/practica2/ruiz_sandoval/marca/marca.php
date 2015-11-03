<?php

require_once 'marca_auto.php';
require_once 'marca.model.php';

// Logica
$alm = new Alumno();
$model = new AlumnoModel();

if(isset($_REQUEST['action']))
{
    switch($_REQUEST['action'])
    {
        case 'actualizar':
            $alm->__SET('marca_id',              $_REQUEST['marca_id']);
            $alm->__SET('marca_nombre',          $_REQUEST['marca_nombre']);
            $alm->__SET('marca_flag_activo',        $_REQUEST['marca_flag_activo']);
            $alm->__SET('marca_fecha_registro',            $_REQUEST['marca_fecha_registro']);
            $alm->__SET('marca_ultima_actualizacion', $_REQUEST['marca_ultima_actualizacion']);

            $model->Actualizar($alm);
            header('Location: index.php');
            break;

        case 'registrar':
            $alm->__SET('marca_nombre',          $_REQUEST['marca_nombre']);
            $alm->__SET('marca_flag_activo',        $_REQUEST['marca_flag_activo']);
            $alm->__SET('marca_fecha_registro',            $_REQUEST['marca_fecha_registro']);
            $alm->__SET('marca_ultima_actualizacion', $_REQUEST['marca_ultima_actualizacion']);

            $model->Registrar($alm);
            header('Location: index.php');
            break;
 case 'eliminar':
            $model->Eliminar($_REQUEST['id']);
            header('Location: index.php');
            break;

        case 'editar':
            $alm = $model->Obtener($_REQUEST['id']);
            break;
    }
}