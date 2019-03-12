<?php
if(isset($_REQUEST['categoria'])){
    if($_REQUEST['categoria']=='politic'){
        setcookie("categoria",$_REQUEST['categoria'],time()+3600);
    }
    elseif($_REQUEST['categoria']=='economy'){
        setcookie("categoria",$_REQUEST['categoria'],time()+3600);
    }
    elseif($_REQUEST['categoria']=='sports'){
        setcookie("categoria",$_REQUEST['categoria'],time()+3600);
    }
    elseif($_REQUEST['categoria']=='delete'){
        setcookie("categoria",$_REQUEST['categoria'],time()-3600);
    }
}

header('Location: Act30.php');
exit;
?>