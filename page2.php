<?php
session_start();
if(isset($_SESSION['nom']) && isset($_SESSION['prenom']) && isset($_SESSION['age'] )){
    echo "<p>".$_SESSION['prenom']." ". $_SESSION['nom'] ." ". $_SESSION['age'] . " ans </p>";
}
else {
    echo "<p>Problème sur les variables sessions</p>";
}