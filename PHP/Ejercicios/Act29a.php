
<?php

setcookie("user",$_REQUEST['nom1'],time()+60*60*24*365);
    echo "<h1> COOKIE CREATE </h1>";
    echo "<a href='Act29a.php'>Go to Page 1</a>"
?>