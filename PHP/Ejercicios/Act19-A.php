<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>QUERY MYSQL PHP Act19-A</h1>
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
    echo "<table border='1'>";
    echo "<tr><th>#</th><th>Codigo</th><th>NombreCurso</th></tr>";
    $sql=" SELECT * from cursos ";
    $rs = mysqli_query($con,$sql);
    $i=1;
    while($row= mysqli_fetch_array($rs)){
        echo "<tr>";
        echo "<td>".$i."</td>";
        echo "<td>".$row['codigo']."</td>";
        echo "<td>".$row['nombrecurso']."</td>";
        echo"</tr>";
        $i++;
    }

    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
