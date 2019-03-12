<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>COUNT MYSQL PHP Act24a</h1>
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
    echo "<tr><th>ID</th><th>NOMBRECURSO</th></tr>";
    $total= "SELECT count(codigo) as total FROM cursos";
    $sql=" SELECT codigo, nombrecurso FROM cursos";
    echo $sql."<br/>";
    $rs= mysqli_query($con,$sql);
    $rs2= mysqli_fetch_array(mysqli_query($con,$total));
    echo "total ".$rs2['total'];
    while($row=mysqli_fetch_array($rs)){
        echo "<tr>";
        echo "<td>".$row['codigo']."</td>";
        echo "<td>".$row['nombrecurso']."</td>";
        echo "</tr>";
    }

    echo "</table>";


    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>