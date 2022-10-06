<?php
require_once(dirname(__DIR__, 4) . "/classes/banners.php");
require_once(dirname(__DIR__, 4) . "/classes/images.php");
$banner = new Clases\Banners();
$images = new Clases\Images();
$banners = array();



if (isset($_POST) && !empty($_POST)) {
    $cod = rand(0, 9999);
    $banners['cod'] = $cod;
    $banners['titulo'] = $_POST['titulo'];
    $banners['contenido'] = $_POST['contenido'];
    $banner->create($banners);
    
    $rutaTemp = $_FILES['imagen']['tmp_name'];
    $name = $_FILES['imagen']['name'];
    $ruta = (dirname(__DIR__, 2) . "/images/banners/" . $cod . '-' . $name);
    rename($rutaTemp, $ruta);
    $ruta2 = "/images/banners/" . $cod . '-' . $name;
    $images->create($ruta2, $cod);
}

?>

<body>
    <div class="container card cardServicio text-center border border-0 ">
        <div class="col texto">
            <div class="card-body bodyPrincipal">
                <h1 class="card-text pServicioPrincipal"><b>CREAR BANNER</b></h1>
                <hr>
            </div>
        </div>
    </div>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row container-fluid">
            <div class="col mb-3 ">
                <label class="col form-label">Titulo</label>
                <input type="text" class="form-control" name="titulo" required>
            </div>
            <div class="col mb-3">
                <label class="form-label">Contenido</label>
                <input type="text" class="form-control" name="contenido" required>
            </div>
        </div>
        <div class="align-items-end row container-fluid">
            <div class="mb-3 col container-fluid">
                <label class="form-label">Seleccione una imagen</label>
                <input class="form-control" type="file" name="imagen" required>
            </div>
            <div class=" col container-fluid mb-3">
                <button type="submit" class="btn btn-dark" value="Enviar">Enviar</button>
            </div>
        </div>
    </form>
</body>