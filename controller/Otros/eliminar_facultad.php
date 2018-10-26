<?php 

require_once('eliminar_facultad.html');

require_once('conexion.php');

if(isset($_POST['eliminarfacultad']))

{
		$id=$_POST['fac_id'];
		

		$sql = "SELECT fac_descripcion FROM facultad WHERE fac_id = '$id'";
		echo $sql;
		$result = $conexion->query($sql);


		

		if ($result->num_rows == 0) { 

		echo "<div ALIGN=center>El codigo no tiene asociada ninguna facultad.</BR></div>";  
		mysqli_close($conexion);   
 		}

        else{
        	
        	$sql = "DELETE FROM facultad WHERE fac_id='$id'";
            //DELETE FROM COMUNA WHERE COM_COD='$cod'
        	if (mysqli_query($conexion,$sql))
        	{
        		echo "<div ALIGN=center>¡Facultad Eliminada Exitosamente!</BR></div>";

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