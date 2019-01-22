<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>Act10-2</h1>
    Bienvenido tu nombre es: <?php echo $_REQUEST["n"]; ?>!<br>

    <?php
    if ($_REQUEST["salario"]==1){

        echo " Tu sueldo esta entre 1€ y 1000€.";
    }
    else if($_REQUEST["salario"]==2){

        echo "Tu sueldo esta entre 1001€ y 3000€.";
    }
    else if($_REQUEST["salario"]==3){

        echo "Tu salario es de mas de 3000€ y tienes que pagar impuestos.";
    }
    ?>

    </body>
    </html>