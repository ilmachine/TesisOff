<?php
require_once('./config/twigLoad.php');

function TiempoEnSesion(){
  if ((time() - $_SESSION['tiempo']) > 50000) {
    render('./login.html.twig',array('error'=>'Sesión Expirada'));
  }
}

?>
