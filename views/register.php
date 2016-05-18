<?php
echo "<h2>Créer un compte : </h2>";
$receiving = ('POST' === $_SERVER['REQUEST_METHOD']);

//-----------------------------NOM-------------------------------------------------------
$nom = "";
$nom_valide = true;
$nom_msg_validation = '';
if ($receiving && array_key_exists('nom', $_POST)) {
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_STRING);
    $nom_valide = (1 === preg_match('/\w{2,}/', $nom));
    if (!$nom_valide) {
        $nom_msg_validation = "Votre nom n'est pas valide,ce dernier doit comporter au moins deux lettres";
    }
}
//-----------------------------PASSWORD-------------------------------------------------------
$password = "";
$password_valide = true;
$password_msg_validation = '';
if ($receiving && array_key_exists('password', $_POST)) {
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $prenom_valide = (1 === preg_match('/\w{2,}/', $password));
    if (!$password_valide) {
        $password_msg_validation = "Votre password n'est pas valide,ce dernier doit comporter au moins deux lettres";
    }
}
//-----------------------------AGE-------------------------------------------------------
$age = "";
$age_valide = true;
$age_msg_validation = '';
if ($receiving && array_key_exists('age', $_POST)) {
    $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_STRING);
    $age_valide = (1 === preg_match('/\w{1,3}/', $prenom));
    if (!$age_valide) {
        $age_msg_validation = "Veuillez indiquez votre age";
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Formualire</title>
    <link rel="stylesheet" href="../style/style.css"/>
</head>
<body>
<form method="post">
<!-----------------------------------NOM------------------------------------------------------->
    <p <?= $receiving && ( ! $nom_valide) ? 'class="invalide"' : '' ?>>
        <label for="nom">Nom :</label>
        <input id="nom" type="text" name="nom" value="<?= $nom ?>"/>
        <?php if ($receiving && ( ! $nom_valide)) {
            echo "<span class='msg_validation'>$nom_msg_validation<span>";
        } ?>
    </p>
    <!-----------------------------------PASSWORD------------------------------------------------------>
    <p <?= $receiving && ( ! $password_valide) ? 'class="invalide"' : '' ?>>
            <label for="password">Mot de passe :</label>
        <input id="password" type="password" name="password" value="<?= $password ?>"/>
        <?php if ($receiving && ( ! $password_valide)) {
            echo "<span class='msg_validation'>$password_msg_validation<span>";
        } ?>
    </p>
    <!-----------------------------------AGE------------------------------------------------------->
    <p <?= $receiving && ( ! $age_valide) ? 'class="invalide"' : '' ?>>
        <label for="age">Age :</label>
        <input id="age" type="text" name="age" value="<?= $age ?>"/>
        <?php if ($receiving && ( ! $age_valide)) {
            echo "<span class='msg_validation'>$age_msg_validation<span>";
        } ?>
    </p>
    <!-----------------------------------SEND / RESET------------------------------------------------------->
 <input id="submit" type="submit" name="soumettre" value="Soumettre"/>
    <input id="reset" type="reset" value="Recommencer"/>
</form>
</body>
</html>