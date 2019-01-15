<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>Act7-2</h1>
    Bienvenido tu nombre es: <?php echo $_REQUEST["n"]; ?>!<br>
    Tu edad es :
    <?php
    if ($_REQUEST["num"]>=18){
        echo $_REQUEST["num"];
        echo " Con lo cual eres un adulto.";
    }
    else{
        echo $_REQUEST["num"];
        echo "Con lo cual eres menor de edad";
    }
    ?>

    </body>
    </html>