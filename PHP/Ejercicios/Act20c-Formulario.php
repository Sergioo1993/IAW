<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>FORMULARIO Act20c-Formulario</h1>


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
    <form method="GET" action="Act20c.php">
            <?php
            while($row=mysqli_fetch_array($rs)){
                echo "<input type='checkbox' name='".$row['name']."' value='".$row['code']."'>".$row['name']."</input>";
            }
            ?>
            <input type="submit" value="Submit">
        </form>

    </form>
    </body>
    </html