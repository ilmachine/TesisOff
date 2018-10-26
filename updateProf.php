<?php
require_once('./config/conexion.php');
require_once('./config/twigLoad.php');
session_start();//inicia o continua con la sesion
require_once('./functions.php');

if (isset($_SESSION['tiempo']))
  $_SESSION['tiempo']=time();
else{
  TiempoEnSesion();
  render('login.html.twig', array());
  exit();
}

if (!isset($_SESSION['loggedin'])) {
  $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
  $nombreCompleto=$_SESSION['nombreCompleto'];
  $idTipoUsu=$_SESSION['tipo_usr'];
  render('updateProf.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu));
}elseif ($_SERVER['REQUEST_METHOD']=='POST'){
  $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
  $nombreCompleto=$_SESSION['nombreCompleto'];
  $idTipoUsu=$_SESSION['tipo_usr'];
  $per_rut=$_POST['per_rut'];
  $per_nombre=$_POST['per_nombre'];
  $per_apellido_paterno=$_POST['per_apellido_paterno'];
  $per_apellido_materno=$_POST['per_apellido_materno'];
  $per_password =$_POST['per_password'];
  $per_car_id=$_POST['selFac'];
  $per_tusu_id=$_POST['selUsu'];
  $consultaPersona="SELECT per_rut FROM persona WHERE per_rut = '$per_rut'";
  $personas=$conexion->query($consultaPersona);
  $consultaCarreras="SELECT car_id,car_descripcion FROM carrera ORDER BY 2 ASC";
  $carreras=$conexion->query($consultaCarreras);
  $consultaTipoUsuarios="SELECT tusu_id,tusu_descripcion FROM tipo_usuario ORDER BY 1 ASC";
  $usuarios=$conexion->query($consultaTipoUsuarios);
  if ($personas->num_rows > 0){
    render('updateProf.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'mensaje'=>'El RUT ya fue ingresado intente nuevamente.','valMsg'=>'2','carreras'=>$carreras,'usuarios'=>$usuarios));
  }else{
    $queryFacultad="SELECT fac_id";
    $queryFacultad=$queryFacultad." FROM facultad WHERE fac_id=$per_car_id";
    $row=$conexion->query($queryFacultad);
    if ($row->num_rows == 0) {
      render('updateProf.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'mensaje'=>'La carrera ingresada no es válida. Por favor, intente nuevamente.','valMsg'=>'2','carreras'=>$carreras,'usuarios'=>$usuarios));
    }else{
      $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
      $nombreCompleto=$_SESSION['nombreCompleto'];
      $idTipoUsu=$_SESSION['tipo_usr'];
      $idFacultad=$row->fetch_array(MYSQLI_ASSOC);
      $idFac=$idFacultad["fac_id"];
      $agregaPersona="INSERT INTO persona ";
      $agregaPersona=$agregaPersona."(per_rut,per_nombre,per_apellido_paterno,per_apellido_materno,per_fac_id,per_carr_id,per_password,per_tusu_id) ";
      $agregaPersona=$agregaPersona."VALUES ( '$per_rut','$per_nombre','$per_apellido_paterno','$per_apellido_materno',$idFac,$per_car_id,'$per_password','$per_tusu_id')";
      if (mysqli_query($conexion,$agregaPersona)){
        $fecTrx=date("Y-m-d H:i:s");
        $username=$_SESSION['rut'];
        $res="insert into RegistroOperaciones (Fecha,idOperaciones,per_rut,per_rut_modificado) values ('$fecTrx',1,$username,$per_rut)";
        $query2=new mysqli($host_db, $user_db, $pass_db, $db_name);
        if (mysqli_query($query2,$res)) {
          $query="SELECT per_estado,per_rut,per_nombre,per_apellido_paterno,per_apellido_materno,per_fac_id,per_carr_id,per_password,per_tusu_id,per_digito_verificador,tusu_descripcion,car_descripcion,fac_descripcion FROM persona,carrera,facultad,tipo_usuario WHERE car_id=per_carr_id AND fac_id=per_fac_id AND tusu_id=per_tusu_id";
          $personas=$conexion->query($query);
          render('leerProfe.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$personas->field_count,'mensaje'=>'Profesor agregado correctamente','valMsg'=>'1','personas'=>$personas));
        }else {
          $query="SELECT per_estado,per_rut,per_nombre,per_apellido_paterno,per_apellido_materno,per_fac_id,per_carr_id,per_password,per_tusu_id,per_digito_verificador,tusu_descripcion,car_descripcion,fac_descripcion FROM persona,carrera,facultad,tipo_usuario WHERE car_id=per_carr_id AND fac_id=per_fac_id AND tusu_id=per_tusu_id";
          $personas=$conexion->query($query);
          render('updateProf.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'mensaje'=>'Error con la base de datos. Favor intentar nuevamente.','valMsg'=>'2','cantFilas'=>$res->field_count,'personas'=>$personas));

        }
        exit();
      }
    }
  }
}else {
  $consultaCarreras="SELECT car_id,car_descripcion FROM carrera ORDER BY 2 ASC";
  $carreras=$conexion->query($consultaCarreras);
  $consultaTipoUsuarios="SELECT tusu_id,tusu_descripcion FROM tipo_usuario ORDER BY 1 ASC";
  $usuarios=$conexion->query($consultaTipoUsuarios);
  mysqli_close($conexion);
  $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
  $nombreCompleto=$_SESSION['nombreCompleto'];
  $idTipoUsu=$_SESSION['tipo_usr'];
  render('updateProf.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'carreras'=>$carreras,'usuarios'=>$usuarios));
}
?>
