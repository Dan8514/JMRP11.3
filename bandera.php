<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="utf-8">
    <title>IE. JMRP</title>
    <link rel="icon" href="img/favicon.ico">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="JMRP" name="keywords">
    <meta content="Institución Educativa" name="description">

    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <?php include 'menu.php' ?>
    
    <!-- Inicia carrusel -->
<br>
                        <div class="text-center">
                            <h4 class="font-weight-bold mb-4">NUESTRA BANDERA</h4>
                            <img src="img/bandera.png" alt="NUESTRA BANDERA" width="45%"><br><br>
                            <h3 class="p3">La bandera de nuestra Institución se divide en cuatro fajas horizontales de tamaño igual y los colores tienen el mismo significado que los del Escudo. <br><br>
                                * La primera franja de color amarillo representa la continuidad del saber. <br>
                                * La segunda franja de color esmeralda representa la riqueza ambiental y la paz que se desea seguir construyendo conjuntamente. <br>
                                * La tercera franja de color bermellón representa el amor al aprendizaje y la convivencia armoniosa de la comunidad educativa. <br>
                                * La cuarta franja de color cian representa los valores religiosos, éticos y morales. <br>
                            <br><a href="colegio.php"><img src="img/atras.png" alt="Regresar" width = "35px" height = "35px"></a>
                            </h3>
                             
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