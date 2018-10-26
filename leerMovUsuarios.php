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
    $query="SELECT RegistroOperaciones.idRegistroOperaciones 'idRegOperacion',RegistroOperaciones.per_rut_modificado 'rut_modificado',Fecha 'fechaOperacion',PER_AUX.per_nombre 'per_aux_nom',PER_AUX.per_apellido_paterno 'per_aux_ap_pat',PER_AUX.per_apellido_materno 'per_aux_ap_mat',PER_AUX.rut 'per_aux_rut', PER_AUX.dv 'per_aux_dv',persona.per_rut 'per_rut', persona.per_digito_verificador 'per_dv', persona.per_nombre 'per_nom', persona.per_apellido_paterno 'per_ap_pat', persona.per_apellido_materno 'per_ap_mat', persona.per_tusu_id 'per_id_tip_usu', Operaciones.nombreOperacion 'ope_nombre',tipo_usuario.tusu_descripcion 'tus_desc' FROM RegistroOperaciones,(SELECT per_nombre,per_apellido_paterno,per_apellido_materno,persona.per_rut 'rut',persona.per_digito_verificador 'dv' FROM RegistroOperaciones,persona WHERE persona.per_rut=RegistroOperaciones.per_rut_modificado) AS PER_AUX,persona,Operaciones,tipo_usuario WHERE  RegistroOperaciones.idOperaciones IN (1,2,3,4,5) AND Operaciones.idOperaciones=RegistroOperaciones.idOperaciones AND persona.per_rut=RegistroOperaciones.per_rut_modificado AND persona.per_tusu_id=tipo_usuario.tusu_id ORDER BY 1 DESC";
    $operaciones=$conexion->query($query);
    render('leerMovUsuarios.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$operaciones->field_count,'operaciones'=>$operaciones));
  }else {
    render('login.html.twig',array('error'=>'Debe tener permisos de administrador para acceder a este módulo.'));
  }
}else {
  header('location:./homeLogin.php');
}


mysqli_close($conexion);

?>
