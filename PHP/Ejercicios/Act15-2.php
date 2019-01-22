<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>Act15</h1>


    <?php
    $cuentas = array(
        array("pepe","pepe2"),
        array("toni","toni2"),
        array("sergio","sergio2"),
        array("andres","andres2"),
        array("cristian","cristian2")
    );

    $good = false;
    for ($f=0; $f<count($cuentas); $f++){
        $user = $cuentas[$f][0];
        $passw = $cuentas[$f][1];

                if ($user==$_REQUEST["user"] && $passw==$_REQUEST["passw"]){
                    echo "El usuario y contraseña es correcta.";
                    $good=true;
                    break;
                }
        }
                if(!$good){
                    echo "El usuario y/o contraseña no son correctas.";
                }
    ?>

    </body>
    </html>