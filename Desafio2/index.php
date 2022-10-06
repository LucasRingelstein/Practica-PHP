<?php

use Clases\Contents;

require("classes/contents.php");
require("classes/banners.php");
$banners = new Clases\Banners();
$contents = new Clases\Contents();
$images = new Clases\Images();
$res = $contents->listPrincipal();
$ban = $banners->list();
include("assets/includes/header.inc.php");

include("assets/includes/nav.inc.php");
?>
<section>
    <!-- imagen gigante -->



    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
        <div class="carousel-indicators">
            <?php for ($i = 0; $i < count($ban); $i++) { ?>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="<?= $i ?>" class="<?= $key == 0 ? "active" : '' ?>" aria-current="true" aria-label="Slide <?= $i ?>"></button>
            <?php } ?>
        </div>
        <div class="carousel-inner">
            <?php foreach ($ban as $key => $banner) { ?>
                <div class="position-relative carousel-item <?= $key == 0 ? "active" : '' ?>">

                    <!-- <h5 class="position-absolute " style="z-index: 9999;"><b class="tituloBanner "> titulo del banner </b></h5>
                    <p class="position-absolute"> contenido del banner </p> -->
                    <img src="<?= URL . '/admin/assets' . $banner['images'][0]['url'] ?>" class="d-block w-100">
                </div>
            <?php } ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <?php if (count($res) != 0) { ?>
        <div class="container card cardServicio text-center border border-0 ">
            <div class="row g-0">
                <div class="col texto">
                    <div class="card-body bodyPrincipal">
                        <h1 class="card-text pServicioPrincipal">Servicios Principales</h1>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="container my-5" style="text-align: -webkit-center;">
            <?php foreach ($res as  $servicios) {
            ?>
                <div class="my-5 card  align-self-center border border-0 servicioPrincipal" style="width: 80%;">
                    <div class="row g-0 ">
                        <div class="col-5">
                            <img src="<?= URL . '/admin/assets' . $servicios['images'][0]['url'] ?>" class="rounded-start float-start" style="height: 100%; width: 100%">
                        </div>
                        <div class="col-7 texto">
                            <div class="card-body bodyPrincipal">
                                <a class="link" href="<?= URL ?>/servicio.php?id=<?= $servicios['id'] ?>">
                                    <h1 class="card-title TituloServicioPrincipal"><b><?php echo $servicios['title'] ?></b></h1>

                                </a>
                                <hr class="linea">
                                <p class="card-text pServicioPrincipal"><?php echo $servicios['content'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
        } else { ?>
            <div class="container card cardServicio text-center border border-0 ">
                <div class="row g-0">
                    <div class="col texto">
                        <div class="card-body bodyPrincipal">
                            <h1 class="card-text pServicioPrincipal">Servicios Principales</h1>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <div class="my-5 card  align-self-center border border-0 servicioPrincipal">
                    <div class="row g-0 ">
                        <div class="col-5">
                            <img src="assets/images/noImage.jpg" class="rounded-start float-start" style="height: 100%; width: 100%">
                        </div>
                        <div class="col-7 texto">
                            <div class="card-body bodyPrincipal">
                                <h1 class="card-title TituloServicioPrincipal"><b>TITULO</b></h1>
                                <hr class="linea">
                                <p class="card-text pServicioPrincipal">Contenido</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>

        <!-- Servicio principal -->

        </div>
</section>
<!-- Pie de pagina -->
<?php
include("assets/includes/footer.inc.php");
?>