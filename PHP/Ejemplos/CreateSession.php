<?php
session_start();
$_SESSION['user']=$_REQUEST['user'];
echo "<h1>SESSION CREATED.</h1>";
echo "<a href='SessionGrande.php'> GoBack</a>";
?>