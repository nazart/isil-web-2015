<?php
require_once 'dompdf/dompdf_config.inc.php';
  $dompdf = new DOMPDF();
  ob_start();
  $datos = array(
      array('nombre'=>'nazart','apellidos'=>'Jara','email'=>'nazartj@gmail.com'),
      array('nombre'=>'nazart','apellidos'=>'Jara','email'=>'nazartj@gmail.com'),
      array('nombre'=>'nazart','apellidos'=>'Jara','email'=>'nazartj@gmail.com'),
      );
  require_once './html/listaAlumnos.php';
  $html = ob_get_clean();
  $dompdf->load_html($html);
  $dompdf->set_paper('A4');
  $dompdf->render();
  $dompdf->stream("dompdf_out.pdf", array("Attachment" => false));
  exit(0);
?>
