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
        
    <!-- Navbar -->        
    <?php include "controladores/navbaruserin.php"; ?>
    <br><br><br><br><br><br><br>

    <!-- Titulo -->
    <div class="page-title-container">
        <div class="container">
            <div class="row">
            <div class="col-md-12"></div>
                <div class="col-sm-12 wow fadeIn">
                    <i class="fa fa-cogs"></i>
                    <h1>Administrar Seguridad</h1>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Contenido de la pagina -->
    <div class="container">
        <div class="row">
        <div class="col-sm-9">
            <div class="page-title-container">
                <div class="container">
                        <div class="col-sm-12">
                            <font color="black" size="3">Usuario:</font>
                            <select>
                            <option>Jose Daniel - JD</option>
                            <option>Jorge Moutinho - JM</option>                            
                            </select>
                        </div><br><br>
                        <div class="col-sm-4"> 
                            <font color="black" size="3">Log In:</font>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <th>Descripción</th>
                                    <th></th>
                                </thead>
                                <tr class="karem">
                                    <td>OTP</td>
                                    <td><input type="checkbox"></td>
                                </tr>
                                <tr class="karem">
                                    <td>Tarjeta de Coordenadas</td>
                                    <td><input type="checkbox"></td>
                                </tr>
                                <tr class="karem">
                                    <td>Preguntas de Seguridad</td>
                                    <td><input type="checkbox"></td>
                                </tr>
                            </table>                    
                        </div>
                        <div class="col-sm-4"> 
                            <font color="black" size="3">Realizar Operaciones:</font>
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <th>Descripción</th>
                                    <th></th>
                                </thead>
                                <tr class="karem">
                                    <td>OTP</td>
                                    <td><input type="checkbox"></td>
                                </tr>
                                <tr class="karem">
                                    <td>Tarjeta de Coordenadas</td>
                                    <td><input type="checkbox"></td>
                                </tr>
                                <tr class="karem">
                                    <td>Preguntas de Seguridad</td>
                                    <td><input type="checkbox"></td>
                                </tr>
                            </table>                    
                        </div>
                        <div class="col-sm-12">
                        <a class="btn btn-default" onclick='alert("Configuración Guardada Exitosamente!")' href="javascript:history.back(-1);">Guardar</a>
                        </div>
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