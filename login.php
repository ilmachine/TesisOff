<?php
require_once('./config/conexion.php');
require_once('./config/twigLoad.php');

session_start();//inicia o continua con la sesion
require_once('./functions.php');

if (!isset($_SESSION['tiempo'])){
  $_SESSION['tiempo']=time();
}else {
  TiempoEnSesion();
}
if (isset($_SESSION['loggedin'])) {
  $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
  $nombreCompleto=$_SESSION['nombreCompleto'];
  $idTipoUsu=$_SESSION['tipo_usr'];
  if ($idTipoUsu == 1) {
    $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
    $nombreCompleto=$_SESSION['nombreCompleto'];
    $idTipoUsu=$_SESSION['tipo_usr'];
    $query="SELECT fich_id,fich_nombre,fich_fch_trx,per_nombre,per_rut,per_digito_verificador,per_apellido_paterno,per_apellido_materno,tusu_id,tusu_descripcion FROM fichero,persona,tipo_usuario WHERE per_rut='$idTipoUsu' AND tusu_id=per_tusu_id";
    $historico=$conexion->query($query);
    render('leerArchivos.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'filas'=>$historico,'cantFilas'=>$historico->num_rows));
  }elseif ($idTipoUsu == 2) {
    $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
    $nombreCompleto=$_SESSION['nombreCompleto'];
    $idTipoUsu=$_SESSION['tipo_usr'];
    $query="SELECT fich_id,fich_nombre,fich_fch_trx,per_nombre,per_rut,per_digito_verificador,per_apellido_paterno,per_apellido_materno,tusu_id,tusu_descripcion FROM fichero,persona,tipo_usuario WHERE per_rut=fich_per_rut AND tusu_id=per_tusu_id";
    $historico=$conexion->query($query);
    render('leerArchivos.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'filas'=>$historico,'cantFilas'=>$historico->num_rows));
  }
  render('.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu));
}elseif ($_SERVER['REQUEST_METHOD']=='POST') {
  $username=substr($_POST['username'],0,-1);
  $password=$_POST['password'];
  $dv=substr($_POST['username'],-1); //Dígito verificador
  if (is_numeric($username)){
    $sql="SELECT per_rut,per_password,per_tusu_id,per_nombre,per_apellido_paterno,per_apellido_materno,tusu_descripcion ";
    $sql=$sql."FROM persona,tipo_usuario ";
    $sql=$sql."WHERE per_rut='$username'AND per_digito_verificador='$dv' AND per_tusu_id=tusu_id"; //Fin consulta
    $result = $conexion->query($sql);
    $row = $result->fetch_array(MYSQLI_ASSOC);
    if ($password==$row["per_password"]){
      session_destroy();
      session_start();
      $_SESSION['loggedin'] = "si";
      $_SESSION['rut'] = $username;
      $_SESSION['tiempo'] = time(); //Inicio Sesión
      $_SESSION['tipo_usr_desc']=strtolower($row["tusu_descripcion"]);
      $_SESSION['tipo_usr']=$row["per_tusu_id"];
      $_SESSION['nombreCompleto'] = $row["per_nombre"]." ".$row["per_apellido_paterno"]." ".$row["per_apellido_materno"];
      if ($row["per_tusu_id"]==1 || $row["per_tusu_id"] == 2) {
        $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
        $nombreCompleto=$_SESSION['nombreCompleto'];
        $idTipoUsu=$_SESSION['tipo_usr'];
        $fecTrx=date("Y-m-d H:i:s");
        $res="insert into hist_ini_sesion (his_rut_ini,his_fch_txr) values ($username,'$fecTrx')";
        $query2=new mysqli($host_db, $user_db, $pass_db, $db_name);
        if (mysqli_query($query2,$res)) {
          header('location:./homeLogin.php');
          mysqli_close($query2);
        }else {
          echo "error de nuevo :( ";
          mysqli_close($query2);
        }
      }else {
        render('login.html.twig',array('error'=>'Tipo de usuario no válido. Favor contactar con el administrador del sistema.'));
        session_destroy();
      }
    }else {
      render('login.html.twig',array('error'=>'Usuario/Contraseña no válido. Favor volver a intentar.'));
    }
  }else {
    render('login.html.twig',array('error'=>'Ingresar un usuario válido.'));
  }
}else {
  render('login.html.twig',array());
}
mysqli_close($conexion);

// $username=substr($_POST['username'],0,-1);
// $password=$_POST['password'];
// $dv=substr($_POST['username'],-1); //Dígito verificador
// if ($_SESSION['loggedin']=="si") {
//   $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
//   $nombreCompleto=$_SESSION['nombreCompleto'];
//   render('pruebacpp.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto));
// }else {
//   if(!is_numeric($username)){ //validación Rut de cara Servidor
//       $sql="SELECT per_rut,per_password,per_tusu_id,per_nombre,per_apellido_paterno,per_apellido_materno,tusu_descripcion ";
//       $sql=$sql."FROM persona,tipo_usuario ";
//       $sql=$sql."WHERE per_rut='$username'AND per_digito_verificador='$dv' AND per_tusu_id=tusu_id"; //Fin consulta
//       $result = $conexion->query($sql);
//       $row = $result->fetch_array(MYSQLI_ASSOC);
//       if ($password==$row["per_password"]){
//   		session_start();
//           $_SESSION['loggedin'] = "si";
//           $_SESSION['rut'] = $username;
//           $_SESSION['start'] = time(); //Inicio Sesión
//           $_SESSION['tipo_usr_desc']=strtolower($row["tusu_descripcion"]);
//           $_SESSION['tipo_usr']=$row["tusu_id"];
//           $_SESSION['expire'] = $_SESSION['start'] + (10 * 60); //se debería expirar por inactividad...
//           $_SESSION['nombreCompleto'] = $row["per_nombre"]." ".$row["per_apellido_paterno"]." ".$row["per_apellido_materno"];
//           if ($row["per_tusu_id"]==1 || $row["per_tusu_id"] == 2) {
//             $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
//             $nombreCompleto=$_SESSION['nombreCompleto'];
//             render('pruebacpp.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto));
//           }
//       }
//       else {
//           echo "<br><a href='.//login.html'>Volver a Intentarlo</a>";
//       }
//       mysqli_close($conexion);
//   }
//   else{
//     echo "Nombre de usuario no válido, favor intente nuevamente", PHP_EOL;
//   }
// }
?>
