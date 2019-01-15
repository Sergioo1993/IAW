<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>Act3</h1>

    <?php
        $name= "sergio";
        $edad=25;
        $weight=55;
        $category= "boxeador";
        $champion=true;


    ?>
    <table border="2px">
        <tr>
            <td>NOMBRE</td>
            <td>EDAD</td>
            <td>WEIGHT</td>
            <td>CATEGORY</td>
            <td>CHAMPION</td>
        </tr>
        <tr>
            <td><?php echo $name; ?></td>
            <td><?php echo $edad; ?></td>
            <td><?php echo $weight; ?></td>
            <td><?php echo $category; ?></td>
            <td><?php echo $champion; ?></td>
        </tr>
    </table>
    </body>
    </html>