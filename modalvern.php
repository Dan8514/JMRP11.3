<?php include_once 'conex.php';$id_not=$_POST["id_not"];
$objeto = new conex();
$conex = $objeto -> conectar(); 
$consulta = "SELECT * FROM noticias as n INNER JOIN usuario as u ON n.id_usu=u.id_usu WHERE id_not='$id_not'";
$resultado = $conex->prepare($consulta);
$resultado->execute();
$noticias=$resultado->fetchAll(PDO::FETCH_ASSOC);
foreach($noticias as $noticia){
?> 
<!DOCTYPE html>
<html lang="en">

<head>
<?php include 'head.php' ?>  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body id="page-top">  
    <header>
        <?php session_start(); include 'menu.php' ?>
    </header>
    <div id="wrapper"> 
                <div id="content-wrapper" class="d-flex flex-column">
                    <!-- Contenido Principal -->
                    <div id="content">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col">
                                    <div class="card shadow mb-4">
                                        <div class="card-header py-">
                                            <div class="row">
                                               <DIV class="alinear">
                                                    <div class="col-4">
                                                        <div class="w1"><strong>Noticia Seleccionada</strong>
                                                        </div>
                                                    </div>
                                                    <div class="col-4">
                                                    </DIV>
                                                    <div class="col-4">
                                                        <div class="w1"><strong><a href="noticias.php" name="vern">< Volver</a></strong>
                                                        </div>
                                                    </DIV>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                         
<form name="formulariom" id="formulariom" >
                <div class="modal-content">
                    <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label name="titulo" id="titulo" class="w2"><b> <?php echo $noticia['titulo'];?></b></label><br>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label class="w2" for="fechacreada"><b>Fecha -></b></label>
                            <label name="fecha" id="fecha" class="w2"> <?php echo $noticia['fecha_not'];?></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class ="col-lg-6 col-md-6 col-sm-12">
                            <div class ="row">
                                <span>
                                <div class="col"><div class="fotonoti"><?php echo '<img src = "data:image/jpg;base64,' . base64_encode($noticia['foto1']) . '"  />';?></div></div> 
                                </span>
                            </div>  <br>
                            <div class ="row">
                                <span>
                                <div class="col"><div class="fotonoti"><?php echo '<img src = "data:image/jpg;base64,' . base64_encode($noticia['foto2']) . '"  />';?></div></div> 
                                </span>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class ="row">
                                    <span>
                                    <div class="col"><div class="fotonoti"><?php echo '<img src = "data:image/jpg;base64,' . base64_encode($noticia['foto3']). '"  />';?></div></div>
                                 </span>
                                </div><br>
                                <div class ="row">
                                    <span>
                                 
                                    <div class="col"><div class="fotonoti"><?php echo '<img src = "data:image/jpg;base64,' . base64_encode($noticia['foto4']) . '"  />';?></div></div>
                             </span>
                                </div>
                            </div>
                        </div><br>
                    <p><?php echo $noticia['descripcion'];?></p>
                   
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="w2" for="idcat"><b>Categoría</b></label>
                            <input type="text" name="idcat" id="idcat" class="form-control" value="<?php if($noticia['id_cat']==1){ echo "Deporte";}elseif($noticia['id_cat']==2){ echo "Cultura";}elseif($noticia['id_cat']==3){ echo "Académica";}else{ echo "Varios";}?>" onlyread>
                        </div> 
                        <div class="col-lg-4 col-md-4 col-sm-12">
                            <label class="w2" for="usuario"><b>Usuario Autor</b></label>
                            <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $noticia['nombre'];?>" onlyread>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12">
                           <label class="w2" for="fechacreada"><b>Fecha de Creación</b></label>
                            <input type="text" onlyread name="fechacreada" id="fechacreada" class="form-control" value="<?php echo $noticia['fecha_not'];?>">
                           
                        </div>
                    </div>  
                    <br><button type="button" class="btn w-100 text-primary font-weight-bold" data-bs-toggle="modal" data-bs-target="#modalcom" name="botonCrear" id="botonCrear">
                                                    <div class="d-none d-sm-inline-block black">
                                                        <div class="w2"> Comentar esta Noticia <i class="fas fa-comment fa-2x text-success"></i></div>
                                                    </div>
                                                    </button>
                    <br><br>
                    <?php $idnot=$noticia['id_not']; $consulta2="SELECT * FROM comentarios WHERE id_not='$idnot'"; 
                    $resultadoc = $conex->prepare($consulta2);
                    if($resultadoc){
                        $resultadoc->execute();
                        $comentarios=$resultadoc->fetchAll(PDO::FETCH_ASSOC);
                     ?>
                      <div class="row"><div class="col-12"><table class="table table-striped" style="width:95%">
                                                        <thead>
                                                            <tr>
                                                                <th>Comentarios</th>
                                                                <th>Fecha</th>
                                                                <th>Usuario</th>
                                                                <th>Imagen</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($comentarios as $comentario) {?>
                                                            <tr>
                                                                <td> <?php echo $comentario['descripcion'] ?> </td>
                                                                <td> <?php echo $comentario['fecha'] ?> </td>
                                                                <td> <?php echo $comentario['nomusu'] ?> </td>
                                                                <td> <?php echo '<img src = "data:image/jpg;base64,' . base64_encode($comentario['foto']). '" width = "50px" height = "50px"/>'; ?></td>
                                                                </tr>
                                                                 <?php      }?>
                                                        </tbody>
                                            </table>  </div></div> 

                      <?php      }?>
                </div>
                <button type="reset" id="limpiar" hidden=""></button>

  </form>




                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            
    </div>
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>
             
                <?php include 'includes/logout.php' ?>

                
    <!-- Bootstrap core JavaScript-->
    <script type="text/javascript">

    $(document).ready(function() {
        $("#limpiar").click();
        $("#formulariom > input").html("");
    });

</script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- scripts para personalizar la página-->
    <script src="https://cdn.jsdelivr.net/npm/gridjs/dist/gridjs.umd.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.20/datatables.min.js"></script>
    <script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.10.1/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.bootstrap5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.colVis.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.4.1/js/buttons.print.min.js"></script>

<script src="js/scriptusu.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<?php 
    if($_SESSION["tipo"]===0){
        ?>
<div class="modal fade" id="modalcom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="exampleModalLabel">Sesión no Iniciada</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" >X</button>
                            </div>
                            <form method="POST" id="formulariom" action="crearu.php" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <label class="w2" for="usuario"><p>No puede comentar, debe iniciar sesión, solo estudiantes pueden comentar</p></label>
                                        <br>
                                    </div>
                                    <div class="modal-footer">
                                            <input type="hidden" name="rown" id="rown">
                                            <input type="hidden" name="operacion" id="operacion">
                                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" >Regresar</button>
                                    </div>
                                </div>
                                <button type="reset" id="limpiar" hidden=""></button>
                            </form>
                        </div>
                    </div>
                </div>
    <?php }
    else{
    ?>
<div class="modal fade" id="modalcom" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="exampleModalLabel">Nuevo Comentario</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" >X</button>
                            </div>
                            <form method="POST" id="formulariom" action="crearcom.php" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        
                                            <label class="w2" for="comentario"><p>Ingrese su comentario:</p></label><br>
                                            <textarea name="comentario" id="comentario" rows="4"></textarea><br>
                                      <fieldset><br>
                                        <label for="image">Añadir Imagen</label>
                                        <input type="file" name="image" id="image" single>
                                        </fieldset>
                                        <br>
                                    </div>
                                    <div class="modal-footer">
                                            <input type="hidden" name="id_not" id="id_not" value="<?php echo $id_not?>">
                                            <input type="hidden" name="operacion" id="operacion">
                                            <input type="submit" class="btn btn-success" name="btncrearu" id="btncrearu" value="Crear Comentario">
                                    </div>
                                </div>
                                <button type="reset" id="limpiar" hidden=""></button>
                            </form>
                        </div>
                    </div>
                </div>
    <?php
    }
?>
</body>

</html>
 <?php } ?>