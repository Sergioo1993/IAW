<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>FORMULARIO Act22b</h1>

    <form method="GET" action="Act22b.php">
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

        $sql=" SELECT * FROM category";
        $rs = mysqli_query($con, $sql);

        ?>

        Nombre<input type="text" name="name1" value="Nombre"><br>
        Descripcion<input type="text" name="desc1" value="Descripcion"><br>
        Precio<input type="text" name="price1" value="Precio"><br>
        Bargain<input type="text" name="barg1" value="Bargain"><br>
        Categoria<select name="cate1">

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