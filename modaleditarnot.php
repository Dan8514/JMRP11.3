<div class="modal fade" id="modaleditarnot<?php echo $noticia['id_not'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" role="dialogue">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="exampleModalLabel"><b>Información de la Noticia</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <form name=formulariom id="formulariom" action="editarnot.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                    <label for="titulo"><b>Título</b></label>
                    <input type="text" name="titulo" id="titulo" class="form-control" value="<?php echo $noticia['titulo'];?>">
                    <label for="descripcion"><b>Descripción</b></label>
                    <textarea type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $noticia['descripcion'];?>">
                   
                    <div class="row">
                        <div class="col">
                            <label for="fecha"><b>Fecha de ocurrencia de la noticia</b></label>
                            <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $noticia['fecha_not'];?>">
                    </div>
                    <div class="col">
                    <label for="idcat"><b>Categoría</b></label>
                    <input type="number" name="idcat" id="idcat" class="form-control" value="<?php echo $noticia['id_cat'];?>">
                    </div> 
                    </div>       
                    <label for="usuario"><b>Usuario que la creo</b></label>
                    <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $noticia['id_usu'];?>">
                    
                    
                    <div class="row">
                        <div class="col-9">
                           <label for="fechacreada"><b>Fecha de Cración</b></label>
                            <input type="date" name="fechacreada" id="fechacreada" class="form-control" value="<?php echo $noticia['fecha_not'];?>">
                           
                        </div>
                        <div class="col-3">  
                            <center> <label for="arch"><b>Archivada</b></label></center>
                            <center> <input type="text" name="arch" id="arch" class="form-control" value="<?php echo $noticia['archivada'];?>"></center>
                        </div> 
                    </div>  
                    <div class="row">
                        <div class ="col-4">
                            <span>
                                <label>Foto Principal</label>
                            <center>
                            <?php echo '<img class="circulo" src = "data:image/jpg;base64,' . base64_encode($noticia['foto1']) . '" width = "80px" height = "90px" />';?>
                            </center></span>
                        </div>
                        <div class="col-8">
                            <fieldset><br>
                            <label>Cambiar Foto</label>
                             <input type="file" name="image" id="image" single>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class ="col-4">
                            <span>
                                <label>Foto 2</label>
                            <center>
                            <?php echo '<img class="circulo" src = "data:image/jpg;base64,' . base64_encode($noticia['foto2']) . '" width = "80px" height = "90px" />';?>
                            </center></span>
                        </div>
                        <div class="col-8">
                            <fieldset><br>
                            <label>Cambiar Foto 2</label>
                             <input type="file" name="image2" id="image2" single>
                            </fieldset>
                        </div>
                    </div>
                    <div class="row">
                        <div class ="col-4">
                            <span>
                                <label>Foto 3</label>
                            <center>
                            <?php echo '<img class="circulo" src = "data:image/jpg;base64,' . base64_encode($noticia['foto3']) . '" width = "80px" height = "90px" />';?>
                            </center></span>
                        </div>
                        <div class="col-8">
                            <fieldset><br>
                            <label>Cambiar Foto 3</label>
                             <input type="file" name="image3" id="image3" single>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_not" id="id_not" value="<?php echo $noticia['id_not'];?>">
                    <input type="hidden" name="operacion" id="operacion">
                    <input type="submit" class="btn btn-success" value="Guardar Cambios">
                </div>
                <button type="reset" id="limpiar" hidden=""></button>
                </form>
            </div>
        </div>
    </div>