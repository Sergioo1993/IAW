<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>INSERT MYSQL PHP Act22a</h1>
    <?php
    // Create connection
    $con=mysqli_connect("localhost","sergio","sergio","base1");
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




    $codigo = $_REQUEST['cursos1'];
    $sql = "INSERT INTO `alumnos` (`code`, `nombre`, `mail`, `codigocurso`) VALUES (NULL, '".$_REQUEST['nombre1']."', '".$_REQUEST['mail1']."', '".$_REQUEST['cursos1']."')";
    echo $sql."<br>";
    $rs = mysqli_query($con,$sql);
    echo "Se a modificado";


    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>