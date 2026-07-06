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
    <meta content="Institución Educativa" name="keywords">
    <meta content="La Jose en Red" name="description">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css'><link rel="stylesheet" href="./style.css">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
    <?php include 'menu.php'; ?> 
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 90px;">
        <div class="container text-center py-3">
            <h1 class="text-white display-3 mt-lg-3">Nuestro Colegio</h1>
            <div class="d-inline-flex align-items-center text-white">
                  <h3 class="m-0">Yo soy de la Jose Miguel</h3>
                <h2 class="m-0"><i class="fa fa-building px-3 text-white"></i></h2> 
                <h3 class="m-0">La José Miguel es Mía</h3>            
            </div>
            <br><br>
            <button type="button" class="btn btn-success">Gobierno Escolar</button>
            <a href="c_dispositivo.php"><button type="button" class="btn btn-success">Dispositivo Pedagógico</button></a>
            <a href="c_convivencia.php"><button type="button" class="btn btn-success">Manual de Convivencia</button></a>
           <a href="https://guiaslajosemiguel2026.weebly.com" target="_blank"> <button type="button" class="btn btn-success">Guías Académicas</button></a>
        </div>
    </div>
     <!-- Inicio opciones colegio -->
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
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Horizonte Institucional</h5>
                                <p>El integrante de la Comunidad de nuestra Institución Educativa se distigue por su: Compromiso, Responsabilidad, Solidaridad, Respeto y Honestidad.</p>
                                <a href="c_horizonte.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-2.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Nuestra Infraestructura</h5>
                                <p>Contamos con espacios diseñados y adecuados para el correcto desarrollo de las actividades deportivas, académicas y esparcimiento.</p>
                                <a href="c_infraestructura.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-3.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Conoce a Don Jose Miguel</h5>
                                <p>Esta es la oportunidad para conocer la biografía de un ilustre personaje. Un hombre conspicuo y una gran figura histórica en Copacabana, Antioquia.</p>
                                <a href="c_donmiguel.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-4.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Manual de Convivencia</h5>
                                <p>"No somos Humanos por haber nacido humanos, nos hacemos Humanos a medida que nos relacionamos con el otro". <br> Kant.</p>
                                <a href="c_convivencia.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-5.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Dispositivo Pedagogico Institucional</h5>
                                <p>Pedagogía para la comprensión a través del desarrollo de las inteligencias múltiples desde una perspectiva critica.</p>
                                <a href="c_dispositivo.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-6.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Manual de Calidad</h5>
                                <p> "La Educación de Calidad se fundamenta en los cuatro pilares de la Educación para todos: Aprender a conocer, aprender a hacer, aprender a convivir y aprender a ser". <br> Delors et al., 1996. </p>
                                <a href="c_calidad.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-7.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Cultura Institucional</h5>
                                <p> La Cultura Institucional es el conjunto de valores y principios que guian nuestra Institución; No está escrita en grandes tomos, la construimos dia a dia todos los que conformamos esta gran familia Institucional.</p>
                                <a href="c_cultura.php" class="border-bottom border-secondary text-decoration-none text-secondary">Explorar más...</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin opciones -->


    <!-- Inicia carrusel -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative text-center mb-5">Nuestros Simbolos</h1>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                            <a href="bandera.php"><i class="fa fa-3x fa-flag text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">BANDERA</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/bandera.png" alt="NUESTRA BANDERA">
                            <span>Ampliar</span></a>
                             
                        </div>
                        <div class="text-center">
                             <a href="escudo.php">
                            <h4 class="font-weight-light mb-4">ESCUDO</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/logopeq2.png" alt="NUESTRO ESCUDO">
                           <span>Ampliar</span></a>
                        </div>
                        <div class="text-center">
                             <a href="himno.php"><i class="fa fa-3x fa-music text-primary mb-4"></i>
                            <h4 class="font-weight-light mb-4">HIMNO</h4>
                            <img class="img-fluid mx-auto mb-3" src="img/notashimno.png" alt="NUESTRO HIMNO">
                            <span>Letra y Audio</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin carrusel -->
    <?php 
    include 'footer.php' 
    ?>
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>
    <script src="js/main.js"></script>
</body>
</html>