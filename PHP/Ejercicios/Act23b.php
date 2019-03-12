<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>SELECT MYSQL PHP Act23b</h1>
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


    $sql="SELECT * FROM article where categorycode= ".$_REQUEST['cate1'];
    $rs = mysqli_query($con,$sql);


    while ($row = mysqli_fetch_array($rs)){
        echo "<p>";
        echo $row['code'] . " ";
        echo $row['name'] . " ";
        echo $row['description'] . " ";
        echo $row['price'] . " ";
        echo $row['categorycode'] . " ";
        echo $row['bargain'];
        echo "</p>";

    }


    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>