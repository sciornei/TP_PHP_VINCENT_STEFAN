<?php require "views/connections.php" ?>
<?php require_once "utils/utilitaires.php" ?>
<?php require_once "data/data.php" ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"/>
    <title>Acceuil</title>
    <link rel="stylesheet" href="style/style.css"/>
</head>
<body>
<div id="main">
    <?php require_once("views/panier.php"); ?>
    <?php require_once ("views/page_top.php"); ?>
    <?php require_once ("views/header.php"); ?>
    <h1>Votre Panier:</h1>
    <?php
    $prix = 0;
    foreach ($categories as $id => $item) {
        foreach ($item["id"] as $game => $desc) {
             foreach ($_SESSION as $jeu => $nombre) {
                 if ($jeu == $game){
                     echo'<p class="Achat">'.$desc['nom'].' '. $nombre.' fois. '.$desc["prix"].'$ unité</p>';
                     $prix += $desc["prix"]*$nombre;

                 }
             }
        }
    }
    echo '<p id="prix">Le prix total est de '.$prix. '$</p>';
    ?>
    <?php require_once ("views/footer.php"); ?>
</div>
<script>
</script>
</body>
</html>