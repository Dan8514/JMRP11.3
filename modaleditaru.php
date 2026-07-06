<div class="modal fade" id="modaleditaru<?php echo $usuario['id_usu'];?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" role="dialogue">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-4" id="exampleModalLabel"><b>Información del Usuario</b></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
                </div>
                <form action="editaru.php" method="POST" enctype="multipart/form-data">
                <div class="modal-content">
                    <div class="modal-body">
                    <label for="nombre"><b>Nombre</b></label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?php echo $usuario['nombre'];?>">
                    <label for="ape"><b>Apellido</b></label>
                    <input type="text" name="ape" id="ape" class="form-control" value="<?php echo $usuario['ape'];?>">
                    <div class="row">
                        <div class="col">
                            <label for="documento"><b>Documento</b></label>
                            <input type="text" name="documento" id="documento" class="form-control" value="<?php echo $usuario['documento'];?>">
                        </div>
                        <div class="col">
                        <label for="correo"><b>Correo</b></label>
                        <input type="mail" name="correo" id="correo" class="form-control" value="<?php echo $usuario['correo'];?>">             
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="cel"><b>Celular</b></label>
                            <input type="text" name="whatsapp" id="whatsapp" class="form-control" value="<?php echo $usuario['whatsapp'];?>">
                    </div>
                    <div class="col">
                    <label for="tipo"><b>Tipo de Usuario</b></label>
                    <input type="text" name="tipo" id="tipo" class="form-control" value="<?php echo $usuario['tipo'];?>">
                    </div> 
                    </div>       
                    <label for="usuario"><b>Usuario para inicio de sesión</b></label>
                    <input type="text" name="usuario" id="usuario" class="form-control" value="<?php echo $usuario['usuario'];?>">
                    <div class="row">
                        <div class="col-9">
                          
                            <input type="button" name="clave" id="clave" class="" value="Cambiar Contraseña">
                           
                        </div>
                        <div class="col-3">  
                            <center><label for="activo"><b>Activo</b></label></center>
                            <center> <input type="checkbox" name="activo" id="activo" class="form-check-input" value="<?php echo $usuario['activo'];?>"></center>
                        </div> 
                    </div>   
                    <div class="row">
                        <div class="col">
                            <label for="grado"><b>Director de Grado</b></label>
                            <input type="text" name="grado" id="grado" class="form-control" value="<?php echo $usuario['grado'];?>">
                        </div>
                        <div class="col">
                        <label for="grupo"><b>Grupo</b></label>
                        <input type="number" name="grupo" id="grupo" class="form-control" value="<?php echo $usuario['grupo'];?>">             
                        </div>
                    </div>
                    <div class="row">
                        <div class ="col-4">
                            <span>
                            <center>
                            <?php if(strpos($usuario['foto'], '<svg') !== false): ?>
                                <div style="width:80px; height:80px; display:inline-block;">
        <?php echo str_replace('<svg', '<svg style="width:100px; height:100px;"', $usuario['foto']); ?>    </div>
                                </div>
                            <?php else: ?>
                                <img class="circulo" src="data:image/jpg;base64,<?php echo base64_encode($usuario['foto']); ?>" width="80px" height="80px"/>
                            <?php endif; ?>                            </center></span>
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
                    <input type="hidden" name="id_usu" id="id_usu" value="<?php echo $usuario['id_usu'];?>">
                    <input type="hidden" name="operacion" id="operacion">
                    <input type="submit" class="btn btn-success" value="Guardar Cambios">
                </div>
                <button type="reset" id="limpiar" hidden=""></button>
                </form>
            </div>
        </div>
    </div>