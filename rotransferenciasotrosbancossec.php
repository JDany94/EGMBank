<!DOCTYPE html>
<html>

<head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EGM Bank</title>     
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css">        
    <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/flexslider/flexslider.css">
    
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/media-queries.css">

    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">    
    <style>
        body
        {
            background-color: #4532D6;
        }
        footer.container-fluid 
        {
            height: auto;
            background-color: white;            
        }
    </style>
</head>

<body>

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
        
    <!-- Navbar -->        
    <?php include "controladores/navbaruserin.php"; ?>
    <br><br><br><br><br><br><br>

    <!-- Titulo -->
    <div class="page-title-container">
        <div class="container">
            <div class="row">
            <div class="col-md-12"></div>
                <div class="col-sm-12 wow fadeIn">
                    <i class="fa fa-bank"></i>
                    <h1>Transferencias otros Bancos</h1>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Contenido de la pagina -->
    <div class="container">
        <div class="row">
        <div class="col-sm-7">
            <div class="page-title-container">
                <div class="container">
                    <div class="row">
                    <form role="form" method="post" action="controladores/alertatransferenciassec.php">
                        <div class="col-sm-3">
                            <font color="black" size="3">Cuenta a Debitar:</font>
                            <select>
                            <option>Ahorro</option>
                            <option>Corriente</option>
                            </select>
                        </div>
                        <div class="col-sm-9">
                            <font color="black" size="3">Numero de cuenta:</font>
                            <input type="text" name="cuenta" required onKeyPress="return soloNumeros(event);">
                        </div>
                        <br><br><br>
                        <div class="col-sm-3">
                            <font color="black" size="3">Banco:</font>
                            <select>
                            <option>Banesco</option>
                            <option>Banco Venezuela</option>
                            <option>Bancaribe</option>
                            </select>
                        </div>
                        <div class="col-sm-9">
                            <font color="black" size="3">Monto:</font>
                            <input type="text" name="monto" required onKeyPress="return soloNumeros(event);">
                            <font color="black" size="4">$</font>
                        </div>
                        <br><br><br>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-10"><font color="black" size="3">Ingrese las Coordenadas:</font><br></div>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-2">
                        <font color="blue" size="3">E4:</font><input type="text" name="e4" required onKeyPress="return soloNumeros(event);">
                        <font color="blue" size="3">G7:</font><input type="text" name="g7" required onKeyPress="return soloNumeros(event);">
                        <br><br>
                        <div class="col-sm-2"></div>
                        <div class="col-sm-3">
                        <button type="submit" class="btn btn-default">Transferir</button>
                        </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>


    <!-- Barra inferior -->
    <br>
    <?php include "controladores/footer.php"; ?>

    <!-- Javascript -->
    <script src="assets/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/js/jquery.backstretch.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/retina-1.1.0.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/flexslider/jquery.flexslider-min.js"></script>
    <script src="assets/js/jflickrfeed.min.js"></script>
    <script src="assets/js/masonry.pkgd.min.js"></script>
    <script src="assets/js/jquery.ui.map.min.js"></script>
    <script src="assets/js/scripts.js"></script>
</body>

</html>