<?php
// Mantener la lógica de sesión existente
?>
<style>
    /* VARIABLES DE COLOR Y ARMONIZACIÓN */
    :root {
        --primary-blue: #003366; /* Azul profundo institucional */
        --accent-blue: #0056b3;
        --light-bg: #f0f7ff;    /* El azul muy claro de fondo que mencionas */
        --white-glass: rgba(255, 255, 255, 0.95);
        --transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
    }

    /* BARRA SUPERIOR SOCIAL */
    .top-bar {
        background: var(--primary-blue);
        padding: 8px 0;
        font-size: 14px;
    }
    .top-bar a {
        transition: var(--transition);
        opacity: 0.8;
    }
    .top-bar a:hover {
        opacity: 1;
        transform: translateY(-2px);
    }
    .user-badge {
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50px;
        padding: 5px 15px;
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .circulo {
        border-radius: 50%;
        border: 2px solid #fff;
        object-fit: cover;
    }

    /* NAVBAR PRINCIPAL */
    .nav-bar-main {
        background: var(--white-glass) !important;
        backdrop-filter: blur(10px);
        border-bottom: 3px solid var(--primary-blue);
        transition: var(--transition);
    }

    .nav-link {
        color: var(--primary-blue) !important;
        font-weight: 600;
        padding: 25px 15px !important;
        position: relative;
        text-transform: uppercase;
        font-size: 0.9rem;
        letter-spacing: 0.5px;
    }

    /* EFECTO DE SUBRAYADO ANIMADO */
    .nav-link::after {
        content: '';
        position: absolute;
        bottom: 15px;
        left: 50%;
        width: 0;
        height: 2px;
        background: var(--accent-blue);
        transition: var(--transition);
        transform: translateX(-50%);
    }
    .nav-link:hover::after {
        width: 70%;
    }

    /* DROPDOWNS MODERNOS */
    .dropdownz {
        position: relative;
    }
    .dropdownz-content {
        display: block;
        position: absolute;
        top: 100%;
        left: 0;
        min-width: 240px;
        background: #fff;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        border-radius: 0 0 12px 12px;
        opacity: 0;
        visibility: hidden;
        transform: translateY(15px);
        transition: var(--transition);
        padding: 15px 0;
        z-index: 1000;
        border-top: 3px solid var(--accent-blue);
    }
    .dropdownz:hover .dropdownz-content {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }
    .dropdownz-content a {
        display: block;
        padding: 10px 25px;
        color: #444;
        text-decoration: none;
        transition: var(--transition);
        font-size: 14px;
    }
    .dropdownz-content a:hover {
        background: var(--light-bg);
        color: var(--primary-blue);
        padding-left: 35px;
    }

    /* LOGOTIPO */
    .logotipo {
        font-weight: 800;
        color: var(--primary-blue);
        text-shadow: 1px 1px 0px rgba(0,0,0,0.1);
    }

    /* RESPONSIVE */
    @media (max-width: 991.98px) {
        .dropdownz-content {
            position: static;
            opacity: 1;
            visibility: visible;
            transform: none;
            box-shadow: none;
            display: none; /* Se activa con JS en móvil si se desea */
        }
        .nav-link { padding: 10px !important; }
    }
</style>

<div class="container-fluid top-bar d-none d-md-block">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-3" href="https://facebook.com/..." target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="text-white px-3" href="https://instagram.com/..." target="_blank"><i class="fab fa-instagram"></i></a>
                    <a class="text-white px-3" href="https://youtube.com/..." target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="text-white px-3" href="enred.php"><i class="fab fa-battle-net"></i></a>
                </div>
            </div>
            <div class="col-md-6 text-right">
                <?php if($_SESSION["tipo"] == 0): ?>
                    <a class="btn btn-sm btn-outline-light rounded-pill px-4" href="inisesion.php">Iniciar Sesión</a>
                <?php else: ?>
                    <div class="d-inline-flex align-items-center user-badge text-white">
                        <?php if($_SESSION["tipo"] == 1) echo '<a href="admin.php" class="text-white mr-2">Panel</a> | '; ?>
                        <a href="perfil.php" class="text-white mx-2">
                            <?php echo $_SESSION['nom']; ?>
                            <img class="circulo ml-2" src="data:image/jpg;base64,<?php echo base64_encode($_SESSION['foto']); ?>" width="30" height="30">
                        </a>
                        <a class="text-warning ml-2" href="cerrar.php"><b>Salir</b></a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid position-relative p-0 shadow-sm nav-bar-main">
    <div class="container-lg p-0">
        <nav class="navbar navbar-expand-lg navbar-light py-0">
            <a href="index.php" class="navbar-brand d-lg-none">
                <h1 class="m-0 text-primary">IE JMRP</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <!-- Lado Izquierdo -->
                <div class="navbar-nav">
                    <div class="d-none d-lg-block mr-3">
                        <a href="index.php"><img src="img/logopeq2.png" alt="Logo" width="60"></a>
                    </div>
                    <a href="index.php" class="nav-item nav-link">Inicio</a>
                    
                    <div class="dropdownz">
                        <a href="#" class="nav-item nav-link">Colegio <i class="fa fa-angle-down"></i></a>
                        <div class="dropdownz-content">
                            <a href="historia.php">🏫 Historia</a>
                            <a href="c_convivencia.php">❤️ Manual de Convivencia</a>
                            <a href="escudo.php">🛡️ Escudo</a>
                            <a href="bandera.php">🏴 Bandera</a>
                            <a href="himno.php">♪ Himno</a>
                            <a href="c_siee.php">✅ Sistema Evaluación 2026</a>
                        </div>
                    </div>

                    <div class="dropdownz">
                        <a href="#" class="nav-item nav-link">Estudiantes <i class="fa fa-angle-down"></i></a>
                        <div class="dropdownz-content">
                            <a href="https://guiaslajosemiguel2026.weebly.com" target="_blank">📚 Guías Académicas</a>
                            <a href="enred.php">🌐 La Jose en Red</a>
                            <a href="egresados.php">👨‍🎓 Egresados</a>
                        </div>
                    </div>
                </div>

                <!-- Logo Central (Solo Desktop) -->
                <a href="index.php" class="navbar-brand mx-auto d-none d-lg-block">
                    <h1 class="logotipo m-0">IE JMRP</h1>
                </a>

                <!-- Lado Derecho -->
                <div class="navbar-nav">
                    <div class="dropdownz">
                        <a href="noticias.php" class="nav-item nav-link">Actualidad</a>
                        <div class="dropdownz-content">
                            <a href="noticias.php">📰 Noticias</a>
                            <a href="c_circulares.php">📃 Circulares</a>
                            <a href="c_licitaciones.php">📢 Licitaciones</a>
                        </div>
                    </div>
                    <a href="galeria.php" class="nav-item nav-link">Galería</a>
                    <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                    <div class="d-none d-lg-block ml-3">
                        <img src="img/copaescudosf.png" alt="Copa" width="45">
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>

<script>
    // Efecto de scroll para achicar el menú al bajar
    window.addEventListener('scroll', function() {
        const nav = document.querySelector('.nav-bar-main');
        if (window.scrollY > 50) {
            nav.style.padding = '5px 0';
            nav.style.boxShadow = '0 5px 15px rgba(0,0,0,0.1)';
        } else {
            nav.style.padding = '0';
            nav.style.boxShadow = 'none';
        }
    });
</script>