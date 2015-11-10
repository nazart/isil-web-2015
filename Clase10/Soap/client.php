<?php
$client=new SoapClient("http://local.clasesisil.com/Clase10/Soap/server.php?wsdl",
		array('cache_wsdl' => WSDL_CACHE_NONE));
$result = $client->deleteAlumno(4,1);
var_dump($result);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

