<DOCTYPE html>
    <html lang="en">
    <body>
    <title>Upload_File</title>
    <h1>Upload_File To PHP</h1>

    <?php
        if ($_FILES["file"]["error"] > 0){
            echo "Error: " . $_FILES["file"]["error"] . "<br>";
        }
        else
        {
            echo "Upload: " . $_FILES["file"]["name"] . "<br>";
            echo "Type: " . $_FILES["file"]["type"] . "<br>";
            echo "Size: " . ($_FILES["file"]["size"] / 1024) . "kB<br>";
            echo "Stored in: " . $_FILES["file"]["tmp_name"];
        }
    ?>
    </body>
    </html>