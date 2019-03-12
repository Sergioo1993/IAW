<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>MODIFFY MYSQL PHP Act21a</h1>
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



    $codigo = $_REQUEST['cursos'];
    $sql="UPDATE cursos SET nombrecurso='".$_REQUEST['nombre1']."' WHERE codigo=".$codigo;
    echo $sql."<br>";
    $rs = mysqli_query($con,$sql);
        echo "Se a modificado";


    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
