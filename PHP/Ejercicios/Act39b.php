<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Act39b</title>
</head>

<body>
<?php
echo $_REQUEST['nombre']." with mail ".$_REQUEST['mail']." and salary ";
$salary=$_REQUEST['salary'];
if (strlen($salary) < 8){
    $num=8-strlen($salary);
    for ($i=$num; $i<8; $i++){
        echo "0";
    }
}
echo $salary." €";
?>
</body>
</html>