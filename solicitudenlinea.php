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
                    <h1>Solicitud en Linea</h1>
                </div>
            </div>
        </div>
    </div>
    <br>

    <!-- Contenido de la pagina -->
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-4">
                <div class="service wow fadeInUp">
                    <div class="service-icon"><i class="fa fa-question"></i></div>
                    <h3>Preguntas de Seguridad</h3>
                    <a class="big-link-1" href="selpreguntas.php">Ver Mas</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="service wow fadeInUp">
                    <div class="service-icon"><i class="fa fa-list-ol"></i></div>
                    <h3>Estados de Cuenta</h3>
                    <a class="big-link-1" href="selcuentas.php">Ver mas</a>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="service wow fadeInUp">
                    <div class="service-icon"><i class="fa fa-th"></i></div>
                    <h3>Tarjetas de Coordenadas</h3>
                    <a class="big-link-1" href="seltarjetaco.php">Ver Mas</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="service wow fadeInUp">
                    <div class="service-icon"><i class="fa fa-envelope"></i></div>
                    <h3>Autenticación OTP</h3>
                    <a class="big-link-1" href="selopt.php">Ver Mas</a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="service wow fadeInUp">
                    <div class="service-icon"><i class="fa fa-check-square-o"></i></div>
                    <h3>Nivel de Aprobaciones</h3>
                    <a class="big-link-1" href="selniveles.php">Ver Mas</a>
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