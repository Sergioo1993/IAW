<?php
session_start();
$con=mysqli_connect("localhost", "sergio", "sergio", "base1");
if (mysqli_connect_errno($con)){
    echo "Failed to connect to MYSQL: ".mysqli_connect_error();
}

$sql ="select name from alumnos where mail='".$_REQUEST['mail']."'";
$rs = mysqli_query($con,$sql);
$row = mysqli_fetch_array($rs);
$_SESSION['nombre']=$row['nombre'];
header('Location: Act31c.php');
exit;
?>