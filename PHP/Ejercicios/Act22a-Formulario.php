<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>FORMULARIO Act22a</h1>

    <form method="GET" action="Act22a.php">
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




        Nombre<input type="text" name="nombre1" value="Nombre"><br>
        Email<input type="text" name="mail1" value="Email"><br>
        Curso<select name="cursos1">

            <?php
            while($row=mysqli_fetch_array($rs)){
                echo "<option value='".$row['codigo']."'>".$row['nombrecurso']."</option>";
            }
            ?>
        </select>
        <input type="submit" value="ENVIAR">
    </form>
    </body>
    </html