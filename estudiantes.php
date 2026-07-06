<?php session_start();
if(!$_SESSION){
 $_SESSION["tipo"]=0;}
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IE. JMRP</title>
    <link rel="icon" href="img/favicon.ico">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="JMRP" name="keywords">
    <meta content="Institución Educativa" name="description">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./style.css">
    <!-- librerias css para carrusel y lightbox -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- hoja de estilos personalizada -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <?php include 'menu.php'; ?> 
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-3">
            <h1 class="text-white display-3 mt-lg-3">Los Alumnos</h1>
            <div class="d-inline-flex align-items-center text-white">
                  <h3 class="m-0">Siempre unidos</h3>
               <h2 class="m-0"><i class="fa fa-graduation-cap px-3 text-white"></i></h2> 
                <h3 class="m-0">fortaleciendo nuestro colegio</h3>
                
            </div><br>
               <a href="c_convivencia.php"><button type="button" class="btn btn-success">Manual de Convivencia</button></a>
                <a href="https://guiaslajosemiguel2026.weebly.com" target="_blank"> <button type="button" class="btn btn-success">Guías Académicas</button></a>
        </div>
    </div>

    <!-- Inicio opciones Estudiantes -->
    <div class="container-fluid py-1">
        <div class="container py-1">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-1.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Gobierno estudiantil</h5>
                                <p>
                                    Personería, Contraloría, Concejo Estudiantil y representantes de grupo. Conozca los estudiantes que participan en todos los estamentos del gobierno escolar.</p>
                                <a href="c_horizonte.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-2.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Estudiantes Destacados</h5>
                                <p>Conoce nuestros talentos académicos, culturales, artísticos, deportivos, entre otros.</p>
                                <a href="c_infraestructura.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-3.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Egresados</h5>
                                <p>
                                    Egresados Destacados que nos representan en diferentes sectores académicos, económicos, políticos y sociales.</p>
                                <a href="c_donmiguel.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-4.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Manual de Convivencia</h5>
                                <p>"Tipificación de las faltas". <br> Kant.</p>
                                <a href="c_convivencia.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-5.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Beneficios Estudiantiles</h5>
                                <p>Tiquete estudiantil, restaurante escolar y otros beneficios.</p>
                                <a href="c_dispositivo.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- fin opciones -->

    <?php 
    include 'footer.php' 
    ?>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>