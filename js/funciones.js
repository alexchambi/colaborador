
function insertar(nombre,apellido,email,genero,fecha_nac,dni,telefono,direccion){

	cadena="nombre=" + nombre + 
			"&apellido=" + apellido +
			"&email=" + email +
			"&genero=" + genero +
			"&fecha_nac=" + fecha_nac +
			"&dni=" + dni +
			"&telefono=" + telefono +
			"&direccion=" + direccion;

	$.ajax({
		type:"POST",
		url:"php/insertar.php",
		data:cadena,
		success:function(r){
			if(r==1){
				$('#tabla').load('php/tabla.php');

				$('#nombre').val('');
				$('#apellido').val('');
				$('#email').val('');
				$('#genero').val('');
				$('#fecha_nac').val('');
				$('#dni').val('');
				$('#telefono').val('');
				$('#direccion').val('');
				alertify.set('notifier','position', 'top-center');
				alertify.success("Registro Actualizado");
			}else{
				alertify.set('notifier','position', 'top-center');
				alertify.error("Error");
			}
		}
	});
}

function obtenerdatos(datos){

	d=datos.split('||');

	$('#code').val(d[0]);
	$('#nombree').val(d[1]);
	$('#apellidoe').val(d[2]);
	$('#emaile').val(d[3]);
	$('#generoe').val(d[4]);
	$('#fecha_nace').val(d[5]);
	$('#dnie').val(d[6]);
	$('#telefonoe').val(d[7]);
	$('#direccione').val(d[8]);	
}

function editar(){

	cod=$('#code').val();
	nombre=$('#nombree').val();
	apellido=$('#apellidoe').val();
	email=$('#emaile').val();
	genero=$('#generoe').val();
	fecha_nac=$('#fecha_nace').val();
	dni=$('#dnie').val();
	telefono=$('#telefonoe').val();
	direccion=$('#direccione').val();

	cadena= "cod=" + cod +
			"&nombre=" + nombre + 
			"&apellido=" + apellido +
			"&email=" + email +
			"&genero=" + genero +
			"&fecha_nac=" + fecha_nac +
			"&dni=" + dni +
			"&telefono=" + telefono +
			"&direccion=" + direccion;


	$.ajax({
		type:"POST",
		url:"php/editar.php",
		data:cadena,
		success:function(r){
			
			if(r==1){
				$('#tabla').load('php/tabla.php');
				$('#edicionModal').modal('hide');
				alertify.set('notifier','position', 'top-center');
				alertify.success("Registro Actualizado)");
			}else{
				alertify.set('notifier','position', 'top-center');
				alertify.error("Error");
			}
		}
	});
}


function eliminar(id){

	cadena="id=" + id;

		$.ajax({
			type:"POST",
			url:"php/eliminar.php",
			data:cadena,
			success:function(r){
				if(r==1){
					$('#tabla').load('php/tabla.php');
					alertify.set('notifier','position', 'top-center');
					alertify.success("Eliminado");
				}else{
					alertify.set('notifier','position', 'top-center');
					alertify.error("Error");
				}
			}
		});
}