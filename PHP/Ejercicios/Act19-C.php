<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>QUERY MYSQL PHP Act19-C</h1>
    <?php
    // Create connection
    $con=mysqli_connect("localhost","sergio","sergio","shop");
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
    echo "<tr><th>#</th><th>Codigo</th><th>Nombre</th><th>Description</th><th>Precio</th><th>CodigoCategoria</th><th>Bargain</th></tr>";
    $sql=" SELECT * from article order by price desc ";
    $rs = mysqli_query($con,$sql);
    $i=1;
    while($row= mysqli_fetch_array($rs)){
        if($row['bargain']==1) {
            echo "<tr style='background-color:red'>";
        }
        else {
            echo "<tr>";
        }
        echo "<td>".$i."</td>";
        echo "<td>".$row['code']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['description']."</td>";
        echo "<td>".$row['price']."</td>";
        echo "<td>".$row['categorycode']."</td>";
        echo "<td>".$row['bargain']."</td>";
        echo"</tr>";
        $i++;
    }

    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
