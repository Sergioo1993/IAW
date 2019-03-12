
<?php
$con=mysqli_connect("localhost", "sergio", "sergio", "base1");
if (mysqli_connect_errno($con)){
	echo "Failed to connect to MYSQL: ".mysqli_connect_error();	
}
$sql ="select * from alumnos";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
while($row=mysqli_fetch_array($result)){
	echo "code: ".$row['code'];
    echo " Nombre: ".$row['nombre'];
    echo " Codigocurso: ".$row['codigocurso']."<br/>";
}
?>

