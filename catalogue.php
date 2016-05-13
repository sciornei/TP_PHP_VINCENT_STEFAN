<?php

require_once("data/data.php");
//Est-ce que qu'il y a une categorie
exit("STOP!");
$cat_id = null;
$cat_show = null;
if (array_key_exists("cat", $_GET) && array_key_exists($_GET["cat"], $categories)) {
    $cat_id = $_GET["cat"];
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Catalogue</title>
    <link rel="stylesheet" href="style/style.css"/>
</head>
<body>
<div id="main">
    <div id="menu_gauche"><?php require_once("views/menu_gauche.php"); ?></div>
    <div id="catalogue">
        <ul>
            <?php
            /*AFFICHAGE DU CATALOGUE*/
            if (!is_null($cat_id)) {
                echo "<h2>Les jeux de la catégorie " . $categories[$cat_id]["nom"] . "</h2>";
                $cat_show = $categories[$cat_id]["id"];

            } else {
                echo "<h2>Les jeux de la catégorie " . $categories["pc"]["nom"] . "</h2>";
                $cat_show = $categories["pc"]["id"];
            }
            
            /*$id = clé/position des items dans le tableau $data des produits*/
            foreach ($cat_show as $id => $item) { ?>
                <li><a href="detail.php?item_id=<?php echo $id ?>">
                        <div class="games">
                            <img src="images/<?= $item["photo"] ?>">


                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
    <?php require_once("views/footer.php"); ?>
</div>
<script>
</script>
</body>
</html>
