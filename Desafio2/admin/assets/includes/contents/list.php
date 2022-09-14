<?php
    require(dirname(__DIR__,4). "/classes/contents.php");
    // Se crean las variables necesarias
    $contents=new Clases\Contents();

    // Se llama a la funcion
    
    if(isset($_GET['delete'])){
        $res = $contents->delete($_GET['delete']);
    }
    $res = $contents->list();

    if(isset($_GET['view'])){
        $res = $contents->view($_GET['view']);
    }else{
    $res = $contents->list();
    }
?>

<!DOCTYPE html>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>TITULO</th>
                <th>CONTENIDO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($res as $contenido) {?>
                <tr>
                    <td><?php echo $contenido['title'] ?></td>
                    <td><?php echo $contenido['content'] ?></td>
                    <td>
                        <a href="index.php?op=contents&accion=update&id=<?= $contenido['id'] ?>">
                            ACTUALIZAR
                        </a>
                    </td>
                    <td>
                        <a href="index.php?op=contents&accion=list&delete=<?= $contenido['id'] ?>">
                            BORRAR
                        </a>
                    </td>
                </tr>
            <?php } ?>    
            </tbody>
        
    </table>
    
</body>
</html>

