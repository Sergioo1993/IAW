<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>QUERY MYSQL PHP</h1>
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
    echo "<table border='1'>";
    echo "<tr><th>#</th><th>Nombre</th><th>Apellidos</th><th>Edad</th></tr>";
    $sql=" SELECT * from trabajadores ORDER BY edad asc ";
    $rs = mysqli_query($con,$sql);
    $i=1;
    while($row= mysqli_fetch_array($rs)){
        echo "<tr>";
            echo "<td>".$i."</td>";
            echo "<td>".$row['nombre']."</td>";
            echo "<td>".$row['apellidos']."</td>";
            echo "<td>".$row['edad']."</td>";
        echo"</tr>";
        $i++;
    }

    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
