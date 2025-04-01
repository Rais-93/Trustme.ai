<?php     include("../common/header.php");   ?>


<?php hint("Helo \"file\", World /. (Hello)"); ?>


<form action="/Hello/index.php" method="GET">
    <input type="text" name="file">
</form>


<?php
if (substr($_GET['file'], -4, 4) != '.php')
 echo file_get_contents($_GET['file']);
else
 echo 'You are not allowed to see source files!'."\n";
?>

