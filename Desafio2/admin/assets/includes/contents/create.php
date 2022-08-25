<?php
    require_once(dirname(__DIR__,4) . "/classes/contents.php");
    $content=new Clases\Contents();
    $contents=array();

    if(isset($_POST) && !empty($_POST)){
        $contents['titulo'] = $_POST['titulo'];
        $contents['contenido'] = $_POST['contenido'];
        $contents['palabraClave'] = $_POST['palabraClave'];
        $contents['descripcion'] = $_POST['descripcion'];
        $contents['categoria'] = $_POST['categoria'];

        $content->create($contents);
    }
    
?>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <div class="container">
            <p>Titulo</p>
            <input type="text" name="titulo" required>
        </div>
        <div class="container">
            <p>Contenido</p>
            <input type="text" name="contenido" required>
            
        </div>
        <div class="container">
            <p>Palabras claves</p>
            <input type="text" name="palabraClave" required>
            
        </div>
        <div class="container">
            <p>Descripcion</p>
            <input type="text" name="descripcion" required>
            
        </div>
        <div class="container">
            <p>Categoria</p>
            <input type="text" name="categoria" required>
            
        </div>
        <div class="container">
            <input type="file" name="imagen" required>
        </div>
        <div class="container">
            <input type="submit" value="Enviar">
             
        </div>
    </form>
</body>
