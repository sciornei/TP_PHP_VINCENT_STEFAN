<?php
require_once("data/data.php");
//Est-ce que qu'il y a une categorie
$cat_id = null;
if (array_key_exists("cat_id",$_GET)&& array_key_exists($_GET["cat_id"],$categories)){
    $cat_id = $_GET["item_id"];
}
?>
<?php require_once("views/page_top.php"); ?>
<?php require_once("views/header.php"); ?>
<div id="main">
    <ul>
        <?php
        /*AFFICHAGE DU CATALOGUE*/
        /*$id = clé/position des items dans le tableau $data des produits*/
        foreach ($data as $id => $item) { ?>
            <li><a href="detail.php?item_id=<?php $id ?>">
                    <div>
                        <p><?php $item["nom"] ?></p>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
</div>
<?php require_once("views/footer.php"); ?>
<?php require_once("views/page_bottom.php.php"); ?>
