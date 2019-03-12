<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>COUNT MYSQL PHP Act25b</h1>
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


    $sql="select count(category.code) as sum, category.name as name from article , category  where article.categorycode=category.code group by category.name";
    $rs = mysqli_query($con,$sql);


    while ($row = mysqli_fetch_array($rs)){
        echo "<br>";
        echo "Category: ".$row['name']."</br>";
        echo "Number of article: ".$row['sum']."</br>";
        echo "Article: ";
        $sql2="select article.name as name, article.price as price from article , category  where article.categorycode=category.code and category.name='".$row['name']."'";
        $rs2 = mysqli_query($con, $sql2);
        while ($row2 = mysqli_fetch_array($rs2)){
            echo $row2['name']."- ";
            echo $row2['price']."€ // ";
        }
        echo "</br>";
    }

    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>