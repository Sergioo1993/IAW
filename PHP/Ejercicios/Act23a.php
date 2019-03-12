<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>SELECT MYSQL PHP Act23a</h1>
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


        $sql="SELECT * FROM alumnos where code= ".$_REQUEST['alum1'];
        $rs = mysqli_query($con,$sql);

        if(mysqli_num_rows($rs)==1) {
            $row = mysqli_fetch_array($rs);
                echo "<p>";
                echo $row['code'] . " ";
                echo $row['nombre'] . " ";
                echo $row['mail'] . " ";
                echo $row['codigocurso'];
                echo "</p>";

        }
        else {
            echo "No existe el alumno";
        }


    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>