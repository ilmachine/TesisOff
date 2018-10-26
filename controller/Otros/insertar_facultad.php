<?php 

require_once('insertar_facultad.html');
require_once('conexion.php');

if(isset($_POST['agregarfacultad']))

{
		$id=$_POST['fac_id'];
		$nom=$_POST['fac_descripcion'];

		$sql = "SELECT fac_descripcion FROM facultad WHERE fac_id = '$id'";
		echo $sql;
		$result = $conexion->query($sql);


		

		if ($result->num_rows > 0) { 

		echo "<div ALIGN=center>El codigo ya fue ingresado intente nuevamente.</BR></div>";  
		mysqli_close($conexion);   
 		}

        else{
        	
        	$sql = "INSERT INTO facultad (fac_id, fac_descripcion) VALUES ( '$id', '$nom')";

        	if (mysqli_query($conexion,$sql))
        	{
        		echo "<div ALIGN=center>¡Facultad Agregada Exitosamente!</BR></div>";

        	}
        	else
        	{

        		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        	}


        	//$resultado = $conexion->query($insert);
	


        	mysqli_close($conexion); 

        
    		
    	}
	}



?>