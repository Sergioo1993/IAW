<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>ConnectMYSQL</h1>
<?php
// Create connection
$con=mysqli_connect("localhost","sergio","sergio","asix2018");
// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to MySQL: " .
        mysqli_connect_error();
}
else {
    echo "<p>OK: Connected to the Database.</p>";
}
//Jugar con la base de datos.
// Create database.
$nomBDD="prueba2019";
$sql=" CREATE DATABASE ".$nomBDD;
if (mysqli_query($con,$sql))
{
    echo "Database ".$nomBDD."created successfully";
}
else
{
    echo "Error creating database: " . mysqli_error($con);
}

//Cerremaos la conexion.
mysqli_close($con);

?>
    </body>
    </html>