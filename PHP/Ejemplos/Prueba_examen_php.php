<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>PRUEBA EXAMEN PHP FINAL</h1>
    <?php
    // Create connection
    $con=mysqli_connect("localhost","sergio","sergio","futbol");
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


    $sql = "INSERT INTO `equipo` (`code`, `nombre`, `posicion`, `puntos`) VALUES (NULL, '".$_REQUEST['nombre1']."', '".$_REQUEST['posi1']."', '".$_REQUEST['puntos1']."')";
    echo $sql."<br>";
    $rs = mysqli_query($con,$sql);
    echo "Se a modificado";

    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>