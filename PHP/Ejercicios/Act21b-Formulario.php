<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>FORMULARIO Act21b</h1>

    <form method="GET" action="Act21b.php">
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


        ?>





        <input type="submit" value="ENVIAR">
    </form>
    </body>
    </html