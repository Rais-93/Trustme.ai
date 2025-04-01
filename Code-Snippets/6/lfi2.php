<?php     include("../common/header.php");   ?>


<?php hint("whelo \"library\", world"); ?>

<form action="/hell/index.php" method="GET">
    <input type="text" name="library">
</form>

<?php
include("includes/".$_GET['library'].".php"); 
?>

