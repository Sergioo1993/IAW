<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>COUNT MYSQL PHP Act25a</h1>
    <?php
    // Create connection
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
    //Jugar con la base de datos.
    // Create database.


    $sql="select count(alumnos.code) as sum, cursos.nombrecurso as curso from alumnos, cursos where alumnos.codigocurso=cursos.codigo group by alumnos.codigocurso";
    $rs = mysqli_query($con,$sql);

    while ($row = mysqli_fetch_array($rs)){
        echo "<br>";
        echo "Nom del curs: ".$row['curso']."</br>";
        echo "Nombre de estudiants: ".$row['sum']."</br>";
        echo "Estudiants: ";
        $sql2="select alumnos.nombre from alumnos, cursos where alumnos.codigocurso=cursos.codigo and cursos.nombrecurso='".$row['curso']."'";
        $rs2 = mysqli_query($con, $sql2);
        while ($row2 = mysqli_fetch_array($rs2)){
            echo $row2['nombre'].", ";
        }
        echo "</br>";
    }

    //Cerremaos la conexion.
    mysqli_close($con);

    ?>
    </body>
    </html>