<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>Act8-2</h1>
    Bienvenido tu nombre es: <?php echo $_REQUEST["n"]; ?>!<br>

    <?php
    if ($_REQUEST["estudios"]==1){

        echo " No tienes estudios.";
    }
    else if($_REQUEST["estudios"]==2){

        echo "Tienes estudios de nivel 2.";
    }
    else if($_REQUEST["estudios"]==3){

        echo "Tienes estudios de nivel 3.";
    }
    else if($_REQUEST["estudios"]==4){

        echo "Tienes estudios de nivel 4.";
    }
    ?>

    </body>
    </html>