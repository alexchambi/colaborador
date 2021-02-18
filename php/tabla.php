
<?php 
	session_start();
	require_once "database.php";
	$conexion=conexion();
 ?>

<div class="row">
	<div class="col-sm-12">
		<table class="table table-sm table-hover table-responsive">
		<div class="boton-registrar">
			<button type="button" class="btn btn-success" data-toggle="modal" data-target="#registroModal">
			<span> Registrar Colaborador <i class="fas fa-user-plus"></span></i>
			</button>
		</div>
			
			<thead class="thead">
				<tr>
					<th scope="col">Codigo</th>
					<th scope="col">Nombre(s)</th>
					<th scope="col">Apellidos</th>
					<th scope="col">Email</th>
					<th scope="col">Genero</th>
					<th scope="col">Fecha de Nacimiento</th>
					<th scope="col">N° DNI</th>
					<th scope="col">Celular</th>
					<th scope="col">Direccion</th>
					<th></th>
				</tr>
			</thead>
			<tbody class="tbody">
				<?php 
					
					$sql="SELECT *from colaborador";
				
					$result=mysqli_query($conexion,$sql);
					while($ver=mysqli_fetch_row($result)){ 

						$datos=$ver[0]."||".
							$ver[1]."||".
							$ver[2]."||".
							$ver[3]."||".
							$ver[4]."||".
							$ver[5]."||".
							$ver[6]."||".
							$ver[7]."||".
							$ver[8];
				?>

				<tr>
					<td><?php echo $ver[0] ?></td>
					<td><?php echo $ver[1] ?></td>
					<td><?php echo $ver[2] ?></td>
					<td><?php echo $ver[3] ?></td>
					<td><?php echo $ver[4] ?></td>
					<td><?php echo $ver[5] ?></td>
					<td><?php echo $ver[6] ?></td>
					<td><?php echo $ver[7] ?></td>
					<td><?php echo $ver[8] ?></td>
					<td>
						<button class="btn btn-sm btn-warning " data-toggle="modal" data-target="#edicionModal" onclick="obtenerdatos('<?php echo $datos ?>')">
						<i class="fas fa-user-edit"></i>
						</button>
						<button class="btn btn-sm btn-danger" 
						onclick="eliminar('<?php echo $ver[0] ?>')">
						<i class="fas fa-trash"></i>
						</button>

					</td>
				</tr>
				<?php 
					}
				?>
			</tbody>
		</table>
	</div>
</div>