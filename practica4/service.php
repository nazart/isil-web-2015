<?php


$soap = new SoapClient('http://www.webservicex.net/periodictable.asmx?WSDL');
print_r($soap->GetAtoms());

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

