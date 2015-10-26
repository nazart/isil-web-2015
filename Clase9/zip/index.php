<?php
$zip = new ZipArchive();/*creas una nueva instancia*/
$filename = "./zip_por_archivo.zip";/*Defines el nombre del archivo*/

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {/*abre el archivo con el nombre creado y crea uno nuevo*/
    exit("cannot open <$filename>\n");/*en caso de que no encuentre el archivo o el nombre del archivo sale este error*/
}
/*creas un nuevo archivo tipo texto y le agregas el contenido*/
$zip->addFromString("testfilephp.txt" , "#1 Esto es una cadena de prueba añadida como  testfilephp.txt.\n");
/*creas un nuevo archivo tipo texto y le agregas el contenido*/
$zip->addFromString("testfilephp2.txt", "#2 Esto es una cadena de prueba añadida como testfilephp2.txt.\n");
/*Agregas un nuevo archivo existente*/
$zip->addFile("files/registro.txt","files/registro.txt");
echo "numficheros: " . $zip->numFiles . "\n";/*Numeros de archivo que tiene el sip*/
echo "estado:" . $zip->status . "\n";/*Estatus del Zip*/
$zip->close();
?>