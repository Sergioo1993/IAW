<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>QUERY MYSQL PHP Act19-2B</h1>
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

    $codigo = $_REQUEST['curso'];
    if($codigo==0){
        $sql=" SELECT * from alumnos";
    }else {
        $sql = " SELECT * from alumnos WHERE codigocurso=" . $codigo;
    }
    $rs = mysqli_query($con,$sql);
    while($row= mysqli_fetch_array($rs)){
        echo "<p>".$row['nombre']."</p>";
    }

    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
