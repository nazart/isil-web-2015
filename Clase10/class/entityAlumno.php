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
        $data[2]=array('nombre'=>'nazart','apellido'=>'jara huaman');
        $data[3]=array('nombre'=>'nazart','apellido'=>'jara huaman');
        $data[4]=array('nombre'=>'nazart','apellido'=>'jara huaman');
		return $data[$id];
    }
	
} 
