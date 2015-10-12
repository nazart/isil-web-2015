<?php
class Singleton
{
    // Contenedor Instancia de la clase
    private static $instance = NULL;
   
    // Constructor privado, previene la creaci�n de objetos v�a new
    private function __construct() { }

    // Clone no permitido
    public function __clone() { }

    // M�todo singleton 
    public static function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new Singleton();
        }

        return self::$instance;
    }
}

?>