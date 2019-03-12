<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>FORMULARIO Act23a</h1>

    <form method="GET" action="Act23a.php">
        <?php
        $con=mysqli_connect("localhost","sergio","sergio","base1");
        // Check connection
        if (mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL: " .
                mysqli_connect_error();
        }
        else {
            echo "<p>OK: Connected to the Database.</p>";
        }

        $sql=" SELECT * FROM alumnos";
        $rs = mysqli_query($con, $sql);

        ?>


        Alumno<input type="text" name="alum1">

            <?php
            while($row=mysqli_fetch_array($rs)){
                echo "<option value='".$row['code']."'>".$row['code']."-".$row['nombre']."</option>";
            }
            ?>

        <input type="submit" value="ENVIAR">
    </form>
    </body>
    </html