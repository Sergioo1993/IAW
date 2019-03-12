<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>Formulario Insert MYSQL PHP</h1>
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
    $nombre = $_REQUEST['nombre'];
    $apellidos = $_REQUEST['apellidos'];
    $edad = $_REQUEST['edad'];
    $sql=" INSERT INTO trabajadores (nombre, apellidos, edad)
 values ('$nombre','$apellidos','$edad')";
    if (mysqli_query($con,$sql))
    {
        echo "Inserterd row successfully";
    }
    else
    {
        echo "Error inserting row: " . mysqli_error($con);
    }

    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
