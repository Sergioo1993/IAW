<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>QUERY MYSQL PHP Act19-2C</h1>
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

    $codigo = $_REQUEST['category'];

    $sql = " SELECT * from article WHERE categorycode=" . $codigo;

    $rs = mysqli_query($con,$sql);
    while($row= mysqli_fetch_array($rs)){
        echo "<p>".$row['name']."</p>";
    }

    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
