<?php 
session_start(); 
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

$consulta1 = "SELECT * FROM noticias where id_cat = 1 order by fecha_not DESC";
$resultado1 = $conex->prepare($consulta1);
$resultado1->execute();
$noticias1=$resultado1->fetchAll(PDO::FETCH_ASSOC);

$consulta2 = "SELECT * FROM noticias where id_cat = 2 order by fecha_not DESC";
$resultado2 = $conex->prepare($consulta2);
$resultado2->execute();
$noticias2=$resultado2->fetchAll(PDO::FETCH_ASSOC);

$consulta3 = "SELECT * FROM noticias where id_cat = 3 order by fecha_not DESC";
$resultado3 = $conex->prepare($consulta3);
$resultado3->execute();
$noticias3=$resultado3->fetchAll(PDO::FETCH_ASSOC);

$consulta4 = "SELECT * FROM noticias where id_cat = 4 order by fecha_not DESC";
$resultado4 = $conex->prepare($consulta4);
$resultado4->execute();
$noticias4=$resultado4->fetchAll(PDO::FETCH_ASSOC);

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
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

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
    <!-- Navbar End -->


    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid page-header" style="margin-bottom: 5px;">
        <div class="container text-center py-3">
            <h1 class="text-white display-3 mt-lg-3">Noticias para hoy: <?php echo date("d-m-Y");   ?></h1>
            <div class="d-inline-flex align-items-center text-white">
                <h3 class="m-0">Infórmate</h3>
                <h2 class="m-0"><i class="fa fa-newspaper px-3"></i></h2>
                <h3 class="m-0">Ponte al día</h3>
            </div>
        </div>
    </div>
    <!-- Header End -->
 <?php  if($_SESSION["tipo"]==1){?>
                <div class="card border-left-primary shadow h-100 py-1">
                        <a href="vernoticias.php"><div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-1">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Ver todas las</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">NOTICIAS</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-newspaper fa-2x text-blue-300"></i>
                                </div>
                            </div>
                        </div></a>
                    </div>
                  <?php  } ?> 
    <?php include 'carruseltitulares.php'; ?>
    <!-- Noticias Deportes -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Deportes</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia1=$noticias1[0]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia1['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h3 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia1["titulo"]; ?></b></h3>
                                <p><?php echo $noticia1["descripcion"]; ?></p>
                                <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia1['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia1=$noticias1[1]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia1['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h3 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia1["titulo"]; ?></b></h3>
                                <p><?php echo $noticia1["descripcion"]; ?></p>
                               <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia1['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia1=$noticias1[2]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia1['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h3 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia1["titulo"];?></b></h3>
                                <p><?php echo $noticia1["descripcion"]; ?></p>
                                <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia1['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia1=$noticias1[3]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia1['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h3 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia1["titulo"]; ?></b></h3>
                                <p><?php echo $noticia1["descripcion"]; ?></p>
                                    <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia1['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia1=$noticias1[4]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia1['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h3 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia1["titulo"]; ?></b></h3>
                                <p><?php echo $noticia1["descripcion"]; ?></p>
                                 <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia1['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Deporte Fin -->

    <!-- Arte y Cultura -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Arte y Cultura</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia2=$noticias2[0]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia2['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia2["titulo"]; ?></b></h5>
                                <p><?php echo $noticia2["descripcion"]; ?></p>
                                 <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia2['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia2=$noticias2[1]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia2['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia2["titulo"]; ?></b></h5>
                                <p><?php echo $noticia2["descripcion"]; ?></p>
                                       <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia2['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia2=$noticias2[2]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia2['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia2["titulo"];?></b></h5>
                                <p><?php echo $noticia2["descripcion"]; ?></p>
                                       <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia2['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia2=$noticias2[3]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia2['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia2["titulo"]; ?></b></h5>
                                <p><?php echo $noticia2["descripcion"]; ?></p>
                                      <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia2['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia2=$noticias2[4]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia2['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia2["titulo"]; ?></b></h5>
                                <p><?php echo $noticia2["descripcion"]; ?></p>
                                       <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia2['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Arte Y Cultura Fin -->

    <!-- Academicos -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Académicas</h1></h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                       <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia3=$noticias3[0]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia3['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia3["titulo"]; ?></b></h5>
                                <p><?php echo $noticia3["descripcion"]; ?></p>
                                       <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia3['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia3=$noticias3[1]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia3['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia3["titulo"]; ?></b></h5>
                                <p><?php echo $noticia3["descripcion"]; ?></p>
                                             <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia3['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia3=$noticias3[2]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia3['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia3["titulo"];?></b></h5>
                                <p><?php echo $noticia3["descripcion"]; ?></p>
                                             <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia3['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia3=$noticias3[3]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia3['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia3["titulo"]; ?></b></h5>
                                <p><?php echo $noticia3["descripcion"]; ?></p>
                                            <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia3['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia3=$noticias3[4]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia3['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia3["titulo"]; ?></b></h5>
                                <p><?php echo $noticia3["descripcion"]; ?></p>
                                             <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia3['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Academicos Fin -->
    <!-- Varios -->
    <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5">Varios</h1></h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel service-carousel">
                       <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia4=$noticias4[0]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia4['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia4["titulo"]; ?></b></h5>
                                <p><?php echo $noticia4["descripcion"]; ?></p>
                                            <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia4['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia4=$noticias4[1]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia4['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia4["titulo"]; ?></b></h5>
                                <p><?php echo $noticia4["descripcion"]; ?></p>
                                                <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia4['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia4=$noticias4[2]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia4['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia4["titulo"];?></b></h5>
                                <p><?php echo $noticia4["descripcion"]; ?></p>
                      <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia4['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia4=$noticias4[3]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia4['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia4["titulo"]; ?></b></h5>
                                <p><?php echo $noticia3["descripcion"]; ?></p>
                                                 <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia4['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                        <div class="service-item">
                            <div class="service-img mx-auto">
                                <?php $noticia4=$noticias4[4]; echo '<img class="rounded-circle w-100 h-100 bg-light p-3" src = "data:image/jpg;base64,' . base64_encode($noticia4['foto1']). '" width = "250px" height = "250px"style=" object-fit: cover;"/>'; ?>
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5"><b><?php echo $noticia4["titulo"]; ?></b></h5>
                                <p><?php echo $noticia4["descripcion"]; ?></p>
                                                 <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia4['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Varios Fin -->
    <?php 
    include 'footer.php' 
    ?>
    <!-- regresar arriba -->
    <a href="#" class="btn btn-secondary px-2 back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Librarias -->
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
x
    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>