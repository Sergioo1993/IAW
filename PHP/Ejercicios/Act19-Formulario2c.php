<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>FORMULARIO Act19-2c</h1>

    <form method="GET" action="Act19-2c.php">
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

        $sql=" SELECT * FROM category ORDER BY name ASC";
        $rs = mysqli_query($con, $sql);

        ?>
        <select name="category">

            <?php
            while($row=mysqli_fetch_array($rs)){
                echo "<option value='".$row['code']."'>".$row['name']."</option>";
            }
            ?>
        </select>
        <input type="submit" value="ENVIAR">
    </form>
    </body>
    </html