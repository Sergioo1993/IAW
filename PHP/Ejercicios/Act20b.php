<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>DELETE MYSQL PHP Act20b</h1>
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



    $sql = " SELECT * FROM cursos";

    $rs = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs)==0){
        echo "No existe";
    }
    else{

        $sql="DELETE FROM cursos";
        mysqli_query($con,$sql);
        echo "Se han borrado todas las rows";
    }


    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
