<?php
$con=mysqli_connect("localhost", "sergio", "sergio", "base1");
if (mysqli_connect_errno($con)){
    echo "Failed to connect to MYSQL: ".mysqli_connect_error();
}
$sql="insert into alumnos (code, nombre, mail, codigocurso, dia, mes, any) values ('".$_REQUEST['code']."', '".$_REQUEST['nombre']."', ".$_REQUEST['mail']."', ".$_REQUEST['codigocurso'].", ".$_REQUEST['dia'].", ".$_REQUEST['mes'].", ".$_REQUEST['any'].")";
mysqli_query($con,$sql);

mysqli_close($con);
header('Location: Act38b.php');
exit;
?>