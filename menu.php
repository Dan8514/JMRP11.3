<div class="container-fluid bg-primary d-none d-md-block">
    <div class="container p-2">
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
    <!-- INICIO DEL MENÚ -->
    <div class="container-fluid position-relative nav-bar p-0"> 
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 5;">   
            <nav class="navbar navbar-expand-lg bg-white navbar-light shadow p-lg-0">
                <a href="index.php" class="navbar-brand d-block d-lg-none">
                    <h1 class="m-0 display-4 text-primary"><span class="text-secondary">IE JMRP</span></h1>
                
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto">
                        <div class="pt"><a href="index.php"><img src="img/logopeq2.png" alt="JMRP" width="75px" height="75px"></a></div>
                        <a href="index.php" class="nav-item nav-link">Inicio</a>
                    
                    <div class="dropdownz">
                        <a href="colegio.php" class="nav-item nav-link">Colegio <i class="fa fa-angle-down"></i></a>
                        <div class="dropdownz-content">
                            <a href="historia.php"> 🏫 Historia</a><br>
                            <a href="c_convivencia.php"> ❤️ Manual de Convivencia</a><br>
                            <a href="escudo.php"> 🛡️ Escudo</a><br>
                            <a href="bandera.php"> 🏴 Bandera</a><br>
                            <a href="himno.php"> ♪ ♫ Himno</a><br>
                            <a href=""> 👤 Gobierno Escolar</a><br>
                            <a href="c_dispositivo.php"> 📚 Dispositivo Pedagógico</a><br>
                            <a href=""> 📖 Horizonte Institucional</a><br>
                            <a href="c_siee.php"> ✅ Sistema de Evaluación 2026</a>  <br>                             
                            <a href="c_licitaciones.php"> 📢 Licitaciones</a><br>
                        </div>
                    </div>

                    <div class="dropdownz">
                        <a href="estudiantes.php" class="nav-item nav-link">Estudiantes <i class="fa fa-angle-down"></i></a>
                        <div class="dropdownz-content">
                            <a href="https://guiaslajosemiguel2026.weebly.com" target="_blank"> 📚 Guías Académicas</a><br>
                            <a href="enred.php"> 🌐 La Jose en Red</a><br>
                            <a href=""> 👤 Líderes Estudiantiles</a><br>
                            <a href=""> ✍️ Estudiantes Destacados</a><br>
                            <a href=""> 👨‍🎓 Egresados</a><br>
                        </div>
                    </div>
                    </div>
                    <a href="index.php" class="navbar-brand mx-5 d-none d-lg-block">
                        <h1 class="logotipo">IE JMRP</h1>
                    </a>
                    <div class="navbar-nav mr-auto">  
                         <div class="dropdownz">
                        <a href="noticias.php" class="nav-item nav-link">Actualidad <i class="fa fa-angle-down"></i></a>
                        <div class="dropdownz-content">
                            <a href="noticias.php">📰 Noticias</a><br>
                            <a href="c_circulares.php">📃 Circulares</a><br>
                            <a href="c_licitaciones.php">📢 Licitaciones</a><br>
                        </div>
                    </div>
                    <a href="galeria.php" class="nav-item nav-link">Galería</a>
                    <a href="contacto.php" class="nav-item nav-link">Contacto</a>
                        <div class="pt2"><a href="https://copacabana.gov.co/Paginas/Index.aspx" target="_blank"> <img src="img/copaescudosf.png" alt="JMRP" width="65px" height="80px"></a></div>
                    </div>  
            </div>
        </nav>
    </div>
</div>
 <script>
    function mostrarDiv() {
      document.getElementById("subm").removeAttribute("hidden");
    }

    function ocultarDiv() {
      document.getElementById("subm").setAttribute("hidden", "");
    }
    function mostrarDivb() {
      document.getElementById("submb").removeAttribute("hidden");
    }

    function ocultarDivb() {
      document.getElementById("submb").setAttribute("hidden", "");
    }
     function mostrarDivc() {
      document.getElementById("submc").removeAttribute("hidden");
    }

    function ocultarDivc() {
      document.getElementById("submc").setAttribute("hidden", "");
    }
  </script>