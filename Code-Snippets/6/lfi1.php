<?php     include("../common/header.php");   ?>


<?php hint("hello \"page\""); ?>

<form action="/dede/index.php" method="GET">
    <input type="text" name="page">
</form>

<?php
include($_GET["page"]);
?>
