<?PHP
    session_start();
    $_SESSION['user']="PACO";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies</title>
    <style>
        * {
            margin-left:20px;
        }
    </style>
</head>
<body>
<h1>SESSIONS (PHP).</h1>
<?php
    echo "<h2>".$_SESSION['user']."</h2>";


?>
</body>
</html>