<?php
session_start(); //inicia o continua con la sesión
require_once('./config/twigLoad.php');
require_once('./functions.php');

if (!isset($_SESSION['tiempo'])){
  $_SESSION['tiempo']=time();
}
else {
  TiempoEnSesion();
}

$rut=$_SESSION['rut'];
$err_msg=array(
	UPLOAD_ERR_OK=>'Archivo subido correctamente.',
	UPLOAD_ERR_INI_SIZE=>'El tamaño del archivo ha excedido el tamaño indicado en php.ini .',
	UPLOAD_ERR_FORM_SIZE=>'El tamaño del archivo ha excedido el tamaño máximo para este formulario.',
	UPLOAD_ERR_PARTIAL=>'El archivo ha sido subido parcialmente.',
	UPLOAD_ERR_NO_FILE=>'El archivo no existe.',
	UPLOAD_ERR_NO_TMP_DIR=>'El directorio temporal no existe.',
	UPLOAD_ERR_CANT_WRITE=>'No se puede escribir en el disco.',
	UPLOAD_ERR_EXTENSION=>'Error de extensión PHP.'
);
$tipos_permitidos=array('pdf','gz','gzip','zip','rar','tar','targz'); //Extensiones aceptadas
if ($_SERVER['REQUEST_METHOD']=='POST'){
	$fecha=date('Ymd', time());
	$nombre_temp=$_FILES["file_upload"]["tmp_name"];
	$nuevo_nombre=$_FILES["file_upload"]["name"];
	$extension=explode(".", $nuevo_nombre);
	$count=count($extension);
	$count--;
	$nombreArchivoFinal=str_replace(' ','',str_replace(".".$extension[$count],"_".$fecha,$nuevo_nombre).".".$extension[$count]);
	$destino="./uploads/".basename($nombreArchivoFinal);
	$a = in_array($extension[$count], $tipos_permitidos) ? TRUE : FALSE;
	if(!$a){
    $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
    $nombreCompleto=$_SESSION['nombreCompleto'];
    $idTipoUsu=$_SESSION['tipo_usr'];
    $mensaje="Carga no realizada. Tipo de archivo no permitido";
    render('./cargarArchivo.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'mensaje'=>$mensaje,'valMsg'=>'2'));
		exit();
	}elseif (move_uploaded_file($nombre_temp, $destino)) {
    $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
    $nombreCompleto=$_SESSION['nombreCompleto'];
    $idTipoUsu=$_SESSION['tipo_usr'];
    $fecTrx=date("Y-m-d H:i:s");
		require_once('./config/conexion.php');
		$sql="insert into fichero values (null,'$nuevo_nombre','$rut','$fecTrx');";
		if (mysqli_query($conexion,$sql)) {
      $mensaje="Archivo cargado exitosamente.";
      if ($idTipoUsu==1) {
        $query="SELECT fich_id,fich_nombre,fich_fch_trx,per_nombre,per_rut,per_digito_verificador,per_apellido_paterno,per_apellido_materno,tusu_id,tusu_descripcion FROM fichero,persona,tipo_usuario WHERE per_rut=fich_per_rut AND tusu_id=per_tusu_id ORDER BY 1 DESC";
        $historico=$conexion->query($query);
        render('leerArchivos.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$historico->field_count,'filas'=>$historico,'valMsg'=>1,'mensaje'=>'Archivo cargado satisfactoriamente.'));
        mysqli_close($conexion);
      }else {
        $query="SELECT fich_id,fich_nombre,fich_fch_trx,per_nombre,per_rut,per_digito_verificador,per_apellido_paterno,per_apellido_materno,tusu_id,tusu_descripcion FROM fichero,persona,tipo_usuario WHERE per_rut='$idTipoUsu' AND tusu_id=per_tusu_id";
        $historico=$conexion->query($query);
        render('leerArchivos.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'cantFilas'=>$historico->field_count,'filas'=>$historico,'valMsg'=>2,'mensaje'=>'Problemas al cargar el archivo, intentar nuevamente.'));
        mysqli_close($conexion);
      }
		}else{
      $mensaje="Error al grabar en la base de datos. Favor reintentar";
      render('./cargarArchivo.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'mensaje'=>$mensaje,'valMsg'=>'2'));
			mysqli_close($conexion);
		  exit();
		}
	}else{
		$msg=$err_msg[$_FILES['file_upload']['error']];
    render('./cargarArchivo.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'mensaje'=>$msg,'valMsge'=>0));
    exit();
	}
}else {
  $tipoUsuario=strtolower($_SESSION['tipo_usr_desc']);
  $nombreCompleto=$_SESSION['nombreCompleto'];
  $idTipoUsu=$_SESSION['tipo_usr'];
	render('./cargarArchivo.html.twig',array('tipoUsuario'=>$tipoUsuario,'nombreCompleto'=>$nombreCompleto,'idTipoUsu'=>$idTipoUsu,'valMsge'=>0));
}
