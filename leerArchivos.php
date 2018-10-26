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
    $query="SELECT fich_id,fich_nombre,fich_fch_trx,per_nombre,per_rut,per_digito_verificador,per_apellido_paterno,per_apellido_materno,tusu_id,tusu_descripcion FROM fichero,persona,tipo_usuario WHERE per_rut=fich_per_rut AND tusu_id=per_tusu_id ORDER BY 1 DESC";
    $historico=$conexion->query($query);
    render('leerArchivos.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$historico->num_rows,'filas'=>$historico));
  }else {
    $query="SELECT fich_id,fich_nombre,fich_fch_trx,per_nombre,per_rut,per_digito_verificador,per_apellido_paterno,per_apellido_materno,tusu_id,tusu_descripcion FROM fichero,persona,tipo_usuario WHERE per_rut='$idTipoUsu' AND tusu_id=per_tusu_id";
    $historico=$conexion->query($query);
    render('leerArchivos.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$historico->num_rows,'filas'=>$historico));
  }
}else {
  header('location:./homeLogin.php');
}


mysqli_close($conexion);

?>
