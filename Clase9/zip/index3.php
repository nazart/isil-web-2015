<pre>
<?php

$zip = zip_open("test112.zip");

if ($zip) {
    while ($zip_entry = zip_read($zip)) {
        echo "Nombre:                       " . zip_entry_name($zip_entry) . "\n";
        echo "Tamaño actual del fichero:    " . zip_entry_filesize($zip_entry) . "\n";
        echo "Tamaño comprimido:            " . zip_entry_compressedsize($zip_entry) . "\n";
        echo "Método de compresión:         " . zip_entry_compressionmethod($zip_entry) . "\n";

        if (zip_entry_open($zip, $zip_entry, "r")) {
            echo "Contenido del fichero:\n";
            $buf = zip_entry_read($zip_entry, zip_entry_filesize($zip_entry));
            echo "$buf\n";
            zip_entry_close($zip_entry);
        }
        echo "\n";

    }

    zip_close($zip);

}
?></pre>