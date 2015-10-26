<?php
require_once realpath(__DIR__ . '/../model/ModelCursoAlumno.php');
require_once realpath(__DIR__ . '/../model/ModelAlumno.php');

class EntityMatricula {

    protected $_alumno;
    protected $_cursos;

    function setAlumno($alumno) {
        $this->_alumno = $alumno;
    }

    function setCursos($cusos) {
        $this->_cursos = $cusos;
    }

    function save() {
        foreach ($this->_cursos as $index) {
            $modelCursoAlumno = new ModelCursoAlumno();
            $data['curso_id'] = $index;
            $data['alumno_id'] = $this->_alumno;
            $data['curso_alumno_fecha_registro'] = date('Y-m-d H:i:s');
            $modelCursoAlumno->insertCursoAlumno($data);
        }
    }

    function buscarAlumno($codigo) {
        $modelAlumno = new ModelAlumno();
        $data = $modelAlumno->getAlumnoForCodigo($codigo);
        $this->_alumno = $data['alumno_id'];
        return $data;
    }



}
