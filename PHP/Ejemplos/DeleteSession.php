<?php
session_start();
session_destroy();
echo "<h1>SESSION ELIMINATED.</h1>";
echo "<a href='SessionGrande.php'> GoBack</a>";
?>