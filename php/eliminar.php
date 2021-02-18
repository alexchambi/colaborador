
<?php 
	
	require_once("database.php");
    $conexion = conexion();

	$id=$_POST['id'];

	$query = "DELETE from colaborador where cod='$id'";
	echo $result=mysqli_query($conexion,$query);
    
 ?>