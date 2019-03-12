<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>INSERT MYSQL PHP Act22b</h1>
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




    $codigo = $_REQUEST['cate1'];
    $sql = "INSERT INTO `article` (`code`, `name`, `description`, `price`, `categorycode`, `bargain`) VALUES (NULL, '".$_REQUEST['name1']."', '".$_REQUEST['desc1']."', '".$_REQUEST['price1']."','".$_REQUEST['cate1']."','".$_REQUEST['barg1']."')";
    echo $sql."<br>";
    $rs = mysqli_query($con,$sql);
    echo "Se a modificado";


    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>