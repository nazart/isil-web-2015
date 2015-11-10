<?php 
require_once realpath(__DIR__.'/../class/entityAlumno.php');
require_once realpath(__DIR__.'/nusoap/lib/nusoap.php');

/*
 * param $idAlumno int
 * return Array
 */
function getAlumno($idAlumno){
	$entityAlumno= new EntityAlumno();
	return $entityAlumno->get($idAlumno);
}

function deleteAlumno($idAlumno,$user){
	return false;
}
$server = new soap_server();
$server->configureWSDL("Alumno", "urn:alumno");/*nombre del servicio y el namesespace*/
$server->register("getAlumno",/*definicion del metodo*/
    array("idAlumno" => "xsd:int"),/*define el input del metodo y el tipo de dato*/
    array("return" => "xsd:Array"),/*define el resultado de la llamada al metodo y de que tipo es*/
    "urn:alumno",/*define el namesespace de los elementos*/
    "urn:alumno#getAlumno",/*define la accion a realizar*/
    "rpc",/*define el tipo de llamada puede rpc o documento*/
    "encoded",/*Define el valor para el atributo de uso, puede ser encoded o literal*/
    "Mostra la informacion de un alumno por su ID");/*descripcion del elemento*/

$server->register("deleteAlumno",
    array("idAlumno" => "xsd:int","user" => "xsd:int"),
    array("return" => "xsd:bolean"),
    "urn:alumno",
    "urn:alumno#deleteAlumno",
    "rpc",
    "encoded",
    "Eimina a un alumno por su ID");
$server->service(file_get_contents("php://input"));
