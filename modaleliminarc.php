<div class="modal fade" id="modaleliminarc<?php echo $comentario['id_com'];?>" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-header">
            <div class="row">
                <div class="col">
                      <h5 class="modal-title" id="exampleModalLabel"><center>¿Estas seguro? <br>Se eliminará:<br><br> <?php echo $comentario['id_com'];?><br><?php echo '<img class="circulo" src = "data:image/jpg;base64,' . base64_encode($comentario['foto']) . '" alt="No contiene imagen" width = "240px" height = "280px" />';?></center></h5>                    
                    </div>
                <div class="col">
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
            </div>
        </div>
        <div class="modal-body"><center>Selecciona "Eliminar" para borrarlo(a) de la base de datos.</center></div>
        <div class="modal-footer">
<form method="post" action="eliminarc.php">
<input type="hidden" name="id_com" id="id_com" value="<?php echo $comentario['id_com'];?>">
        <input type="submit" class="btn btn-danger" value="Eliminar">
</form>
        </div>
    </div>
</div>s
</div>