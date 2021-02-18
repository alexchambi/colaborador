<?php

	require_once("database.php");
    $conexion = conexion();

	$cod=$_POST['cod'];
	$nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $fecha_nac = $_POST['fecha_nac'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

	$query="UPDATE colaborador set nombre='$nombre', apellido='$apellido', email='$email', genero='$genero', fecha_nac='$fecha_nac', dni='$dni', telefono='$telefono', direccion='$direccion' where cod='$cod'";
				
	echo $result=mysqli_query($conexion,$query);

 ?>