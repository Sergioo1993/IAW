<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>Act12</h1>


    <?php
    $dias= array ("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sabado");
    $n=date("w");
    echo $dias[$n];
    ?>

    </body>
    </html>