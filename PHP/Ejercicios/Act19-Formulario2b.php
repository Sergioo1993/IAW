<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>FORMULARIO Act19-2b</h1>

    <form method="GET" action="Act19-2b.php">
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

            $sql=" SELECT * FROM cursos ORDER BY nombrecurso ASC";
            $rs = mysqli_query($con, $sql);

        ?>
        <select name="curso">
            <option value="0">ALL</option>
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