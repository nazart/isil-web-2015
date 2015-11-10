<?php
require_once realpath(__DIR__.'/API.php');
require_once realpath(__DIR__.'/../class/entityAlumno.php');
class MyAPI extends API
{
	public function __construct($request) {
        parent::__construct($request);
    }

    /**
     * Example of an Endpoint
     */
	protected function alumno($data){
		$id=$data[0];
		$alumno = new entityAlumno();
		if ($this->method == 'GET') {
			$message = '';	
			$data= $alumno->get($id);
            return $this->response($data,$message);
        } else {
            return $this->response(array(),'no acepta el metodo '.$this->method);
        }
		
	}
     protected function example($data) {
		$id=$data[0]; 
		$key=$data[1];
		if(!isset($data[2])){
			return $this->_response('error', 500);
			
		}
		if ($this->method == 'POST') {
			$message = '';	
            return $this->response(array($id,$key),$message);
        } else {
            return $this->response(array(),'no acepta el metodo '.$this->method);
        }
     }
 }