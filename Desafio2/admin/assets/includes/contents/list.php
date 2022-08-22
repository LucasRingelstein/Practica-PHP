<?php
    require(dirname(__DIR__,4). "/classes/contents.php")
?>
<!DOCTYPE html>
<body>
    <?php
        $contents=new Clases\Contents();
        $contents->list();
    ?>
</body>
</html>
