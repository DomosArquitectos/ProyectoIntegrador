<?php
	include('conexion_be.php');

	$nombres = $_POST["nombres"];
	$apellidos = $_POST["apellidos"];
	$telefono = $_POST["telefono"];
	$direccion= $_POST["direccion"];
	$tservicio = $_POST["servicio"];
	$fechacita = $_POST["fecha_cita"];
	$descripcion = $_POST["descripcion"];
	
    $sql ="INSERT INTO reservacitas 
			(nombres,apellidos,telefono,direccion,
			 servicio,fecha_cita,descripcion)
		VALUES ('$nombres','$apellidos','$telefono','$direccion',
			 '$tservicio','$fechacita','$descripcion')";
	
    $resultado = mysqli_query($conn,$sql);
	if ($resultado)
	{
		echo "Registro Guardado";
		echo "<br>";
        echo "<a href='citas_navbar.php'>Regresar</a>";
	}
	else
	{
		echo "Error al Guardar";
	}
?>