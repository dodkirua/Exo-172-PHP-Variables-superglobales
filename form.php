<?php

if (!isset($_POST['user']) || !isset($_POST['pass'])){
    header('Location: index.php?e=1');
}
else {
    setcookie("pass",$_POST['pass']);
    setcookie("user",$_POST['user']);
        header('Location: cookie.php');
}