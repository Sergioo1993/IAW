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

    $sql=" CREATE TABLE trabajadores(nombre varchar (30), apellidos varchar (30), edad integer )";
    if (mysqli_query($con,$sql))
    {
        echo "TABLE created successfully";
    }
    else
    {
        echo "Error creating TABLE: " . mysqli_error($con);
    }

    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
