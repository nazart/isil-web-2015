<!DOCTYPE html>
<html>
    <head>
        <title>
            Practica 1: pregunta 3 
        </title>
    </head>
    <body>
        <h1>Pregunta 3</h1>
        <h3>
            Dada una cantidad expresada en pies, y otra en metros. Determinar la suma pero convertida a pulgadas, a yardas, a metros y a millas por separado. Considere las siguientes equivalencias:
        </h3>

        <p>
            1 milla = 1609 metros, 1 pulgada = 0.0254 metros, 1 yarda = 3 pies, 1 pie = 12 pulgadas.
            El resultado sería:
            <br>La suma en pulgadas es: …
            <br>La suma en yardas es: …
            <br>La suma en metros es: …
            <br>La suma en millas es: …
        </p>
        <hr>
        <h2>Solucion</h2>
        <p>
            <?php
            $numeroPies =  51;//rand(1, 100);
            $numeroMetros = 88;//rand(1, 100);
            ?>
            <br>El Numero en pies es : <?php echo $numeroPies; ?>
            <br>El Numero en Metros es : <?php echo $numeroMetros; ?>
        </p>
        <?php
        $metro = 1;
        $milla = 1609 * $metro;
        $pulgada = 0.0254 * $metro;
        $pies = 12 * 0.0254 * $metro;
        $yarda = 3 * 12 * 0.0254 * $metro;
        $numeroPies = $numeroPies * $pies;
        $numeroMetros = $numeroMetros * $metro;
        $totalSumaMetros = $numeroMetros + $numeroPies;
        ?>
        <br>La suma total en Metros es :<?php echo $totalSumaMetros; ?>
        <p>
            <br>La suma en pulgadas es: <?php echo $totalSumaMetros/(0.0254) ?>   
            <br>La suma en yardas es: <?php echo $totalSumaMetros/(3 * 12 * 0.0254) ?>   
            <br>La suma en metros es: <?php echo $totalSumaMetros ?>   
            <br>La suma en millas es: <?php echo $totalSumaMetros/(1609) ?>   
        </p>
    </body>
</html>
