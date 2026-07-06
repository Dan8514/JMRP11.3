<?php include 'conexi.php';
session_start();
$usu=$_SESSION["id_usu"];
$consulta = "SELECT * FROM usuario WHERE id_usu ='$usu'";
$result = mysqli_query($connection,$consulta);
$usuario=mysqli_fetch_assoc($result)?> 
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'head.php' ?>
</head>
<body id="page-top">
    <?php include 'menu.php'?>
    <div id="wrapper">
        <div class="row"><div class="col"><br>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <div class="row">
                                        <div class="col">
                                             <div class="w1">Perfil del Usuario</div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <form action="editarperfil.php" method="POST" enctype="multipart/form-data">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-6">
                                                            <b>Nombre</b>
                                                            <input type="text" readonly name="nombre" id="nombre" class="form-control" value="<?php echo $usuario['nombre'];?> <?php echo $usuario['ape'];?>">
                                                        </div>
                                                        <div class="col-3">
                                                            <b>Usuario</b>
                                                            <input type="text" readonly name="usuar" id="usuar" class="form-control" value="<?php echo $usuario['usuario'];?>">
                                                        </div>
                                                        <div class="col-3">
                                                            <b>Documento</b>
                                                            <input type="text" readonly name="id" id="id" class="form-control" value="<?php echo $usuario['documento'];?>">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-5">
                                                            <br><b>Correo</b>
                                                            <input type="mail" name="correo" id="correo" class="form-control" value="<?php echo $usuario['correo'];?>">             
                                                            <b>Celular</b>
                                                            <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="<?php echo $usuario['whatsapp'];?>">
                                                            <br>
                                                           <button type="button" class="w" data-bs-toggle="modal" data-bs-target="#modalcc" name="botoncc" id="botoncc">
                                                             Cambiar Contraseña      </button>
                                                        </div>
                                                        <div class ="col-3">
                                                                <br><div class="w3"><br><br><center>-----Foto de Prefil-----</center></div>
                                                                    <span>
                                                                        <center><?php echo '<img  class="circulo" src = "data:image/jpg;base64,' . base64_encode($usuario['foto']) . '" width = "150px" height = "170px" />';?></center>
                                                                    </span><br>     
                                                        </div>
                                                        <div class="col-4"><br>
                                                                <fieldset><br><br>
                                                                    <label><br>Cambiar Foto</label>
                                                                    <input type="file" name="image" id="image" single>
                                                                </fieldset>
                                                        </div>
                                                    </div>       
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <input type="hidden" name="rown" id="rown" value="<?php echo $usuario['id_usu'];?>">
                                                <input type="hidden" name="operacion" id="operacion">
                                                <input type="submit" class="btn btn-success" value="Guardar Cambios">
                                            </div>
                                            <button type="reset" id="limpiar" hidden=""></button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div></div></div>
                </div>
            </div>
        </div>
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>
    </div>
     <div class="modal fade" id="modalcc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title fs-5" id="exampleModalLabel">Cambiar Contraseña</h2>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" >X</button>
                            </div>
                            <form method="POST" id="formulariom" action="cambiaclave.php" enctype="multipart/form-data">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <label for="documento">Contraseña Actual:</label>
                                        <input type="text" name="clave" id="clave" class="form-control">
                                        <label for="nombre">Nueva Contraseña:</label>
                                        <input type="text" name="nueva" id="nueva" class="form-control">
                                        <label for="ape">Repetir Nueva Contraseña:</label>
                                        <input type="text" name="nueva2" id="nueva2" class="form-control">          
                                    </div>
                                    <div class="modal-footer">
                                            <input type="hidden" name="rown" id="rown">
                                            <input type="hidden" name="operacion" id="operacion">
                                            <input type="submit" class="btn btn-success" name="btncrearu" id="btncrearu" value="Cambiar">
                                    </div>
                                </div>
                                <button type="reset" id="limpiar" hidden=""></button>
                            </form>
                        </div>
                    </div>
                </div>
    <script>
        $(document).ready(function() {
        $("#limpiar").click();
        $("#formulariom > input").html("");
        });
    </script>
    <!-- Bootstrap core JavaScript-->
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Custom scripts for all pages-->
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
    <script src="js/script.js"></script>
    <script src="js/sb-admin-2.min.js"></script>
</body>
</html>