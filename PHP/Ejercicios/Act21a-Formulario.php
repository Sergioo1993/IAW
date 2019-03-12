<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>FORMULARIO Act21a</h1>

    <form method="GET" action="Act21a.php">
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

        $sql=" SELECT * FROM cursos";
        $rs = mysqli_query($con, $sql);

        ?>
        <select name="cursos">

            <?php
            while($row=mysqli_fetch_array($rs)){
                echo "<option value='".$row['codigo']."'>".$row['nombrecurso']."</option>";
            }
            ?>
        </select>
        <input type="text" name="nombre1">
        <input type="submit" value="ENVIAR">
    </form>
    </body>
    </html