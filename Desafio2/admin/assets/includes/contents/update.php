<?php

require(dirname(__DIR__, 4) . "/classes/contents.php");
// Se crean las variables necesarias
$contents = new Clases\Contents();
$images = new Clases\Images();


if (isset($_GET['delete'])) {
    $res2 = $images->delete($_GET['delete'], $_GET['img']);
}
// if(empty($_FILES['imagen']['name'])){
//     $_FILES['imagen']['name']='';
// }
// Se llama a la funcion

$res = $contents->view($_GET['id']);
if (isset($_POST['enviar']) && !empty($_POST['enviar'])) {
    $update['title'] = $_POST['titulo'];
    $update['content'] = $_POST['contenido'];
    $update['keywords'] = $_POST['palabraClave'];
    $update['description'] = $_POST['descripcion'];
    $update['category'] = $_POST['categoria'];
    $update['principal'] = isset($_POST['principal']) ? $_POST['principal'] : 0;
    $contents->update($_GET['id'], $update);
    if (/*isset($_FILES['imagen']['name'])&&*/!empty($_FILES['imagen']['name'][0])) {
        for ($i = 0; $i < count($_FILES['imagen']['name']); $i++) {
            $rutaTemp = $_FILES['imagen']['tmp_name'][$i];
            $name = $_FILES['imagen']['name'][$i];
            $ruta = (dirname(__DIR__, 2) . "/images/DB/" . $res['cod'] . '-' . $name);
            rename($rutaTemp, $ruta);
            $ruta2 = "/images/DB/" . $res['cod'] . '-' . $name;
            $images->create($ruta2, $res['cod']);
        }
    }
    $url = URL . "/admin/index.php?op=contents&accion=update&id=" . $_GET['id'];
    header("Location: $url");
    // header("Location: URL'/admin/index.php?op=contents&accion=update&id='$_GET[id]");
}
$res = $contents->view($_GET['id']);

?>

<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="row container-fluid">
            <div class="col mb-3 mt-3">
                <label class="col form-label">Titulo</label>
                <input type="text" class="form-control" value="<?php echo $res['title'] ?>" name="titulo" required>
            </div>
            <div class="col mb-3 mt-3">
                <label class="form-label">Contenido</label>
                <input type="text" class="form-control" value="<?php echo $res['content'] ?>" name="contenido" required>
            </div>
            <div class="col mb-3 mt-3">
                <label class="form-label">Palabras claves</label>
                <input type="text" class="form-control" value="<?php echo $res['keywords'] ?>" name="palabraClave" required>
            </div>
        </div>
        <div class="row container-fluid">
            <div class="col mb-3">
                <label class="form-label">Descripcion</label>
                <input type="text" class="form-control" name="descripcion" value="<?php echo $res['description'] ?>" required></input>
            </div>
            <div class="col mb-3">
                <label class="form-label">Categoria</label>
                <input type="text" class="form-control" name="categoria" value="<?php echo $res['category'] ?>" required>
            </div>
        </div>
        <div class="cartaImagen row mb-3 mt-3 container-fluid">
            <?php for ($i = 0; $i < count($res['images']); $i++) { ?>
                <div class="card m-3" style="width: 18rem;">
                    <img src="<?= URL . '/admin/assets' . $res['images'][$i]['url'] ?>" class="img-thumbnail" alt="">
                    <a type="button" class="btn btn-danger" href="<?= URL ?>/admin/index.php?op=contents&accion=update&id=<?= $_GET['id'] ?>&delete=<?= $res['images'][$i]['id'] ?>&img=<?= $res['images'][$i]['url'] ?>">
                        BORRAR
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="align-items-end  row container-fluid">
            <div class="mb-3 col">
                <label class="form-label">Seleccione una imagen</label>
                <input class="form-control" type="file" name="imagen[]" multiple>
            </div>
            <div class="col mb-3 form-check">
                <input type="checkbox" class="form-check-input" name="principal" <?= $res['destacado'] == 1 ? "checked" : "" ?> value="1" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Servicio Principal</label>
            </div>
        </div>
        <div class="mb-3 container-fluid">
            <button type="submit" class="btn btn-dark" name="enviar" value="enviar">Enviar</button>
        </div>
    </form>
</body>