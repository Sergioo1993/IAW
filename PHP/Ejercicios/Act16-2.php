<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>Act16</h1>
    <?php

    function contraseña()
    {
        if ( $_REQUEST["passw"]==$_REQUEST["passw1"]) {
            echo "Las contraseñas son iguales.";


        }
        else{
            echo "Las contraseña no son correctas.";
        }
    }
    contraseña();
    ?>

    </body>
    </html>