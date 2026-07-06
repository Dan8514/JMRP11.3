<?php include_once 'conex.php';
$objeto = new conex();
$conex = $objeto -> conectar(); 
$consulta = "SELECT * FROM noticias order by fecha_not DESC";
$resultado = $conex->prepare($consulta);
$resultado->execute();
$noticias=$resultado->fetchAll(PDO::FETCH_ASSOC);

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
                                                <div class="col-8">
                                                    <div class="w1"><strong>Noticias </strong>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <a href="modalcrearn.php">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Crear Noticia <i class="fas fa-newspaper fa-2x text-blue-300"></i></div>
                                                   </a>
                                                </div>
                                                </DIV>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table name="usuarios" id="usuarios" class="table table-striped" style="width:95%">
                                                        <thead>
                                                            <tr>
                                                                <th>Id</th>
                                                                <th>Titulo</th>
                                                                <th>Descripción</th>
                                                                <th>Fecha</th>
                                                                <th>Foto 1</th>
                                                                <th>Foto 2</th>
                                                                <th>Foto 3</th>
                                                                <th>Categoría</th>
                                                                <th><center>Ver</center></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php foreach($noticias as $noticia) {?>
                                                            <tr>
                                                                <td> <?php echo $noticia['id_not'] ?> </td>
                                                                <td> <?php echo $noticia['titulo'] ?> </td>
                                                                <td> <?php echo $noticia['descripcion'] ?> </td>
                                                                <td> <?php echo $noticia['fecha_not'] ?> </td>
                                                                <td> <?php echo '<img class="circulo" src = "data:image/jpg;base64,' . base64_encode($noticia['foto1']). '" width = "50px" height = "50px" alt="No incluye"/>'; ?></td>
                                                                <td> <?php echo '<img class="circulo" src = "data:image/jpg;base64,' . base64_encode($noticia['foto2']). '" width = "50px" height = "50px" alt="No incluye"/>'; ?></td>
                                                                <td> <?php echo '<img class="circulo" src = "data:image/jpg;base64,' . base64_encode($noticia['foto3']). '" width = "50px" height = "50px" alt="No incluye"/>'; ?></td>
                                                                 <td> <?php echo $noticia['id_cat'] ?> </td>
                                                                <td><center>
                                                                    <form action="modalvern.php" method="POST">
                                                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia['id_not'];?>">
                                                                        <button type="submit" class="form-control" id="vern" nombre="vern"><i class="fas fa-solid fa-trash"></i></button>
                                                                    </form></center></td>
                                                            </tr>

                                                            <?php }?>
                                                        </tbody>
                                            </table>    
                                                      
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
</body>
</html>