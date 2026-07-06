<?php session_start();
if(!$_SESSION){
 $_SESSION["tipo"]=0;}
 include_once 'conex.php';
$objeto = new conex();
$conex = $objeto -> conectar();

$consulta = "SELECT * FROM noticias order by fecha_not DESC";
$resultado = $conex->prepare($consulta);
$resultado->execute();
$noticias=$resultado->fetchAll(PDO::FETCH_ASSOC); 
$titular1=$noticias[0];
$titular2=$noticias[1];
$titular3=$noticias[2];
$titular4=$noticias[3];
$titular5=$noticias[4];
$titular6=$noticias[5];
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IE. JMRP - Innovación Educativa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./style.css">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'menu.php'; ?> 
    <!-- Inicio del carrusel -->
    <div class="container-fluid p-0 mb-5 pb-5">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carrusel1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            
                            <h4 class="text-white text-uppercase mb-md-3">¡ Bienvenidos !</h4>
                            <h1 class="display-3 text-white mb-md-4">Institución Educativa José Miguel de Restrepo y Puerta</h1>
                            <a href="colegio.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver mas</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Manual de convivencia</h4>
                            <h1 class="display-3 text-white mb-md-4">Conoce nuestras políticas</h1>
                            <a href="c_convivencia.php" class="btn btn-primary py-md-3 px-md-5 mt-2">Leer mas</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carrusel4.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                         <h4 class="text-white text-uppercase mb-md-3">¡ La José Miguel es tuya !</h4>
                            <h1 class="display-3 text-white mb-md-4">Conoce nuestras instalaciones</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Ver mas</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n1"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary px-0" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n1"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Fin del carrusel -->
    <!-- Carrusel titulares-->
    <?php include 'carruseltitulares.php'; ?>
    <div class="container-fluid py-1">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <h1 class="section-title position-relative text-center mb-5">Un poco sobre nosotros:</h1>
        
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">¿Quiénes somos?</h4>
                    <p>Somos una institución ubicada en el municipio de Copacabana Antioquia.<br>Nos enfocamos en formar integralmente a niños, niñas, jovenes y adultos mediante una propuesta pedagógica y didáctica que posibilite el desarrollo integral de nuestros estudiantes, impulsando sus procesos cognitivos y promoviendo un ser humano capacitado para afrontar la vida en sociedad.</p>
                  <a href="" class="btn btn-primary mt-2">Leer mas</a>
                </div>
                <div class="col-lg-4" style="min-height: 400px;">
                    <div class="position-relative h-100 rounded overflow-hidden">
                        <img class="position-absolute w-100 h-100" src="img/index1.jpg" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-5">
                    <h4 class="font-weight-bold mb-3">Mas de 200 años</h4>
                    <p>El 23 de marzo de 2021 celebramos 200 años de estar brindando nuestros servicios educativos a la comunidad con el reconocimiento del Senado de la República, la asamblea departamental de Antioquia y la Administración municipal, por la labor educativa en el municipio de Copacabana y con la esperanza de poder seguir brindando el mejor servicio a nuestra comunidad.</p>
                    <a href="" class="btn btn-primary mt-2">Leer mas</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin nosotros -->
    <!-- Video -->
    <div class="container-fluid my-5 py-5 px-0">
        <div class="row bg-primary m-0">
            <div class="col-md-6 px-0" style="min-height: 500px;">
                <div class="position-relative h-100 pl-2">
                    <video  class="position-absolute w-100 h-100" preload="auto" controls poster="img/logopeq2.png">
  <source src="video/presenta.mp4" type="video/mp4">
  <source src="video/presenta.webm" type="video/webm">
Su navegador no soporta el video
</video>
                </div>
            </div>
            <div class="col-md-6 py-5 py-md-0 px-0">
                <div class="h-100 d-flex flex-column align-items-center justify-content-center text-center p-5">
                    <div class="d-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 100px; height: 100px;"><i class="fa fa-video fa-3x" aria-hidden="true" ></i>
                </div>
                        <h3 class="font-weight-bold text-white mt-3 mb-4">Nuestra Rectora</h3>
                        <p class="text-white mb-4">Presentación oficial de nuestra Rectora Nydia Londoño Múnera</p>
                        </h3>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- Fin video -->
    <!-- Video en Modal inicia -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>        
                    <!-- 16:9 aspecto -->
                    <div class="embed-responsive embed-responsive-16by9">
                    <video width="420" height="320" controls>
  <source src="video/presenta.mp4" type="video/mp4">
Su navegador no soporta el video
</video>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video Modal Fin -->
    <?php 
    include 'footer.php' 
    ?>
    <!-- regresar al inicio de la página -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Librarias -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Javascript archivos -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- plantillas Javascript -->
    <script src="js/main.js"></script>
    
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- scripts personalizados con javascript-->
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
</body>

</html>