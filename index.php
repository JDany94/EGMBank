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
    <?php include "controladores/navbarindex.php"; ?>
    <br><br><br><br>

    <!-- Carousel -->
    <div class="slider-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1 slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li data-thumb="assets/img/slider/1.jpg">
                                <img src="assets/img/slider/1.jpg">
                            </li>
                            <li data-thumb="assets/img/slider/2.jpg">
                                <img src="assets/img/slider/2.jpg">                   
                            </li>
                            <li data-thumb="assets/img/slider/3.jpg">
                                <img src="assets/img/slider/3.jpg"> 
                            </li>
                            <li data-thumb="assets/img/slider/4.jpg">
                                <img src="assets/img/slider/4.jpg">
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>       

    <!-- Servicios -->
    <div class="services-container">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="service wow fadeInUp">
                        <div class="service-icon"><i class="fa fa-globe"></i></div>
                        <h3>Ubicanos</h3>
                        <p>Visita nuestas sucursales!</p>
                        <a class="big-link-1" href="ubicanos.php">Ver Mapa</a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="service wow fadeInUp">
                        <div class="service-icon"><i class="fa fa-calendar"></i></div>
                        <h3>Horarios</h3>
                        <p>Horario de atención al publico en nuestras sucursales!</p>
                        <a class="big-link-1" href="horarios.php">Ver Calendario</a>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="service wow fadeInDown">
                        <div class="service-icon"><i class="fa fa-question"></i></div>
                        <h3>Preguntas</h3>
                        <p>Preguntas mas frecuentes!</p>
                        <a class="big-link-1" href="preguntas.php">Ver Preguntas</a>
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