<DOCTYPE html>
    <html lang="en">
    <title>FileOpenTexto</title>
    <body>
    <h1>FileOpen & FClose Texto por linea</h1>

    <?php
        $f = fopen("Hello.txt","r") or exit ("Unable to open file!");

        $line=1;
        while (!feof($f)){
            echo $line." :".fgets($f)."<br>";
            $line++;
        }

        fclose($f);
    ?>
    </body>
    </html>