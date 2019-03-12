<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Act33b</title>
</head>

<body>
<?php
if ($_REQUEST['pass']<>"1234") {
    header("Location: Act33a.php?error=1");
}
else {echo "Benvingut, la contrasenya es la correcta";}
?>
</body>
</html>