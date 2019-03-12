<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>MODIFFY MYSQL PHP Act21c</h1>
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




    $sql="UPDATE article SET price = price *1.10";
    echo $sql."<br>";
    $rs = mysqli_query($con,$sql);
    echo "Se a modificado";


    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
