<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>QUERY MYSQL PHP Act20c</h1>
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

    $sql=" SELECT * FROM category";
    $rs = mysqli_query($con, $sql);
    while($row=mysqli_fetch_array($rs)){
        $nombre = $row['name'];
        if(isset($_REQUEST[$nombre])){
            echo "HAS clicado ".$row['name']."<br/>";

            $sql2="DELETE FROM article WHERE categorycode=".$row['code'];
            echo $sql2."<br/>";
            mysqli_query($con, $sql2);

            $sql3="DELETE FROM category WHERE code=".$row['code'];
            echo $sql3."<br/>";
            mysqli_query($con, $sql3);
        }
    }


    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>
