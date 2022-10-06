<?php
require(dirname(__DIR__, 4) . "/classes/contents.php");

// Se crean las variables necesarias
$contents = new Clases\Contents();

// Se llama a la funcion

if (isset($_GET['delete'])) {
    $contents->delete($_GET['delete']);
}
$res = $contents->list();

if (isset($_GET['view'])) {
    $res = $contents->view($_GET['view']);
} else {
    $res = $contents->list();
}
?>
<div class="container card cardServicio text-center border border-0 ">
    <div class="col texto">
        <div class="card-body bodyPrincipal">
            <h1 class="card-text pServicioPrincipal"><b>SERVICIOS</b></h1>
            <hr>
        </div>
    </div>
</div>
<?php if(isset($res[0])){ ?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>TITULO</th>
                <th>CONTENIDO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($res as $contenido) { ?>
                <tr>
                    <td><?php echo $contenido['title'] ?></td>
                    <td><?php echo $contenido['content'] ?></td>
                    <td>
                        <a type="button" class="btn btn-primary" href="index.php?op=contents&accion=update&id=<?= $contenido['id'] ?>">
                            ACTUALIZAR
                        </a>
                    </td>
                    <td>
                        <a type="button" class="btn btn-danger" href="index.php?op=contents&accion=list&delete=<?= $contenido['id'] ?>">

                            BORRAR
                        </a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
<?php }else{ ?>
    <div class="container card cardServicio text-center border border-0 ">
        <div class="col texto">
            <div class="card-body bodyPrincipal">
                <h1 class="card-text pServicioPrincipal"><b>No hay ningun servicio creado, cree uno haciendo <a href="?op=contents&accion=create">click aqui</a></b></h1>

            </div>
        </div>
    </div>
<?php } ?>