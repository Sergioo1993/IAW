<DOCTYPE html>
    <html lang="en">
    <title>FileOpenTexto</title>
    <body>
    <h1>FileOpen & FClose Texto por Caracter</h1>

    <?php
    $f = fopen("Hello.txt","r") or exit ("Unable to open file!");

    $numchar=0;
    while (!feof($f)){
        echo fgetc($f)."<br>";
        $numchar++;
    }
    echo "<p><b>num.chars: </b>".$numchar."</p>";
    fclose($f);
    ?>
    </body>
    </html>