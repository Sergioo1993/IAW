<DOCTYPE html>
        <html lang="en">
        <body>
        <h1>Act9-2</h1>
        <?php if ($_REQUEST["n"]) {


            $num = 0;
            if (isset($_REQUEST["sport1"])) {
                $num++;
                $sport = "Football";
            }
            if (isset($_REQUEST["sport2"])) {
                $num++;
                $sport = $sport . "Tennis";
            }
            if (isset($_REQUEST["sport3"])) {
                $num++;
                $sport = $sport . "Basketball";
            }
            if (isset ($_REQUEST["sport4"])) {
                $num++;
                $sport = $sport . "Golf";
            }
            echo $_REQUEST["n"]." Practica este numero de deportes: ".$num." Que son: ".$sport;
        }
        ?>

        </body>
        </html>