<?php     include("../common/header.php");   ?>


<?php hint("Hello \"class\", appends .php to end, defeat with NULL byte %00"); ?>


<form action="/hehe/index.php" method="GET">
    <input type="text" name="class">
</form>

<?php
include('includes/class_'.addslashes($_GET['class']).'.php');
?>

