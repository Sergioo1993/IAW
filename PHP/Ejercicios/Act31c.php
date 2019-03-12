<?php session_start(); ?>
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Act31</title>
</head>

<body>
<?php
if (isset($_SESSION['nombre'])){
    echo "Welcome ".$_SESSION['nombre'];
}
else{
    echo "You can view this page.";
}

?>
</body>
</html>