<?php
require_once('./config/conexion.php');
require_once('./config/twigLoad.php');
require_once('./functions.php');
session_start(); //inicia o continua con la sesión

if (!isset($_SESSION['tiempo'])){
  $_SESSION['tiempo']=time();
}
else {
  TiempoEnSesion();
}
if ($_SESSION['loggedin']=='si') {
  $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
  $nombreCompleto=$_SESSION['nombreCompleto'];
  $idTipoUsu=$_SESSION['tipo_usr'];
  if ($idTipoUsu=1) {
    $query="SELECT his_id,persona.per_rut 'per_rut', persona.per_digito_verificador 'per_dv', persona.per_nombre 'per_nom', persona.per_apellido_paterno 'per_ap_pat', persona.per_apellido_materno 'per_ap_mat', persona.per_tusu_id 'per_id_tip_usu',tipo_usuario.tusu_descripcion 'tus_desc',his_fch_txr FROM hist_ini_sesion,persona,tipo_usuario WHERE hist_ini_sesion.his_rut_ini=persona.per_rut AND persona.per_tusu_id=tipo_usuario.tusu_id ORDER BY 1 DESC";
    $operaciones=$conexion->query($query);
    render('leerIniSes.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$operaciones->field_count,'inicios'=>$operaciones));
  }else {
    render('login.html.twig',array('error'=>'Debe tener permisos de administrador para acceder a este módulo.'));
  }
}else {
  header('location:./homeLogin.php');
}


mysqli_close($conexion);

?>
