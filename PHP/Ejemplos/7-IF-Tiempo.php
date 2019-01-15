<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>PLANTILLA</h1>

    <?php
        $t=date("H:m");
            if ($t<"20"){
                echo "Son menos de las 20 "." son las : ".$t;
            }
            else {
                echo "Son mas de lsa 20"."Son las :".$t;
            }
    ?>
    </body>
    </html>