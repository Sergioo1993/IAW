<!doctype html>
<?php
setcookie("categoria",$_REQUEST['categoria'],time()+3600);
?>
<html>
<head>
    <meta charset="utf-8">
    <title>Act30-Formulario</title>
</head>

<body>
<h2>Noticies</h2>
<form action="Act30a.php" method="get">
    Politics: <input type="radio" name="categoria" value="politica"/>
    Economy: <input type="radio" name="categoria" value="economia"/>
    Sports: <input type="radio" name="categoria" value="sports"/><br/><hr/>
    <input type="submit" value="Set Cookie"/>
</form>
<form action="ex_php30.php" method="post">
    <input type="submit" value="Delete Cookie"/>
    <input type="text" name="del" value="esborrar" style="visibility:hidden"/>
</form>
<?php
if(isset($_COOKIE['categoria'])){
    if($_COOKIE['categoria']=='politica'){
        echo "<h1>Politica</h1>";
    }
    elseif($_COOKIE['categoria']=='economia'){
        echo "<h1>Economia</h1>";
    }
    elseif($_COOKIE['categoria']=='sports'){
        echo "<h1>Sports</h1>";
    }
}
else{
    echo "<h1>Politica</h1>";
    echo "<h1>Economia</h1>";
    echo "<h1>Sports</h1>";
}
?>
</body>
</html>