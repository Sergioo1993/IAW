<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>FORMULARIO Act23b</h1>

    <form method="GET" action="Act23b.php">
        <?php
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

        $sql=" SELECT * FROM category order by code";
        $rs = mysqli_query($con, $sql);

        ?>

        <h3>Escoge una categoria:</h3>
        <select name="cate1">

        <?php
        while($row=mysqli_fetch_array($rs)){
            echo "<option value='".$row['code']."'>".$row['name']."</option>";
        }
        ?>

        <input type="submit" value="ENVIAR">
    </form>
    </body>
    </html