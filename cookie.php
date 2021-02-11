<?php
if (!isset($_COOKIE['user']) || !isset($_COOKIE['pass'])){
    header('Location: index.php?e=2');
}
else {

    echo "<p>Hello ".$_COOKIE['user']." votre pass est ".$_COOKIE['pass']."</p>";
}