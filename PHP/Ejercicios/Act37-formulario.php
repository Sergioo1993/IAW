<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Act37-Formulario</title>
</head>

<body>
<form action="Act37.php" method="post">
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
	Any <input type="text" name="any" size="6">
<input type="submit" value="Send">
</form>
</body>
</html>