<?php 

    require_once("database.php");
    $conexion = conexion();

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $genero = $_POST['genero'];
    $fecha_nac = $_POST['fecha_nac'];
    $dni = $_POST['dni'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];

    $query = "INSERT into colaborador(nombre, apellido, email, genero, fecha_nac, dni, telefono, direccion)
    values('$nombre','$apellido','$email','$genero','$fecha_nac','$dni','$telefono', '$direccion')";

    echo $result = mysqli_query($conexion, $query);
?>