<?php
require_once('./config/conexion.php');
require_once('./config/twigLoad.php');

session_start();//inicia o continua con la sesion
require_once('./functions.php');

if (isset($_SESSION['tiempo'])){
  $_SESSION['tiempo']=time();
}
else{
  TiempoEnSesion();
}
if (!isset($_SESSION['loggedin'])) {
  render('login.html.twig',array());
}elseif ($_SERVER['REQUEST_METHOD']=='GET' && isset($_SESSION['rut']) && $_SESSION['tipo_usr']==1){
  if (isset($_GET['button1'])) {
    $username=$_SESSION['rut'];
    $idMod=$_GET['button1'];
    $q1=$conexion->query("SELECT CASE per_estado WHEN '1' THEN '0' WHEN '0' THEN '1' END as 'Estado' FROM persona WHERE per_rut=$idMod");
    $estadoPersona=$q1->fetch_array(MYSQLI_ASSOC);
    $estadoFinal=$estadoPersona['Estado'];
    $eliminaUsu="UPDATE persona SET per_estado = $estadoFinal WHERE per_rut = $idMod";
    $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
    $nombreCompleto=$_SESSION['nombreCompleto'];
    $idTipoUsu=$_SESSION['tipo_usr'];
    if (mysqli_query($conexion, $eliminaUsu)) {
      $query="SELECT per_estado,per_rut,per_nombre,per_apellido_paterno,per_apellido_materno,per_fac_id,per_carr_id,per_password,per_tusu_id,per_digito_verificador,tusu_descripcion,car_descripcion,fac_descripcion FROM persona,carrera,facultad,tipo_usuario WHERE car_id=per_carr_id AND fac_id=per_fac_id AND tusu_id=per_tusu_id";
      $personas=$conexion->query($query);
      if ($estadoFinal == 0){
        $valMsg=2;
        $fecTrx=date("Y-m-d H:i:s");
        $res=$conexion->query("insert into RegistroOperaciones (Fecha,idOperaciones,per_rut,per_rut_modificado) values ('$fecTrx',4,$username,$idMod)");
        render('leerProfe.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$personas->num_rows,'personas'=>$personas,'mensaje'=>'Usuario desactivado correctamente.','valMsg'=>1));
      }
      elseif ($estadoFinal == 1){
        $valMsg=1;
        $fecTrx=date("Y-m-d H:i:s");
        $res=$conexion->query("insert into RegistroOperaciones (Fecha,idOperaciones,per_rut,per_rut_modificado) values ('$fecTrx',3,$username,$idMod)");
        render('leerProfe.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$personas->num_rows,'personas'=>$personas,'mensaje'=>'Usuario activado correctamente.','valMsg'=>1));
      }
    }else {
      $fecTrx=date("Y-m-d H:i:s");
      $res=$conexion->query("insert into RegistroOperaciones (Fecha,idOperaciones,per_rut,per_rut_modificado) values ('$fecTrx',5,$username,$idMod)");
      render('leerProfe.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$personas->num_rows,'personas'=>$personas,'mensaje'=>'No se pudo realizar la modificación deseada. Favor intentar nuevamente','valMsg'=>2));
    }
  }else {
    $fecTrx=date("Y-m-d H:i:s");
    $res=$conexion->query("insert into RegistroOperaciones (Fecha,idOperaciones,per_rut,per_rut_modificado) values ('$fecTrx',5,$username,$idMod)");
    render('leerProfe.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$personas->num_rows,'personas'=>$personas,'mensaje'=>'Error de comunicación, no se pudo realizar la modificación deseada. Favor intentar nuevamente','valMsg'=>2));
  }
}else {
  render('login.html.twig',array());
}

?>
