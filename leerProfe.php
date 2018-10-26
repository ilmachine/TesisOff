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
  if ($idTipoUsu==1) {
    $query="SELECT per_estado,per_rut,per_nombre,per_apellido_paterno,per_apellido_materno,per_fac_id,per_carr_id,per_password,per_tusu_id,per_digito_verificador,tusu_descripcion,car_descripcion,fac_descripcion FROM persona,carrera,facultad,tipo_usuario WHERE car_id=per_carr_id AND fac_id=per_fac_id AND tusu_id=per_tusu_id";
    $personas=$conexion->query($query);
    render('leerProfe.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$personas->num_rows,'personas'=>$personas));
  }else {
    render('login.html.twig',array('error'=>'Debe tener permisos de administrador para acceder a este módulo.'));
  }
}else {
  header('location:./homeLogin.php');
}


mysqli_close($conexion);

?>
