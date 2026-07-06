<div class="modal fade" id="modaleditarc<?php echo $comentario['id_com'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" role="dialogue">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="exampleModalLabel"><b>Información del Comentario</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <form action="editarc.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                    <label for="fecha"><b>Fecha</b></label>
                    <input type="date" name="fecha" id="fecha" class="form-control" value="<?php echo $comentario['fecha'];?>">
                    <label for="descripcion"><b>Descripción</b></label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?php echo $comentario['descripcion'];?>">
                    <div class="row">
                        <div class="col">
                            <label for="idnot"><b>Id Noticia</b></label>
                            <input type="text" name="idnot" id="idnot" class="form-control" value="<?php echo $comentario['id_not'];?>">
                        </div>
                        <div class="col">
                        <label for="usu"><b>Usuario que lo creo</b></label>
                        <input type="text" name="usu" id="usu" class="form-control" value="<?php echo $comentario['id_usu'];?>">             
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="arch"><b>Archivado</b></label>
                            <input type="checkbox" name="arch" id="arch" class="form-control" value="<?php echo $comentario['archivado'];?>">
                    </div>
                    <div class="col">
                    <label for="aprobado"><b>Aprobado</b></label>
                    <input type="checkbox" name="aprobado" id="aprobado" class="form-control" value="<?php echo $comentario['aprobado'];?>">
                    </div> 
                    </div>       

                    <div class="row">
                        <div class ="col-4">
                            <span>
                            <center>
                            <?php echo '<img class="circulo" src = "data:image/jpg;base64,' . base64_encode($comentario['foto']) . '" alt="No incluye foto" width = "80px" height = "90px" />';?>
                            </center></span>
                        </div>
                        <div class="col-8">
                            <fieldset><br>
                            <label>Cambiar Foto</label>
                             <input type="file" name="image" id="image" single>
                            </fieldset>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_com" id="id_com" value="<?php echo $comentario['id_com'];?>">
                    <input type="hidden" name="operacion" id="operacion">
                    <input type="submit" class="btn btn-success" value="Guardar Cambios">
                </div>
                <button type="reset" id="limpiar" hidden=""></button>
                </form>
            </div>
        </div>
    </div>