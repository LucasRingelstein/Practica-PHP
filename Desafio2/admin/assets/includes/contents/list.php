<?php
    require(dirname(__DIR__,4). "/classes/contents.php")
?>
<!DOCTYPE html>
<body>
    <div>
        <div class="row">
            <div class="col">ID</div>
            <div class="col">TITULO</div>
            <div class="col">CONTENIDO</div>
            <div class="col">PALABRA CLAVE</div>
            <div class="col">DESCRIPCION</div>
            <div class="col">CATEGORIA</div>
        </div>
        <?php
            // Se crean las variables necesarias
            $content=new Clases\Contents();
            $contents=array();
            $contents["items"] = array();

            // Se llama a la funcion
            $res = $content->list();

            // Se pregunta si existen filas en la tabla
            if($res->rowCount()){
                while ($row = $res->fetch(PDO::FETCH_ASSOC)){
                        $id = $row['id'];
                        $title = $row['title'];
                        $content= $row['content'];
                        $keywords = $row['keywords'];
                        $description = $row['description'];
                        $category = $row['category'];
                        ?>
                }

            }else{
                echo "No hay elementos en la tabla";
            }

        ?>
    </div>
</body>
</html>
