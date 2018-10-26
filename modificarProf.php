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

$tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
$nombreCompleto=$_SESSION['nombreCompleto'];
$idTipoUsu=$_SESSION['tipo_usr'];
$username=$_SESSION['rut'];

if (!isset($_SESSION['loggedin'])) {
  render('modificarProf.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu));
}elseif ($_SERVER['REQUEST_METHOD']=='POST' && isset($_SESSION['rut']) && $_SESSION['tipo_usr'] == 1 ){
  $per_rut=$_POST['per_rut'];
  $per_nombre=$_POST['per_nombre'];
  $per_apellido_paterno=$_POST['per_apellido_paterno'];
  $per_apellido_materno=$_POST['per_apellido_materno'];
  $per_password =$_POST['per_password'];
  $per_car_id=$_POST['selFac'];
  $consultaPersona="SELECT per_rut FROM persona WHERE per_rut = '$per_rut'";
  $personas=$conexion->query($consultaPersona);
  if ($personas->field_count !== 1){
    render('modificarProf.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'mensaje'=>'Rut erroneo, favor validar.','valMsg'=>'2'));
  }else{
    $queryFacultad="SELECT fac_id";
    $queryFacultad=$queryFacultad." FROM facultad WHERE fac_id=$per_car_id";
    $row=$conexion->query($queryFacultad);
    if ($row->num_rows == 0) {
      render('modificarProf.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'mensaje'=>'La faculta ingresada no es válida. Por favor, intente nuevamente.','valMsg'=>'2'));
    }else{
      $idFacultad=$row->fetch_array(MYSQLI_ASSOC);
      $idFac=$idFacultad["fac_id"];
      $per_tusu_id=$_POST['selUsu'];
      $actualizaPersona="UPDATE persona ";
      $actualizaPersona=$actualizaPersona."SET per_nombre='$per_nombre' ";
      $actualizaPersona=$actualizaPersona.",per_apellido_paterno='$per_apellido_paterno' ";
      $actualizaPersona=$actualizaPersona.",per_apellido_materno='$per_apellido_materno' ";
      $actualizaPersona=$actualizaPersona.",per_fac_id='$idFac' ";
      $actualizaPersona=$actualizaPersona.",per_password='$per_password' ";
      $actualizaPersona=$actualizaPersona.",per_tusu_id='$per_tusu_id'" ;
      $actualizaPersona=$actualizaPersona.",per_carr_id='$per_car_id' ";
      $actualizaPersona=$actualizaPersona."WHERE per_rut='$per_rut'";
      if (mysqli_query($conexion,$actualizaPersona)){
        $fecTrx=date("Y-m-d H:i:s");
        $res="insert into RegistroOperaciones (Fecha,idOperaciones,per_rut,per_rut_modificado) values ('$fecTrx',2,$username,$per_rut)";
        $query2=new mysqli($host_db, $user_db, $pass_db, $db_name);
        if (mysqli_query($query2,$res)) {
          $query="SELECT per_estado,per_rut,per_nombre,per_apellido_paterno,per_apellido_materno,per_fac_id,per_carr_id,per_password,per_tusu_id,per_digito_verificador,tusu_descripcion,car_descripcion,fac_descripcion FROM persona,carrera,facultad,tipo_usuario WHERE car_id=per_carr_id AND fac_id=per_fac_id AND tusu_id=per_tusu_id";
          $personas=$conexion->query($query);
          render('leerProfe.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$personas->field_count,'personas'=>$personas,'mensaje'=>'Usuario modificado correctamente','valMsg'=>'1'));
        }else{
          render('modificarProf.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'mensaje'=>'Error con la base de datos. Favor intentar nuevamente.','valMsg'=>'2'));
          exit();
        }
      }
    }
  }
}elseif ($_SERVER['REQUEST_METHOD']=='GET' && isset($_SESSION['rut']) && $_SESSION['tipo_usr'] ==1){
  if (isset($_GET['button2'])) {
    $idMod=$_GET['button2'];
    $query="SELECT per_estado,per_rut,per_nombre,per_apellido_paterno,per_apellido_materno,per_fac_id,per_carr_id,per_password,per_tusu_id,per_digito_verificador,tusu_descripcion,car_descripcion,fac_descripcion FROM persona,carrera,facultad,tipo_usuario WHERE per_rut=$idMod AND car_id=per_carr_id AND fac_id=per_fac_id AND tusu_id=per_tusu_id";
    $res=$conexion->query($query);
    $personas=$res->fetch_assoc();
    $consultaCarreras="SELECT car_id,car_descripcion FROM carrera ORDER BY 2 ASC";
    $carreras=$conexion->query($consultaCarreras);
    $consultaTipoUsuarios="SELECT tusu_id,tusu_descripcion FROM tipo_usuario ORDER BY 1 ASC";
    $usuarios=$conexion->query($consultaTipoUsuarios);
    render('modificarProf.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$res->num_rows,'personas'=>$personas,'usuarios'=>$usuarios,'carreras'=>$carreras));
  }else {
    $query="SELECT per_estado,per_rut,per_nombre,per_apellido_paterno,per_apellido_materno,per_fac_id,per_carr_id,per_password,per_tusu_id,per_digito_verificador,tusu_descripcion,car_descripcion,fac_descripcion FROM persona,carrera,facultad,tipo_usuario WHERE car_id=per_carr_id AND fac_id=per_fac_id AND tusu_id=per_tusu_id";
    $personas=$conexion->query($query);
    render('leerProfe.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$personas->num_rows,'personas'=>$personas,'v'=>'Favor intentar nuevamente','valMsg'=>'2'));
  }
}
?>
