<?php
	/*class  Db{
		private static $conexion=NULL;
		private function __construct (){}

		public static function conectar(){
			$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
			self::$conexion= new PDO('mysql:host=localhost;dbname=WSE','root','Qwer1234',$pdo_options);
			return self::$conexion;
		}		
	} */


$host_db = "localhost";
$user_db = "root";
$pass_db = "gato123";
$db_name = "WSE";
$tbl_name = "persona";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
 die("La conexion falló: " . $conexion->connect_error);
 echo "fallo";
}
?>