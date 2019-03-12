<html>
<head> <title>Page 1</title> </head>
<body
    <?php
    if (isset($_COOKIE['color']))
        echo " bgcolor=\"$_COOKIE[color]\"";
    ?>
>
<form action="Act29a.php" method="post">
    introdueix el teu nom  <input type="text" name="nom1">
</form>
</body>
</html>