<?php
include_once realpath(__DIR__.'/../conection/db.php');
class entity_marca {
    private $id;
    private $nombre;
    private $flag_act;
    private $fec_reg;
    private $fec_ulti_actu;
    
    public function __construct($datos = array()) {
        $this->setValues($datos);
    }
    
    private function setValues($datos){
        if (is_array($datos) && !empty($datos)) {
            //$this->id = isset($datos['id']) ? $datos['id'] : null;
            $this->nombre = isset($datos['nombre']) ? $datos['nombre'] : null;
            $this->flag_act = isset($datos['flag_act']) ? $datos['flag_act'] : null;
            $this->fec_reg = isset($datos['fec_reg']) ? $datos['fec_reg'] : null;
            $this->fec_ulti_actu = isset($datos['fec_ulti_actu']) ? $datos['fec_ulti_actu'] : null;            
        }
    }
        
   function getMarca($id){
        $conection = new conection_db();
        $data = $conection->sql('Select * from marca where marca_id="'.$id.'"')->fetch();
        $this->id = $data['marca_id'];
        $this->nombre = $data['marca_nombre'];
        $this->flag_act = $data['marca_flag_activo'];
        $this->fec_reg = $data['marca_fecha_registro'];
        $this->fec_ulti_actu = $data['marca_fecha_ultima_actualizacion'];
    }
    function nuevo(){
        $conection = new conection_db();
        $conection->sql('INSERT INTO marca(marca_nombre,marca_flag_activo,marca_fecha_registro,marca_fecha_ultima_actualizacion'
                . ' values("'.$this->nombre.'","'.$this->flag_act.'","'.$this->fec_reg.'","'.$this->fec_ulti_actu.'"');
        
    }
    function editar(){
        $conection = new conection_db();
        $conection->sql('update marca set marca_nombre="'.$this->nombre.'",'
                . 'marca_flag_activo="'.$this->flag_act.'",'
                . 'marca_fecha_registro="'.$this->fec_reg.'",'
                . 'marca_fecha_ultima_actualizacion="'.$this->fec_ulti_actu.'" where marca_id='.$this->id);
    }
    
    function eliminar(){
        $conection = new conection_db();
        $conection->sql('delete from marca where marca_id='.$this->id);
    }
    
    static function listar(){
        $conection = new conection_db();
        return $conection->sql('Select * from marca')->fetchAll();
    }
    
    function getNombre(){
        return $this->nombre;
    }
    
    function getFlag_act(){
        return $this->flag_act;
    }
    function getFec_reg(){
        return $this->fec_reg;
    }
    function getFec_ulti_actu(){
        return $this->fec_ulti_actu;
    }
    
    function setId($id){
        $this->id=$id;
    }
    function setNombre($nombre){
        $this->nombre=$nombre;
    }
    
    function setFlag_act($flag_act){
        $this->flag_act=$flag_act;
    }
    function setFec_reg($fec_reg){
        $this->fec_reg=$fec_reg;
    }
    function setFec_ulti_actu($fec_ulti_actu){
        $this->fec_ulti_actu=$fec_ulti_actu;
    }
    
    
    
}
