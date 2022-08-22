<?php
    include("assets/includes/header.inc.php");
    include("assets/includes/nav.inc.php");
    if(!empty($_GET)){
        include("assets/includes/".$_GET["op"]."/".$_GET["accion"].".php");
    }else include("assets/includes/contents/list.php");
    include("assets/includes/footer.inc.php"); 
?>