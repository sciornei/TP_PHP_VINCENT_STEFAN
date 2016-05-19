<?php
require_once("data/data.php");
require_once("utils/utilitaires.php");
$item_id = 0;
if (array_key_exists("item_id", $_GET)
    && (array_key_exists($_GET["item_id"], $pc_games)
        || array_key_exists($_GET["item_id"], $ps4_games)
        || array_key_exists($_GET["item_id"], $xbox_games)
        || array_key_exists($_GET["item_id"], $wii_games) )) {
    $item_id = $_GET["item_id"];
    $jeu = "";
    foreach ($categories as $id => $item) {
        foreach ($item["id"] as $game => $desc) {
            if ($game == $item_id){
                $jeu = $desc;

                if (!array_key_exists($jeu["id"], $_SESSION)) {
                    $_SESSION[$jeu["id"]]=0;
                    ;
                }
            }
        }
    }
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"/>
    <title>Détails</title>
    <link rel="stylesheet" href="style/style.css"/>
</head>
<body>
<div id="main">
    <?php require_once("views/panier.php"); ?>
    <?php require_once ("views/page_top.php"); ?>
    <?php require_once ("views/header.php"); ?>
    <?php if($item_id === 0){
        echo '<p> Etes vous perdu? Cet article n\'existe pas</p> ---> <a href="catalogue.php">Retour au catalogue</a>'; }?>
    <div class="detail">
        <div>
            <img src="images/<?= $jeu["photo"] ?>">
        </div>
        <div>
            <p>Nom du jeu: <?= $jeu["nom"] ?></p>
            <p>Prix : <?= $jeu["prix"] ?>$</p>
            <a href= "?item_id=<?php echo $jeu["id"] ?>&action=Ajouter";

            >Ajouter au panier</a>
        </div>

    </div>

    <?php require_once ("views/footer.php"); ?>
</div>
<script>
</script>
</body>
</html>
