<?php
require_once(dirname(__DIR__, 4) . "/classes/contents.php");
require_once(dirname(__DIR__, 4) . "/classes/images.php");
$content = new Clases\Contents();
$images = new Clases\Images();
$contents = array();



if (isset($_POST) && !empty($_POST)) {
    $cod = rand(0, 9999);
    $contents['cod'] = $cod;
    $contents['titulo'] = $_POST['titulo'];
    $contents['contenido'] = $_POST['contenido'];
    $contents['palabraClave'] = $_POST['palabraClave'];
    $contents['descripcion'] = $_POST['descripcion'];
    $contents['categoria'] = $_POST['categoria'];
    $contents['principal'] = isset($_POST['principal']) ? $_POST['principal'] : 0;
    $content->create($contents);


    for ($i = 0; $i < count($_FILES['imagen']['name']); $i++) {
        $rutaTemp = $_FILES['imagen']['tmp_name'][$i];
        $name = $_FILES['imagen']['name'][$i];
        $ruta = (dirname(__DIR__, 2) . "/images/servicios/" . $cod . '-' . $name);
        rename($rutaTemp, $ruta);
        $ruta2 = "/images/servicios/" . $cod . '-' . $name;
        $images->create($ruta2, $cod);
    }
}

?>

<body>
    <div class="container card cardServicio text-center border border-0 ">
        <div class="col texto">
            <div class="card-body bodyPrincipal">
                <h1 class="card-text pServicioPrincipal"><b>CREAR SERVICIO</b></h1>
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
            <div class="col mb-3">
                <label class="form-label">Palabras claves</label>
                <input type="text" class="form-control" name="palabraClave" required>
            </div>
        </div>
        <div class="row container-fluid">
            <div class="col mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" rows="3" name="descripcion" required></input>
            </div>
            <div class="col mb-3">
                <label class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria" required>
            </div>
        </div>
        <div class="align-items-end row container-fluid">
            <div class="mb-3 col container-fluid">
                <label class="form-label">Seleccione una imagen</label>
                <input class="form-control" type="file" name="imagen[]" required multiple>
            </div>
            <div class="col mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="principal" value="1" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Servicio Principal</label>
            </div>
        </div>
        <div class="container-fluid mb-3">
            <button type="submit" class="btn btn-dark" value="Enviar">Enviar</button>
        </div>

    </form>
</body>