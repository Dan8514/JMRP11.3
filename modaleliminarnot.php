<div class="modal fade" id="modaleliminarnot<?php echo $noticia['id_not'];?>" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <div class="row">
                <div class="col">
                      <h5 class="modal-title" id="exampleModalLabel"><center>¿Estas seguro? <br>Se eliminará:<br><br> <?php echo $noticia['titulo'];?><br><?php echo '<img class="circulo" src = "data:image/jpg;base64,' . base64_encode($usuario['foto']) . '" width = "240px" height = "280px" />';?></center></h5>                    
                    </div>
                <div class="col">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
            </div>
        </div>
        <div class="modal-body"><center>Selecciona "Eliminar" para borrar la noticia de la base de datos.</center></div>
        <div class="modal-footer">
<form method="post" action="eliminanot.php">
<input type="hidden" name="idnot" id="idnot" value="<?php echo $noticia['id_not'];?>">
        <input type="submit" class="btn btn-danger" value="Eliminar">
</form>
        </div>
    </div>
</div>s
</div>