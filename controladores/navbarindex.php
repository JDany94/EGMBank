<nav class="navbar navbar-fixed-top" role="navigation">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="./index.php">Logotipo EGM</a>
		</div>
		<div class="collapse navbar-collapse" id="top-navbar-1">
			<ul class="nav navbar-nav navbar-right">							
				<li>
					<a data-toggle="modal" href="#myModal" ><i class="fa fa-users"></i><br>Registrate</a>
				</li>
				<li>
					<a data-toggle="modal" href="#mModal"><i class="fa fa-user"></i><br>Login</a>
				</li>
			</ul>
		</div>

        <!-- Validaciones -->
        <script type="text/javascript">
            function soloLetras(e) {
                key = e.keyCode || e.which;
                tecla = String.fromCharCode(key).toString();
                letras = " áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ";//Se define todo el abecedario que se quiere que se muestre.
                especiales = [8, 37, 39, 46, 6]; //Es la validación del KeyCodes, que teclas recibe el campo de texto.
                tecla_especial = false
                for(var i in especiales) {
                    if(key == especiales[i]) {
                        tecla_especial = true;
                        break;
                    }
                }
                if(letras.indexOf(tecla) == -1 && !tecla_especial)
                    return false;
            }
        </script>

        <script type="text/javascript">
            function soloNumeros(evt){
                if(window.event){//asignamos el valor de la tecla a keynum
                    keynum = evt.keyCode; //IE
                }
                else{
                 keynum = evt.which; //FF
                } 
                //comprobamos si se encuentra en el rango numérico y que teclas no recibirá.
                if((keynum > 47 && keynum < 58) || keynum == 8 || keynum == 13 || keynum == 6 ){
                    return true;
                }
                else{
                    return false;
                }
            }
        </script>



		<!-- Registro -->
		<div class="container">
    			<div class="container" id="mostrar">
        		<div class="row">
            	<div class="col-md-12">
                <!-- Modal -->
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Registro de nuevo usuario</h4>
                </div>
                <div class="modal-body">
                <form role="form" method="post" action="controladores/alertaregistro.php">
                <div class="form-group">
                <div class="col-md-6">
                <label for="nombre">Nombres</label>
                </div>
                <div class="col-md-6">
                <label for="nombre">Apellidos</label>
                </div>
                <div class="col-md-6">
                <input type="text" class="form-control" name="nomb" title="Ingrese un nombre valido" required onkeypress="return soloLetras(event);"><br>
                </div>
                </div>
                <div class="form-group">
               
                <div class="col-md-6">
                <input type="text" class="form-control" name="apell" title="Ingrese un apellido valido" required onkeypress="return soloLetras(event);"><br>
                </div>
                </div>
                <div class="form-group">
                <div class="col-md-12">
                <label for="nombre">Identificación</label>
                </div>
             
                <div class="col-md-2">
                <select class="form-control" id="sel1" name="idd">
                <option>V</option>
                <option>E</option>
                </select>
                </div>
                <div class="col-md-7">
                <input type="text" class="form-control" name="id" title="Ingrese una identificación valida" required onKeyPress="return soloNumeros(event);">
                </div>
                </div>
                <br>
                <div class="form-group">
                
                <div class="col-md-3">
                <select class="form-control" id="sel1" name="genero" required>
                <option value="" disabled selected>Género</option>
                <option>F</option>
                <option>M</option>
                </select><br>
                </div>
                </div>
                <div class="form-group">
                <label for="direccion">Dirección</label>
                <div class="col-md-12">
                <textarea type="text" class="form-control" rows="2" name="direccion" title="Ingrese una dirección valida" required></textarea><br>
                </div>
                </div>
                <div class="form-group">
                <div class="col-md-6">
                <label for="nombre">Teléfono</label>
                </div>
                <div class="col-md-6">
                <label for="nombre">Usuario</label>
                </div>
                <div class="col-md-6">
                <input type="text" class="form-control" name="tlf" title="Ingrese un número valido" required onKeyPress="return soloNumeros(event);">
                </div>
                <div class="col-md-6">
                <input type="text" class="form-control" name="User" title="Ingrese un usuario valido" required><br>
                </div>
                </div>
                <div class="form-group">
                <div class="col-md-6">
                <label for="nombre">Contraseña</label>
                </div>
                <div class="col-md-6">
                <label for="nombre">Confirmar Contraseña</label>
                </div>
                <div class="col-md-6">
                <input type="password" class="form-control" name="tlf" title="Ingrese una contraseña" required>
                </div>
                <div class="col-md-6">
                <input type="password" class="form-control" name="User" title="Ingrese una contraseña" required><br>
                </div>
                </div>
                <div class="form-group">
                <label for="extramagic">Pregunta Secreta</label>
                <div class="col-md-12">
                <select class="form-control" id="tipo" name="tipo" >
                <option value="2">¿Nombre de su madre?</option>
                <option value="3">¿Nombre de su primera mascota?</option>
                <option value="4">¿Nombre de su abuela?</option>
                </select><br>
                </div>
                </div>
                <div class="form-group">
                <label for="nombre">Respuesta Secreta</label>
                <div class="col-md-12">
                <input type="text" class="form-control" name="Resp" title="Ingrese una respuesta valida" required><br>
                </div>
                </div>

                <button type="submit" class="btn btn-default">Registrarse</button>
                </form>
                </div>

                </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->    
        </div> 

        <!-- Login -->
        <div class="container">
                <div class="container" id="mostrar">
                <div class="row">
                <div class="col-md-12">
                <!-- Modal -->
                <div class="modal fade" id="mModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Login</h4>
                </div>
                <div class="modal-body">
                <form role="form" method="post" action="controladores/loginopt.php">
                <div class="form-group">
                <div class="col-md-6">
                <label for="nombre">Usuario</label>
                </div>
                <div class="col-md-6">
                <label for="nombre">Contraseña</label>
                </div>
                <div class="col-md-6">
                <input type="text" class="form-control" name="usuario" title="Ingrese un usuario valido" required>
                </div>
                </div>
                <div class="form-group">
                <div class="col-md-6">
                <input type="password" class="form-control" name="contra" title="Ingrese una contraseña valida" required><br>
                </div>
                </div>
                <div class="form-group">
                <label for="extramagic">Tipo</label>
                <div class="col-md-12">
                <select class="form-control" id="tipo" name="tipo" >
                <option value="1">Principal</option>
                <option value="2">Administrador</option>
                <option value="3">Secundario</option>
                <option value="4">Interno</option>
                </select><br>
                </div>
                </div>
                <a data-toggle="modal" href="#mmModal" ><i></i>¿Olvido su Contraseña?</a>
                <br><br>

                <button type="submit" class="btn btn-default">Ingresar</button>
                </form>
                </div>

                </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->       
        </div> 

        <!-- Recuperar contraseña -->
        <div class="container">
                <div class="container" id="mostrar">
                <div class="row">
                <div class="col-md-12">
                <!-- Modal -->
                <div class="modal fade" id="mmModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Recuperar Contraseña</h4>
                </div>
                <div class="modal-body">
                <form role="form" method="post" action="controladores/alertacorreo.php" >
                <div class="form-group">
                <label for="extramagic">Pregunta Secreta</label>
                <select class="form-control" id="tipo" name="tipo" >
                <option value="2">¿Nombre de su madre?</option>
                <option value="3">¿Nombre de su primera mascota?</option>
                <option value="4">¿Nombre de su abuela?</option>
                </select>
                </div>
                <div class="form-group">
                <label for="nombre">Respuesta Secreta</label>
                <input type="text" class="form-control" name="Resp" title="Ingrese una respuesta valida" required >
                </div>
                <button type="submit" class="btn btn-default">Enviar contraseña al correo</button>

                </form>

                </div>

                </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->       
        </div>
       
	</div>
</nav>
