<?php
require_once realpath(__DIR__.'/API.php');

class MyAPI extends API
{
	
	public function __construct($request) {
        parent::__construct($request);
    }

    /**
     * Example of an Endpoint
     */
     protected function example($data) {
		if ($this->method == 'GET') {
			$message = '';	
            return $this->response($data,$message);
        } else {
            return $this->response(array(),'no acepta el metodo '.$this->method);
        }
     }
 }