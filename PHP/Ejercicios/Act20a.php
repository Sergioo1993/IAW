<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>QUERY MYSQL PHP Act20</h1>
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

    $sql = " SELECT * from cursos WHERE codigo=" . $codigo;

    $rs = mysqli_query($con,$sql);
    if(mysqli_num_rows($rs)==0){
        echo "No existe";
    }
    else{
        echo "Existe"."<br>";
        $sql="DELETE FROM cursos WHERE codigo=".$codigo." ";
        mysqli_query($con,$sql);
        echo "Se a borrado";
    }


    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
