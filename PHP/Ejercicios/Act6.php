<DOCTYPE html>
    <html lang="en">
    <body>
    <h1>Act6</h1>
    <h2>FOR</h2>
    <?php
    for ($f=0;$f<=10;$f++){
        echo $f*2;
        echo "<br>";
    }
    ?>
    <br>
    <br>
    <h2>WHILE</h2>
    <?php

    $x=0;
    while ($x<=10){
        echo $x*2;
        echo "<br>";
        $x++;
    }
    ?>
    <h2>DO-WHILE</h2>
    <?php

    $x=0;
    do{
            echo $x*2;
            echo "<br>";
            $x++;
    }while($x<=10);
    ?>
    </body>
    </html>