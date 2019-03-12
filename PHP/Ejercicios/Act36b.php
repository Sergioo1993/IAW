<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Act36b</title>
</head>

<body>
<?php
$file = fopen("InicisSessio.txt", "r") or exit("File not created!.");
while(!feof($file)) {
    $linea = fgets($file);
    echo $linea . "<br />";
}
fclose($file);
?>
</body>
</html>