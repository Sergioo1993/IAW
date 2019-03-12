<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Act38-Formulario</title>
</head>

<body>
<form action="Act38b.php" method="post">
    Code <input type="text" name="code"/>
    Nombre <input type="text" name="nombre"/>
    Mail <input type="text" name="mail"/>
    Codigocurso <input type="text" name="codigocurso"/>
    Dia <select name="dia">
        <?php
        for ($i=1; $i<32; $i++){
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>
    Mes <select name="mes">
        <?php
        for ($i=1; $i<13; $i++){
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>
    Any <select name="any">
        <?php
        for ($i=1900; $i<2015; $i++){
            echo '<option value="'.$i.'">'.$i.'</option>';
        }
        ?>
    </select>
    <input type="submit" value="Send">
</form>
</body>
</html>