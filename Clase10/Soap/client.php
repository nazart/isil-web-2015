<?php
$client=new SoapClient("http://local.clasesisil.com/Clase10/Soap/server.php?wsdl");
$result = $client->getAlumno(array('idAlumno'=>1));
print_r($result);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

