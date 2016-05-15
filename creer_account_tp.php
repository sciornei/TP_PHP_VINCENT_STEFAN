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
//-----------------------------sexe-------------------------------------------------------
$sexe = ""; // Contenu du champ sexe (sexe_h ou sexe_f)
$sexe_valide = true; // Le champ est valide par défaut
$sexe_msg_validation = ''; // Le message à renvoyer à l'utilisateur si le sexe n'est pas coché
if ($receiving) {
    $sexe_valide = array_key_exists('sexe', $_POST)
        && in_array($_POST['sexe'], array('sexe_h', 'sexe_f')); // Le champ est valide par défaut
    if ($sexe_valide) {
        $sexe = $_POST['sexe'];
    } else {
        $sexe_msg_validation = "Vous n'avez pas indiquez votre sexe";
    }
}
//-----------------------------continent-------------------------------------------------------
$continent = "";
$continent_valide = true;
$continent_msg_validation = '';
if ($receiving) {
    $continent_valide = array_key_exists('continent', $_POST)
        && in_array($_POST['continent'], array('amerique', 'europe', 'asie', 'afrique', 'oceanie'));
    if ($continent_valide) {
        $continent = $_POST['continent'];
    } else {
        $continent_msg_validation = "Veuillez sélectionnée votre continent de résidence";
    }
}
//-----------------------------AGE-------------------------------------------------------
$age = "";
$age_valide = true;
$age_msg_validation = '';
if ($receiving) {
    $age_valide = array_key_exists('age', $_POST)
        && is_array($_POST['age']);
    if ($age_valide) {
        $age = $_POST['age'];
    } else {
        $age_msg_validation = "Veuillez sélectionné votre tranche d'âge";
    }
}
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Formualire</title>
    <link rel="stylesheet" href="style/style.css"/>
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
    <!-----------------------------------SEXE------------------------------------------------------->
    <p <?= $receiving && ( ! $sexe_valide) ? 'class="invalide"' : '' ?>><label for="sexe_h">Homme :</label>
        <input type="radio" id="sexe_h" name="sexe" value="sexe_h"
            <?= $receiving && ('sexe_h' == $sexe) ? 'checked="checked"' : '' ?>
        />
        <label for="sexe_f">Femme :</label>
        <input type="radio" id="sexe_f" name="sexe" value="sexe_f"
            <?= $receiving && ('sexe_f' == $sexe) ? 'checked="checked"' : '' ?>
        />
        <?php if ($receiving && (!$sexe_valide)) {
            echo "<span class='msg_validation'>$sexe_msg_validation<span>";
        } ?>
    </p>
    <!-----------------------------------continent------------------------------------------------------->
    <p <?= $receiving && ( ! $continent_valide) ? 'class="invalide"' : '' ?>><label for="continent">Veillez selectionner votre continent de résidence :</label>
        <select id="continent" name="continent">
            <option value="(none)" <?= '(none)' == $continent ? 'selected="selected"' : '' ?>>Choisir un continent :</option>
            <option value="amerique" <?= 'amerique' == $continent ? 'selected="selected"' : '' ?>>Amérique</option>
            <option value="europe" <?= 'europe' == $continent ? 'selected="selected"' : '' ?>>Europe</option>
            <option value="asie" <?= 'asie' == $continent ? 'selected="selected"' : '' ?>>Asie</option>
            <option value="afrique" <?= 'afrique' == $continent ? 'selected="selected"' : '' ?>>Afrique</option>
            <option value="oceanie" <?= 'oceanie' == $continent ? 'selected="selected"' : '' ?>>Oceanie</option>
        </select>
        <?php if ($receiving && (!$continent_valide)) {
            echo "<span class='msg_validation'>$continent_msg_validation<span>";
        } ?>
    </p>
    <!-----------------------------------AGE------------------------------------------------------->
    <p <?= $receiving && ( ! $age) ? 'class="invalide"' : '' ?>>
        <label for="mineur">Moins de 18ans :</label>
        <input type="checkbox" id="mineur" name="mineur[]" value="mineur"
            <?= $receiving && is_array($age) && in_array('mineur',$mineur) ? 'checked="checked"' : '' ?>
        />
        <label for="majeur">18ans ou plus :</label>
        <input type="checkbox" id="majeur" name="majeur[]" value="majeur"
            <?= $receiving && is_array($age) && in_array('majeur',$majeur) ? 'checked="checked"' : '' ?>
        />
        <?php if ($receiving && (!$age_valide)) {
            echo "<span class='msg_validation'>$age_msg_validation<span>";
        } ?>
    </p>
    <!-----------------------------------SEND / RESET------------------------------------------------------->
 <input id="submit" type="submit" name="soumettre" value="Soumettre"/>
    <input id="reset" type="reset" value="Recommencer"/>
</form>
</body>
</html>