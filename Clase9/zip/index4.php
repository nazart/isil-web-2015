<?php

$zip = new ZipArchive();
$filename = "./una_carpeta.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}

$a = realpath(__DIR__.'/files/');
$files = new RecursiveIteratorIterator(
    new RecursiveDirectoryIterator($a),
    RecursiveIteratorIterator::LEAVES_ONLY
);
foreach ($files as $name => $file)
{
    // Skip directories (they would be added automatically)
    if (!$file->isDir())
    {
        // Get real and relative path for current file
        $filePath = $file->getRealPath();
        $relativePath = substr($filePath, strlen($a) + 1);
        echo $filePath."\n";
        // Add current file to archive
        $zip->addFile($filePath, $relativePath);
    }
}

echo "numficheros: " . $zip->numFiles . "\n";
echo "estado:" . $zip->status . "\n";
$zip->close();

