<DOCTYPE html>
    <html lang="en">
    <title>FileOpenTexto</title>
    <body>
    <h1>FileWritePHP</h1>

    <?php

    $myArray = ['VOLVO','SEAT','BMW'];


    $f = fopen("CarArray.txt","w") or exit ("Unable to open file!");


    for($i=0; $i<count($myArray); $i++){
        $car=$myArray[$i];
        fputs($f, $car."\n");
        echo "<p>Writing".$car."in the file.</p>";

    }

    fclose($f);
    ?>
    </body>
    </html>