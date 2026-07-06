<?php 
session_start();
if(!$_SESSION){
 $_SESSION["tipo"]=0;
}
include_once 'conex.php';
$objeto = new conex();
$conex = $objeto -> conectar();

$consulta = "SELECT * FROM noticias order by fecha_not DESC";
$resultado = $conex->prepare($consulta);
$resultado->execute();
$noticias=$resultado->fetchAll(PDO::FETCH_ASSOC); 
// Se mantienen las variables por si se usan en carruseltitulares.php
$titular1=$noticias[0] ?? null;
$titular2=$noticias[1] ?? null;
$titular3=$noticias[2] ?? null;
$titular4=$noticias[3] ?? null;
$titular5=$noticias[4] ?? null;
$titular6=$noticias[5] ?? null;
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>IE. JMRP - Innovación Educativa</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <style>
        :root {
            --azul-primario: #004a99;
            --azul-claro: #f0f7ff;
            --acento-celeste: #00a8e8;
            --blanco-puro: #ffffff;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--azul-claro);
            overflow-x: hidden;
        }

        /* --- Estilos Modernos del Carrusel --- */
        .carousel-item {
            height: 85vh;
            min-height: 400px;
            background: #000;
        }

        .carousel-item img {
            object-fit: cover;
            height: 100%;
            filter: brightness(0.7);
            /* Efecto Ken Burns (Zoom lento) */
            animation: kenburns 20s infinite alternate;
        }

        @keyframes kenburns {
            from { transform: scale(1); }
            to { transform: scale(1.15); }
        }

        .carousel-caption {
            bottom: 30%;
            z-index: 10;
            background: rgba(0, 74, 153, 0.4); /* Azul traslúcido */
            backdrop-filter: blur(10px); /* Efecto cristalino */
            padding: 40px;
            border-radius: 20px;
            border-left: 5px solid var(--acento-celeste);
            text-align: left;
            max-width: 700px;
            margin-left: 5%;
        }

        /* Animaciones de texto */
        .carousel-caption h4 {
            animation: fadeInUp 0.8s ease backwards;
            color: var(--acento-celeste);
            font-weight: 600;
            letter-spacing: 2px;
        }

        .carousel-caption h1 {
            animation: fadeInUp 1s ease 0.2s backwards;
            font-weight: 700;
            text-shadow: 2px 2px 10px rgba(0,0,0,0.3);
        }

        .carousel-caption .btn {
            animation: fadeInUp 1s ease 0.4s backwards;
            border-radius: 50px;
            padding: 12px 35px;
            font-weight: 600;
            transition: all 0.3s;
        }

        .btn-primary { background-color: var(--azul-primario); border: none; }
        .btn-primary:hover { background-color: var(--acento-celeste); transform: translateY(-3px); }

        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Controles del carrusel */
        .carousel-control-prev, .carousel-control-next {
            width: 5%;
            opacity: 0.8;
        }

        .control-btn {
            background: var(--azul-primario);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }

        .control-btn:hover { background: var(--acento-celeste); }

        /* --- Ajustes de Sección --- */
        .section-title::after {
            content: '';
            position: absolute;
            width: 60px;
            height: 3px;
            background: var(--acento-celeste);
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
        }

        .video-container {
            box-shadow: 0 15px 35px rgba(0,0,0,0.2);
            border-radius: 15px;
            overflow: hidden;
        }
    </style>
</head>

<body>
    <?php include 'menu.php'; ?> 

    <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/carrusel1.jpg" class="d-block w-100" alt="Bienvenida">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-uppercase">¡Bienvenidos!</h4>
                    <h1 class="display-4">Institución Educativa José Miguel de Restrepo y Puerta</h1>
                    <p class="mb-4">Formando líderes para el futuro en Copacabana.</p>
                    <a href="colegio.php" class="btn btn-primary">Ver Institución</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carousel2.jpg" class="d-block w-100" alt="Convivencia">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-uppercase">Convivencia</h4>
                    <h1 class="display-4">Nuestras Políticas y Valores</h1>
                    <p class="mb-4">Construimos una comunidad basada en el respeto y el diálogo.</p>
                    <a href="c_convivencia.php" class="btn btn-primary">Manual de Convivencia</a>
                </div>
            </div>

            <div class="carousel-item">
                <img src="img/carrusel4.jpg" class="d-block w-100" alt="Instalaciones">
                <div class="carousel-caption d-none d-md-block">
                    <h4 class="text-uppercase">Explora</h4>
                    <h1 class="display-4">Conoce nuestras instalaciones</h1>
                    <p class="mb-4">Espacios diseñados para el aprendizaje y la recreación.</p>
                    <a href="#" class="btn btn-primary">Galería Virtual</a>
                </div>
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <div class="control-btn"><span class="carousel-control-prev-icon"></span></div>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <div class="control-btn"><span class="carousel-control-next-icon"></span></div>
        </button>
    </div>

    <?php include 'carruseltitulares.php'; ?>

    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row justify-content-center text-center mb-5">
                <div class="col-lg-8">
                    <h1 class="section-title position-relative mb-4">Un poco sobre nosotros</h1>
                    <p class="text-muted">Más de dos siglos de historia educativa en Antioquia</p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4 py-3">
                    <div class="card border-0 bg-transparent">
                        <h4 class="font-weight-bold mb-3 text-primary">¿Quiénes somos?</h4>
                        <p>Nos enfocamos en formar integralmente a niños, niñas, jóvenes y adultos mediante una propuesta pedagógica que impulsa procesos cognitivos y sociales.</p>
                        <a href="" class="btn btn-outline-primary mt-2">Leer más</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="video-container">
                        <img class="img-fluid w-100" src="img/index1.jpg" alt="Historia">
                    </div>
                </div>
                <div class="col-lg-4 py-3 text-lg-end">
                    <h4 class="font-weight-bold mb-3 text-primary">Más de 200 años</h4>
                    <p>Celebrados en 2021, con reconocimientos del Senado y la Asamblea por nuestra labor incansable en el municipio de Copacabana.</p>
                    <a href="" class="btn btn-outline-primary mt-2">Nuestra Historia</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid my-5 p-0">
        <div class="row g-0 bg-primary">
            <div class="col-md-6">
                <div class="video-container m-4">
                    <video class="w-100 d-block" controls poster="img/logopeq2.png">
                        <source src="video/presenta.mp4" type="video/mp4">
                        Su navegador no soporta el video.
                    </video>
                </div>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center text-center p-5">
                <div>
                    <div class="bg-white rounded-circle d-inline-flex align-items-center justify-content-center mb-4" style="width: 80px; height: 80px;">
                        <i class="fa fa-video fa-2x text-primary"></i>
                    </div>
                    <h3 class="text-white mb-3">Nuestra Rectora</h3>
                    <p class="text-white opacity-75">Presentación oficial de nuestra Rectora Nydia Londoño Múnera.</p>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>