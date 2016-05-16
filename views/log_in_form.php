<?php
echo "<h2>Connextion : </h2>";
$receiving = ('POST' === $_SERVER['REQUEST_METHOD']);
/*********************NOM*************************************/
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
//-----------------------------PRENOM-------------------------------------------------------
$prenom = "";
$prenom_valide = true;
$prenom_msg_validation = '';
if ($receiving && array_key_exists('prenom', $_POST)) {
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_STRING);
    $prenom_valide = (1 === preg_match('/\w{2,}/', $prenom));
    if (!$prenom_valide) {
        $prenom_msg_validation = "Votre prenom n'est pas valide,ce dernier doit comporter au moins deux lettres";
    }
}
//-----------------------------------PASSWORD------------------------------------------------------
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
<!-----------------------------------PRENOM------------------------------------------------------->
<p <?= $receiving && ( ! $prenom_valide) ? 'class="invalide"' : '' ?>>
    <label for="prenom">Prenom :</label>
    <input id="prenom" type="text" name="prenom" value="<?= $prenom ?>"/>
    <?php if ($receiving && ( ! $prenom_valide)) {
        echo "<span class='msg_validation'>$prenom_msg_validation<span>";
    } ?>
</p>
<!-----------------------------------PASSWORD------------------------------------------------------>
<p <?= $receiving && ( ! $password_valide) ? 'class="invalide"' : '' ?>>
    <label for="password">Password :</label>
    <input id="password" type="password" name="password" value="<?= $password ?>"/>
    <?php if ($receiving && ( ! $password_valide)) {
        echo "<span class='msg_validation'>$password_msg_validation<span>";
    } ?>
</p>
    <input id="submit" type="submit" name="log_in" value="Log-in"/>
    <input id="reset" type="reset" value="Recommencer"/>