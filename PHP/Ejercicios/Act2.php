<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>ACT2</h1>

    <?php
    $num=rand(0,10);
    echo "Tu nota es: $num<br>";
    if ($num>=5){
        echo "Estas aprobado";
    }
    else{
        echo "Estas suspendido";
    }
    ?>
    </body>
    </html>