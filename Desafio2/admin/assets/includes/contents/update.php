<?php

use Clases\Contents;

        require(dirname(__DIR__,4). "/classes/contents.php");
        // Se crean las variables necesarias
        $contents=new Clases\Contents();
        

        
    
        // Se llama a la funcion
        $res = $contents->view($_GET['id']);
        if(isset($_POST["enviar"]) && !empty($_POST["enviar"])){
            $update['title'] = $_POST['titulo'];
            $update['content'] = $_POST['contenido'];
            $update['keywords'] = $_POST['palabraClave'];
            $update['description'] = $_POST['descripcion'];
            $update['category'] = $_POST['categoria'];

            $contents->update($_GET['id'],$update);

            header('Location: index.php');
        }


?>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <p>Titulo</p>
            <input type="text" value="<?php echo $res['title'] ?>" name="titulo" required>
        </div>
        <div class="container">
            <p>Contenido</p>
            <input type="text" value="<?php echo $res['content'] ?>" name="contenido" required>
            
        </div>
        <div class="container">
            <p>Palabras claves</p>
            <input type="text" value="<?php echo $res['keywords'] ?>" name="palabraClave" required>
            
        </div>
        <div class="container">
            <p>Descripcion</p>
            <input type="text" value="<?php echo $res['description'] ?>" name="descripcion" required>
            
        </div>
        <div class="container">
            <p>Categoria</p>
            <input type="text" value="<?php echo $res['category'] ?>" name="categoria" required>
            
        </div>
        <div class="container">
            <input type="file"  name="imagen" value="<?php echo $res['category'] ?>" required>
        </div>
        <div class="container">
            <input type="submit" value="Enviar" name="enviar">

             
        </div>
    </form>
</body>