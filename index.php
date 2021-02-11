<?php
session_start();
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>exo172</title>
</head>
<body>

<p></p>
    <?php
    if (isset($_GET['e'])){
        if ($_GET['e'] === '1'){
            echo "<p class='error'>Problème lors de l'envoi des données du formulaire</p>";
        }
        elseif ($_GET['e'] === '2'){
            echo "<p class='error'>Problème lors du traitement des données du formulaire</p>";
        }
    }
    //1
    echo "<p>user agent : ".$_SERVER['HTTP_USER_AGENT']."</p>";
    echo "<p>adresse client : ".$_SERVER["REMOTE_ADDR"]."</p>";
    echo "<p>Nom du serveur : ".$_SERVER["SERVER_NAME"]."</p>";
    //2
    $nom = "daddario";
    $prenom = "Alexandra";
    $age = 35;
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['age'] = $age;
    echo "<a href='page2.php'>Exercice 2</a>";
    //3
    ?>
    <form action="form.php" method="post">
        <div>
            <label for="user">Votre login</label>
            <input type="text" name="user" id="user">
        </div>
        <div>
            <label for="pass">Votre mot de passe</label>
            <input type="password" name="pass" id="pass">
        </div>
        <div>
            <input type="submit">
        </div>
    </form>
</body>
</html>
