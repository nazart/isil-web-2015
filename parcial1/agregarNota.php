<?php require_once realpath(__DIR__ . '/app/entity/EntityAlumno.php'); 
$entityAlumno = new EntityAlumno();
if (isset($_GET['id']) && $_GET['id'] != '') {
    $entityAlumno->indentify($_GET['id']);
    $idAlumno = $entityAlumno->getId();
    $notas = $entityAlumno->getNotas();
    $practica1 = $notas['nota_practica_1'];
    $practica2 = $notas['nota_practica_2'];
    $practica3 = $notas['nota_practica_3'];
    $practica4 = $notas['nota_practica_4'];
    $parcial1 = $notas['nota_parcial_1'];
    $examenFinal = $notas['nota_examen_final'];
    $trabajoFinal = $notas['nota_trabajo_final'];
    $resultado = $entityAlumno->calcularNota($practica1, $practica2, $practica3, $practica4, $parcial1, $examenFinal, $trabajoFinal);
}
if (isset($_POST) && !empty($_POST)) {
    $entityAlumno->indentify($_POST['id']);
    $practica1 = $_POST['practica1'];
    $practica2 = $_POST['practica2'];
    $practica3 = $_POST['practica3'];
    $practica4 = $_POST['practica4'];
    $parcial1 = $_POST['parcial1'];
    $examenFinal = $_POST['examenFinal'];
    $trabajoFinal = $_POST['trabajoFinal'];
    $entityAlumno->registrarNota($practica1,$practica2,$practica3,$practica4,$parcial1,$examenFinal,$trabajoFinal);
    header('Location: agregarNota.php?id='.$_POST['id']);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Administrador de Alumnos</title>
    </head>
    <body>
        <h1>Alumno: <?php echo $entityAlumno->getNombre() ?></h1>
        <form method="POST">
            <input type="hidden" value="<?php echo $idAlumno ?>" name="id" id="id">
            <div>
                <label>Practica 1</label>
                <input type="text" name="practica1" id="practica1" value="<?php echo isset($practica1) ? $practica1 : '' ?>">
            </div>

            <div>
                <label>Practica 2</label>
                <input type="text" name="practica2" id="practica2" value="<?php echo isset($practica2) ? $practica2 : '' ?>">
            </div>

            <div>
                <label>Practica 3</label>
                <input type="text" name="practica3" id="practica3" value="<?php echo isset($practica3) ? $practica3 : '' ?>">
            </div>

            <div>
                <label>Practica 4</label>
                <input type="text" name="practica4" id="practica4" value="<?php echo isset($practica4) ? $practica4 : '' ?>">
            </div>
           
            <div>
                <label>Primer Pracial</label>
                <input type="text" name="parcial1" id="parcial1" value="<?php echo isset($parcial1) ? $parcial1 : '' ?>">
            </div>
            
            <div>
                <label>Examen Final</label>
                <input type="text" name="examenFinal" id="examenFinal" value="<?php echo isset($examenFinal) ? $examenFinal : '' ?>">
            </div>

            <div>
                <label>Trabajo Final</label>
                <input type="text" name="trabajoFinal" id="trabajoFinal" value="<?php echo isset($trabajoFinal) ? $trabajoFinal : '' ?>">
            </div>
            <div>
                <label>Total</label>
                <?php echo $resultado; ?>
            </div>

            
            <div>
                <input type="submit" value="registrar"></div>
        </form>
    </body>


</html>