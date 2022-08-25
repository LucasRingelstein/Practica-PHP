<?php
    require(dirname(__DIR__,4). "/classes/contents.php");
    // Se crean las variables necesarias
    $contents=new Clases\Contents();

    // Se llama a la funcion
    
    if(isset($_GET['delete'])){
        $res = $contents->delete($_GET['delete']);
    }
    $res = $contents->list();
    


?>
<!DOCTYPE html>
<body>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>TITULO</th>
                <th>CONTENIDO</th>
                <th>PALABRA CLAVE</th>
                <th>DESCRIPCION</th>
                <th>CATEGORIA</th>
                <th>ACCIONES</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($res as $contenido) {?>
                <tr>
                    <td><?php echo $contenido['id'] ?></td>
                    <td><?php echo $contenido['title'] ?></td>
                    <td><?php echo $contenido['content'] ?></td>
                    <td><?php echo $contenido['keywords'] ?></td>
                    <td><?php echo $contenido['description'] ?></td>
                    <td><?php echo $contenido['category'] ?></td>
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

