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
    <title>IE. JMRP - Innovación 3D</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <link href="img/favicon.ico" rel="icon">

    <!-- Fuentes y Iconos -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Swiper.js CSS (Para el efecto 3D Coverflow) -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <style>
        :root {
            --azul-fondo: #f0f7ff;
            --azul-primario: #004a99;
            --acento: #00a8e8;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--azul-fondo);
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }

        /* --- Swiper 3D Coverflow Styles --- */
        .swiper-section {
            padding: 60px 0 100px 0;
            perspective: 1200px;
        }

        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 80px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 600px; /* Ajustar según preferencia */
            height: 400px;
            filter: blur(2px);
            opacity: 0.5;
            transition: all 0.5s ease;
            border-radius: 15px;
            overflow: hidden;
        }

        /* Slide Activo (Central) */
        .swiper-slide-active {
            filter: blur(0);
            opacity: 1;
            box-shadow: 0 20px 50px rgba(0, 74, 153, 0.3);
        }

        .swiper-slide img {
            display: block;
            width: 100%;
            height: 100%;
            object-fit: cover;
            /* Efecto de Reflejo en la base */
            -webkit-box-reflect: below 2px linear-gradient(transparent, transparent, rgba(0,0,0,0.15));
        }

        /* Texto sobre el slide */
        .slide-content {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            padding: 30px;
            background: linear-gradient(to top, rgba(0,74,153,0.8), transparent);
            color: white;
            opacity: 0;
            transform: translateY(20px);
            transition: 0.5s;
        }

        .swiper-slide-active .slide-content {
            opacity: 1;
            transform: translateY(0);
        }

        /* Controles Personalizados */
        .swiper-button-next, .swiper-button-prev {
            color: var(--azul-primario);
            background: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .swiper-button-next::after, .swiper-button-prev::after { font-size: 18px; font-weight: bold; }

        /* Estilos de Secciones Adicionales */
        .section-header {
            text-align: center;
            margin-bottom: 40px;
        }
        .section-header h1 { font-weight: 700; color: var(--azul-primario); }
        
        .video-card {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
        }
    </style>
</head>

<body>
    <?php include 'menu.php'; ?> 

    <!-- Contenedor del Carrusel 3D -->
    <section class="swiper-section">
        <div class="section-header">
            <h1 class="display-5">Nuestra Institución en Vivo</h1>
            <p class="text-muted">Explora la excelencia académica de la JMRP</p>
        </div>

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Slide 1 -->
                <div class="swiper-slide">
                    <img src="img/carrusel1.jpg" alt="Bienvenidos">
                    <div class="slide-content">
                        <h3>¡Bienvenidos!</h3>
                        <p>Liderazgo y Valores en Copacabana</p>
                        <a href="colegio.php" class="btn btn-sm btn-light">Ver Más</a>
                    </div>
                </div>
                <!-- Slide 2 -->
                <div class="swiper-slide">
                    <img src="img/carousel2.jpg" alt="Convivencia">
                    <div class="slide-content">
                        <h3>Manual de Convivencia</h3>
                        <p>Nuestras políticas de respeto y paz</p>
                        <a href="c_convivencia.php" class="btn btn-sm btn-light">Leer</a>
                    </div>
                </div>
                <!-- Slide 3 -->
                <div class="swiper-slide">
                    <img src="img/carrusel4.jpg" alt="Instalaciones">
                    <div class="slide-content">
                        <h3>Nuestras Sedes</h3>
                        <p>Espacios modernos para tu crecimiento</p>
                        <button class="btn btn-sm btn-light">Galería</button>
                    </div>
                </div>
                <!-- Slide 4 (Duplicados para mejor efecto visual en coverflow) -->
                <div class="swiper-slide">
                    <img src="img/index1.jpg" alt="Historia">
                    <div class="slide-content">
                        <h3>200 Años de Historia</h3>
                        <p>Un legado que trasciende generaciones</p>
                    </div>
                </div>
            </div>
            
            <!-- Complementos Swiper -->
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </section>

    <!-- Carrusel titulares (Mantenido según original) -->
    <?php include 'carruseltitulares.php'; ?>

    <!-- Contenido Institucional -->
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="p-4">
                    <h2 class="fw-bold text-primary mb-4">¿Quiénes somos?</h2>
                    <p class="lead">Somos una institución enfocada en formar integralmente a niños, niñas, jóvenes y adultos.</p>
                    <p>Nuestra propuesta pedagógica posibilita el desarrollo cognitivo y promueve seres humanos capacitados para la vida en sociedad.</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="video-card p-3">
                     <video class="w-100 rounded shadow" controls poster="img/logopeq2.png">
                        <source src="video/presenta.mp4" type="video/mp4">
                    </video>
                    <div class="p-3 text-center">
                        <h4 class="mt-2">Mensaje de la Rectora</h4>
                        <p class="small text-muted">Nydia Londoño Múnera</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Inicialización del Efecto 3D -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            effect: "coverflow",
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: "auto",
            loop: true,
            coverflowEffect: {
                rotate: 40,      // Rotación en eje Y
                stretch: 0,
                depth: 200,      // Profundidad 3D
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
        });
    </script>
</body>
</html>