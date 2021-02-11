<?php

if (!isset($_POST['user']) || !isset($_POST['pass'])){
    header('Location: index.php?e=1');
}
else {
    setcookie("pass",$_POST['pass'],time()+1);
    setcookie("user",$_POST['user'],time()+1);
        header('Location: cookie.php');
}