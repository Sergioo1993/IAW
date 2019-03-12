<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Act33a</title>
</head>

<body>
<?php
if(isset($_REQUEST['error'])){
    echo "Incorrect password!";
}
?>

<form action="Act33b.php" method="post">
    Intro password: <input type="password" name="pass"><br>
    <input type="submit" value="Send">
</form>
</body>
</html>