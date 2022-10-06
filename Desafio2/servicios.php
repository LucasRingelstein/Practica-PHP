<?php
require("classes/contents.php");
$contents = new Clases\Contents();
$images = new Clases\Images();

$res = $contents->list();
$res2 = $contents->listPrincipal();



include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");

?>


<?php
if (count($res) != 0) { ?>
    <div class="row  mt-5 ">
        <div class="col-12 texto text-center">
            <div class="card-body bodyPrincipal">
                <h1 class="card-text pServicioPrincipal">Servicios Principales</h1>
                <hr>
            </div>
        </div>
        <?php
        foreach ($res2 as $key => $servicios) { ?>
            <div class="col-3">
                <div class="justify-content-center card   cadaServicio border border-0">
                    <img src="<?= URL . '/admin/assets' . $servicios['images'][0]['url'] ?>" style="  object-fit: cover;" class="card-img-top">
                    <div class=" card-body bodySecundario ">
                        <a class="link" href="servicio.php?id=<?= $servicios['id'] ?>">
                            <h1 class=" TituloServicioSecundario"><b> <?php echo $servicios['title'] ?> </b></h1>
                        </a>
                        <hr class="linea">

                        <p class="card-text pServicioSecundario"><?php echo $servicios['content'] ?></p>
                    </div>
                </div>
            </div>
        <?php }
    } else { ?>
        <div class="row  mt-5 ">

            <div class="col-12 texto text-center">
                <div class="card-body bodyPrincipal">
                    <h1 class="card-text pServicioPrincipal">Servicios Principales</h1>
                    <hr>
                </div>
            </div>
            <?php for ($i = 0; $i <= 3; $i++) { ?>
                <div class="col-3">
                    <div class="justify-content-center card   cadaServicio border border-0">
                        <img src="assets/images/noImage.jpg" style="  object-fit: cover;" class="card-img-top">
                        <div class=" card-body bodySecundario ">
                            <h1 class=" TituloServicioSecundario"><b>TITULO</b></h1>
                            <hr class="linea">
                            <p class="card-text pServicioSecundario">Contenido</p>
                        </div>
                    </div>
                </div>
        <?php }
        } ?>
        </div>
        <?php
        if (count($res) != 0) { ?>
            <div class="col-12 texto text-center ">
                <div class="card-body bodyPrincipal">
                    <h1 class="card-text pServicioPrincipal">Servicios Secundarios</h1>
                    <hr>
                </div>
            </div>
            <div class="row  mt-5 ">
                <?php foreach ($res as $key => $servicios) { ?>
                    <div class="col-3">
                        <div class="justify-content-center card   cadaServicio border border-0">
                            <img src="<?= URL . '/admin/assets' . $servicios['images'][0]['url'] ?>" style="  object-fit: cover;" class="card-img-top">
                            <div class=" card-body bodySecundario ">
                                <a class="link" href="servicio.php?id=<?= $servicios['id'] ?>">
                                    <h1 class=" TituloServicioSecundario"><b> <?php echo $servicios['title'] ?> </b></h1>
                                </a>
                                <hr class="linea">

                                <p class="card-text pServicioSecundario"><?php echo $servicios['content'] ?></p>
                            </div>
                        </div>
                    </div>
                <?php }
            } else { ?>
                <div class="row  mt-5 ">

                    <div class="col-12 texto text-center">
                        <div class="card-body bodyPrincipal">
                            <h1 class="card-text pServicioPrincipal">Servicios Secundarios</h1>
                            <hr>
                        </div>
                    </div>
                    <?php for ($i = 0; $i <= 3; $i++) { ?>
                        <div class="col-3">
                            <div class="justify-content-center card   cadaServicio border border-0">
                                <img src="assets/images/noImage.jpg" style="  object-fit: cover;" class="card-img-top">
                                <div class=" card-body bodySecundario ">
                                    <h1 class=" TituloServicioSecundario"><b>TITULO</b></h1>
                                    <hr class="linea">
                                    <p class="card-text pServicioSecundario">Contenido</p>
                                </div>
                            </div>
                        </div>

                <?php }
                } ?>
                </div>

                <?php
                include("assets/includes/footer.inc.php")
                ?>