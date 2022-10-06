<?php
include("assets/includes/header.inc.php");
include("assets/includes/nav.inc.php");
require("classes/contents.php");
$contents = new Clases\Contents();
$res = $contents->view($_GET['id']);
?>
<div class="container card cardServicio text-center border border-0 ">
    <div class="row g-0">
        <div class="col-5 texto">
            <div class="card-body bodyPrincipal">
                <p class="card-text pServicioPrincipal">FOTOS</p>
                <hr>
            </div>
        </div>
        <div class="col-7 texto">
            <div class="card-body bodyPrincipal">
                <p class="card-text pServicioPrincipal">CONTENIDOS</p>
                <hr>
            </div>
        </div>
    </div>
</div>
<div class="container card  cardServicio text-center border border-0 pb-5 mb-5"  style="min-height: 400px">
    <div class="row g-0">
        <div class="col-5">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-inner">
                    <?php foreach ($res['images'] as $key => $servicios['images']) { ?>
                        <div class="carousel-item <?= $key == 0 ? "active" : '' ?> " style="height: auto; max-width: 500px">
                            <img src="<?= URL . '/admin/assets' . $servicios['images']['url'] ?>" class="img-fluid rounded-start float-start">
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
        </div>
        <div class="col-7 texto">
            <div class="card-body bodyPrincipal">
                <p class="card-text pServicios">TITULO: <?= $res['title'] ?><br>CONTENIDO: <?= $res['content'] ?><br>PALABRAS CLAVES: <?= $res['keywords'] ?><br>DESCRIPCION: <?= $res['description'] ?><br>CATEGORIA: <?= $res['category'] ?><br>
                </p>
            </div>
        </div>
    </div>
</div>

<?php
include("assets/includes/footer.inc.php")
?>