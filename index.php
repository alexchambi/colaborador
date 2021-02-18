<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Crud Colaborador</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

        <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/default.min.css"/>
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/semantic.min.css"/>
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
  </head>
  <body>

    <nav class="navbar navbar-dark bg-primary">
        <div class="container">       
            <span class="navbar-brand mb-0 h1">COLABORADOR</span>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="titulo">Tabla de Colaboradores</h3>
            </div>
        </div>
        <div id="tabla"></div>
    </div>


    <!-- Modal Registro-->
    <div class="modal fade" id="registroModal"  role="dialog" aria-labelledby="registrotitulo">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registrotitulo">Registrar Colaborador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre(s):</label>
                        <input type="text" class="form-control" id="nombre" placeholder="David">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellidos:</label>
                        <input type="text" class="form-control" id="apellido" placeholder="Mendoza">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="david.mendoza@gmail.com">
                    </div>
                    <div class="form-group">
                        <label for="genero">Genero:</label>
                        <select class="form-control" id="genero">
                            <option>Masculino</option>
                            <option>Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fecha_nac">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fecha_nac" placeholder="Mendoza">
                    </div>
                    <div class="form-group">
                        <label for="dni">Numero de DNI:</label>
                        <input type="text" class="form-control" id="dni" placeholder="70176052">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Numero de Celular:</label>
                        <input type="text" class="form-control" id="telefono" placeholder="933573457">
                    </div>
                    <div class="form-group">
                        <label for="direccion">Direccion:</label>
                        <input type="text" class="form-control" id="direccion" placeholder="Av. El Sol">
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="registrarcolaborador" data-dismiss="modal" class="btn btn-success">Registrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Edicion-->
    <div class="modal fade" id="edicionModal" tabindex="-1" aria-labelledby="ediciontitulo" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ediciontitulo">Editar Colaborador</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="code">Codigo</label>
                        <input type="text" class="form-control" id="code" disabled>
                    </div>

                    <div class="form-group">
                        <label for="nombree">Nombre(s):</label>
                        <input type="text" class="form-control" id="nombree">
                    </div>
                    <div class="form-group">
                        <label for="apellidoe">Apellidos:</label>
                        <input type="text" class="form-control" id="apellidoe">
                    </div>
                    <div class="form-group">
                        <label for="emaile">Email:</label>
                        <input type="email" class="form-control" id="emaile">
                    </div>
                    <div class="form-group">
                        <label for="generoe">Genero:</label>
                        <select class="form-control" id="generoe">
                            <option>Masculino</option>
                            <option>Femenino</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="fecha_nace">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" id="fecha_nace">
                    </div>
                    <div class="form-group">
                        <label for="dnie">Numero de DNI:</label>
                        <input type="text" class="form-control" id="dnie">
                    </div>
                    <div class="form-group">
                        <label for="telefonoe">Numero de Celular:</label>
                        <input type="text" class="form-control" id="telefonoe">
                    </div>
                    <div class="form-group">
                        <label for="direccione">Direccion:</label>
                        <input type="text" class="form-control" id="direccione">
                    </div>
                </div>    
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="button" id="actualizarcolaborador" class="btn btn-warning">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
    <script src="js/funciones.js"></script>

  </body>
</html>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tabla').load('php/tabla.php');
	});
</script>

<script type="text/javascript">
    $(document).ready(function(){
        $('#registrarcolaborador').click(function(){
          nombre=$('#nombre').val();
          apellido=$('#apellido').val();
          email=$('#email').val();
          genero=$('#genero').val();
          fecha_nac=$('#fecha_nac').val();
          dni=$('#dni').val();
          telefono=$('#telefono').val();
          direccion=$('#direccion').val();
            insertar(nombre,apellido,email,genero, fecha_nac, dni, telefono, direccion);
        });



        $('#actualizarcolaborador').click(function(){
          editar();
        });

    });
</script>