<div class="modal fade" id="modaleditarca<?php echo $categorias['id_cat'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" role="dialogue">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="exampleModalLabel"><b>Información del Comentario</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <form action="editarca.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                        <label for="nombre"><b>Nombre o Descripción</b></label>
                        <input type="date" name="nombre" id="nombre" class="form-control" value="<?php echo $categorias['nombre'];?>">
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_cat" id="id_cat" value="<?php echo $categorias['id_cat'];?>">
                    <input type="hidden" name="operacion" id="operacion">
                    <input type="submit" class="btn btn-success" value="Guardar Cambios">
                </div>
                <button type="reset" id="limpiar" hidden=""></button>
                </form>
            </div>
        </div>
    </div>