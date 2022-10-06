<?php

require(dirname(__DIR__, 4) . "/classes/banners.php");
// Se crean las variables necesarias
$banners = new Clases\Banners();
$images = new Clases\Images();


if (isset($_GET['delete'])) {
    $res2 = $images->delete($_GET['delete'], $_GET['img']);
}
// if(empty($_FILES['imagen']['name'])){
//     $_FILES['imagen']['name']='';
// }
// Se llama a la funcion

$res = $banners->view($_GET['id']);
if (isset($_POST['enviar']) && !empty($_POST['enviar'])) {
    $update['titulo'] = $_POST['titulo'];
    $update['contenido'] = $_POST['contenido'];
    $banners->update($_GET['id'], $update);

    if (/*isset($_FILES['imagen']['name'])&&*/!empty($_FILES['imagen']['name'])) {
        $rutaTemp = $_FILES['imagen']['tmp_name'][0];
        $name = $_FILES['imagen']['name'][0];

        $ruta = (dirname(__DIR__, 2) . "/images/banners/" . $res['cod'] . '-' . $name);
        rename($rutaTemp, $ruta);
        $ruta2 = "/images/banners/" . $res['cod'] . '-' . $name;
        $images->create($ruta2, $res['cod']);
    }
    $url = URL . "/admin/index.php?op=banners&accion=update&id=" . $_GET['id'];
    // header("Location: $url");
    // header("Location: URL'/admin/index.php?op=banners&accion=update&id='$_GET[id]");
}
$res = $banners->view($_GET['id']);


?>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row container-fluid">
            <div class="col mb-3 mt-3">
                <label class="col form-label">Titulo</label>
                <input type="text" class="form-control" value="<?php echo $res['titulo'] ?>" name="titulo" required>
            </div>
            <div class="col mb-3 mt-3">
                <label class="form-label">Contenido</label>
                <input type="text" class="form-control" value="<?php echo $res['contenido'] ?>" name="contenido" required>
            </div>
        </div>
        <?php if (!empty($res['images'][0]['url'])) { ?>
            <div class="cartaImagen row mb-3 mt-3 container-fluid">
                <div class="card m-3" style="width: 18rem;">
                    <img src="<?= URL . '/admin/assets' . $res['images'][0]['url'] ?>" class="img-thumbnail" alt="">
                    <a type="button" class="btn btn-danger" href="<?= URL ?>/admin/index.php?op=banners&accion=update&id=<?= $_GET['id'] ?>&delete=<?= $res['images'][0]['id'] ?>&img=<?= $res['images'][0]['url'] ?>">
                        BORRAR
                    </a>
                </div>

            </div>
        <?php } ?>
        <div class="align-items-end row container-fluid">
            <div class="col align-items-end  row container-fluid">
                <div class="mb-3 col">
                    <label class="form-label">Seleccione una imagen</label>
                    <input class="form-control" type="file" name="imagen[]">
                </div>
            </div>
            <div class="col mb-3 container-fluid">
                <button type="submit" class="btn btn-dark" name="enviar" value="enviar">Enviar</button>
            </div>
        </div>
    </form>
</body>