 <!-- Control de acceso -->
<?php session_start();
if($_SESSION["tipo"]===0 || $_SESSION["tipo"]===2){ 
        echo"<script>alert('Acceso no válido');window.location.href='index.php';</script>";
  exit();}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'head.php' ?>
</head>
<body>  
<header>
    <?php include 'menu.php' ?>
</header>                            

<div id="content-wrapper" class="d-flex flex-column" style="padding: 80px;">
    <!-- Contenedor Principal -->
    <div id="content">
        <!-- Inicio del Contenido -->
        <div class="container-fluid">
            <!-- Encabezado de página --><br>
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <div class="w2">BIENVENID@ <?php echo $_SESSION['nom'];?></div><br>
                <div class="w2">Panel Administrativo</div>
            </div>
            <br>
            <div class="row">
                <!-- Opciones del Dashboard -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="crudnoticias.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Editar</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">NOTICIAS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-newspaper fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-success shadow h-100 py-2">
                        <div class="card-body">
                        <a href="crudcomentarios.php"> <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    Revisión</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">COMENTARIOS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comment fa-2x text-blue-300"></i>
                                </div>
                            </div></a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="crudeventos.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Programación</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">EVENTOS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-calendar fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <a href="crudcategorias.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Creación</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">CATEGORIAS NOTICIAS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-clipboard-list fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Opciones dashboard 2do renglón-->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-dark shadow h-100 py-2">
                        <a href="usuarios.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    Información</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">USUARIOS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-user fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
                
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-dark shadow h-100 py-2">
                        <a href="usuarios.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    Anuncios importantes</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">COMUNICADOS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-comments fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-dark shadow h-100 py-2">
                        <a href="usuarios.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    Información</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">EGRESADOS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-user-graduate fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-dark shadow h-100 py-2">
                        <a href="usuarios.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                    Proyectos</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">ACADÉMICOS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-file fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin contenedor principal -->
    <br><br>
    <br><br>
    <br><br>
</div>
</div>

<a class="scroll-to-top rounded" href="#page-top">
<i class="fas fa-angle-up"></i>
</a>
<?php include 'includes/logout.php' ?>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/jquery/jquery.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="js/demo/chart-area-demo.js"></script>
<script src="js/demo/chart-pie-demo.js"></script>
</body>
</html>