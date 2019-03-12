<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Act37</title>
</head>

<body>
<?php
$data = date("d/m/Y");
if ($_REQUEST['dia']==date('d') && $_REQUEST['mes']==date('m') && $_REQUEST['any']==date('Y')){
echo "La data es correcta!";
}
else{
echo "La data es incorrecte! <br/>";
echo "Avui és: ".$data;
}
?>
</body>
</html>