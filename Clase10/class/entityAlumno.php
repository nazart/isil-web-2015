<?php 
class entityAlumno { 
    /** 
     * Returns Hello World. 
     * 
     * @param int $id
     * @return Array 
     */ 
    public function get($id) { 
        $data[1]=array('nombre'=>'nazart','apellido'=>'jara huaman');
        $data[2]=array('nombre'=>'javier','apellido'=>'jara huaman');
        $data[3]=array('nombre'=>'roberto','apellido'=>'jara huaman');
        $data[4]=array('nombre'=>'carlos','apellido'=>'jara huaman');
		return array($id,$data[$id]);
    }
	
} 
