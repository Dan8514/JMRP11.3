<div class="container-fluid py-2">
        <div class="container py-2">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h2 class="section-title position-relative text-center mb-5">Últimas noticias: </h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="owl-carousel testimonial-carousel">
                        <div class="text-center">
                           <h4 class="font-weight-light mb-4"><strong><b><?php echo $titular1["titulo"]; ?></b></strong></h4>
                                    <center><?php echo '<img class="rounded-circle2 bg-light" src = "data:image/jpg;base64,' . base64_encode($titular1['foto1']). '"/>'; ?></center>
                                    <span class="p2"><h5><?php echo $titular1["descripcion"]; ?><br>
                                    <?php echo $titular1["fecha_not"]; ?></h5></span>
                                    <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $titular1['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                        </div>
                        <div class="text-center">
                            <h4 class="font-weight-light mb-4"><strong><b><?php echo $titular2["titulo"]; ?></b></strong></h4>
                            <center><?php echo '<img class="rounded-circle2 bg-light" src = "data:image/jpg;base64,' . base64_encode($titular2['foto1']). '" />'; ?></center>
                            <span class="p2"> <h5><?php echo $titular2["descripcion"]; ?><br>
                            <?php echo $titular2["fecha_not"]; ?></h5></span>
                            <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $titular2['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                        </div>
                        <div class="text-center">
                            <h4 class="font-weight-light mb-4"><strong><b><?php echo $titular3["titulo"]; ?></b></strong></h4>
                           <center><?php echo '<img class="rounded-circle2 bg-light" src = "data:image/jpg;base64,' . base64_encode($titular3['foto1']). '"/>'; ?></center>
                            <span class="p2"><h5><?php echo $titular3["descripcion"]; ?><br>
                            <?php echo $titular3["fecha_not"]; ?></h5></span>
                            <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $titular3['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                        </div>
                         <div class="text-center">
                            <h4 class="font-weight-light mb-4"><strong><b><?php echo $titular4["titulo"]; ?></b></strong></h4>
                             <center><?php echo '<img class="rounded-circle2 bg-light" src = "data:image/jpg;base64,' . base64_encode($titular4['foto1']). '"/>'; ?></center>
                            <span class="p2"><h5><?php echo $titular4["descripcion"]; ?><br>
                            <?php echo $titular4["fecha_not"]; ?></h5></span>
                            <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $titular4['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                        </div>
                        <div class="text-center">
                            <h4 class="font-weight-light mb-4"><strong><b><?php echo $titular5["titulo"]; ?></b></strong></h4>
                             <center><?php echo '<img class="rounded-circle2 bg-light" src = "data:image/jpg;base64,' . base64_encode($titular5['foto1']). '"/>'; ?></center>
                            <span class="p2"><h5><?php echo $titular5["descripcion"]; ?><br>
                            <?php echo $titular5["fecha_not"]; ?></h5></span>
                            <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $titular5['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                        </div>
                         <div class="text-center">
                            <h4 class="font-weight-light mb-4"><strong><b><?php echo $titular6["titulo"]; ?></b></strong></h4>
                             <center><?php echo '<img class="rounded-circle2 bg-light" src = "data:image/jpg;base64,' . base64_encode($titular6['foto1']). '"/>'; ?></center>
                            <span class="p2"><h5><?php echo $titular6["descripcion"]; ?><br>
                            <?php echo $titular6["fecha_not"]; ?></h5></span>
                            <form id="formulariom" method="post" action="modalvern.php" enctype="multipart/form-data">
                                        <input type="hidden" name="id_not" id="id_not" value="<?php echo $titular6['id_not'];?>">
                                    <button type="submit" name="vern">-> Ver <-</button>
                                    </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>