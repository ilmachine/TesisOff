<?php

require_once('./config/twigLoad.php');
require_once('./config/conexion.php');
require_once('./functions.php');
session_start();

if (!isset($_SESSION['tiempo'])){
  $_SESSION['tiempo']=time();
}
else {
  TiempoEnSesion();
}

$tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
$nombreCompleto=$_SESSION['nombreCompleto'];
$idTipoUsu=$_SESSION['tipo_usr'];
$rut=$_SESSION['rut'];
if ($_SESSION['loggedin']=='si') {
  if ($idTipoUsu == 1) {
    $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
    $nombreCompleto=$_SESSION['nombreCompleto'];
    $idTipoUsu=$_SESSION['tipo_usr'];
    $query="SELECT RegistroOperaciones.idRegistroOperaciones 'idRegOperacion',Fecha 'fechaOperacion', persona.per_rut 'per_rut', persona.per_digito_verificador 'per_dv', persona.per_nombre 'per_nom', persona.per_apellido_paterno 'per_ap_pat', persona.per_apellido_materno 'per_ap_mat', persona.per_tusu_id 'per_id_tip_usu', Operaciones.nombreOperacion 'ope_nombre',tipo_usuario.tusu_descripcion 'tus_desc' FROM RegistroOperaciones,persona,Operaciones,tipo_usuario WHERE RegistroOperaciones.idOperaciones=Operaciones.idOperaciones AND RegistroOperaciones.per_rut=$rut AND persona.per_tusu_id=tipo_usuario.tusu_id";
    $operaciones=$conexion->query($query);
    render('leerOperaciones.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$operaciones->num_rows,'operaciones'=>$operaciones));
  }elseif ($idTipoUsu == 2) {
    $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
    $nombreCompleto=$_SESSION['nombreCompleto'];
    $idTipoUsu=$_SESSION['tipo_usr'];
    $query="SELECT RegistroOperaciones.idRegistroOperaciones 'idRegOperacion',Fecha 'fechaOperacion', persona.per_rut 'per_rut', persona.per_digito_verificador 'per_dv', persona.per_nombre 'per_nom', persona.per_apellido_paterno 'per_ap_pat', persona.per_apellido_materno 'per_ap_mat', persona.per_tusu_id 'per_id_tip_usu', Operaciones.nombreOperacion 'ope_nombre',tipo_usuario.tusu_descripcion 'tus_desc' FROM RegistroOperaciones,persona,Operaciones,tipo_usuario WHERE RegistroOperaciones.idOperaciones=Operaciones.idOperaciones AND RegistroOperaciones.per_rut=persona.per_rut AND persona.per_tusu_id=tipo_usuario.tusu_id";
    $operaciones=$conexion->query($query);
    render('leerOperaciones.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$operaciones->num_rows,'operaciones'=>$operaciones));
  }
}else {
  header('location:./login.php');
}
mysqli_close($conexion);
?>
