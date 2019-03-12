<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>FORMULARIO PRUEBA EXAMEN FINAL</h1>

    <form method="GET" action="Prueba_examen_php.php">
        <?php
        $con=mysqli_connect("localhost","sergio","sergio","futbol");
        // Check connection
        if (mysqli_connect_errno($con))
        {
            echo "Failed to connect to MySQL: " .
                mysqli_connect_error();
        }
        else {
            echo "<p>OK: Connected to the Database.</p>";
        }

        $sql=" SELECT * FROM equipo";
        $rs = mysqli_query($con, $sql);

        ?>




        Nombre<input type="text" name="nombre1" value="Nombre"><br>
        Posicion<input type="text" name="posi1" value="Posicion"><br>
        Puntos<input type="text" name="puntos1" value="Puntos"><br>

        <input type="submit" value="ENVIAR">
    </form>
    </body>
    </html