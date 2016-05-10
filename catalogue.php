<?php
require_once("data/data.php");
?>
<?php require_once ("views/page_top.php"); ?>
<?php require_once ("views/header.php"); ?>

<ul>
    <?php
    /*AFFICHAGE DU CATALOGUE*/
    /*$id = clé/position des items dans le tableau $data des produits*/
    foreach ($data as $id => $item) {?>
<li><a href="detail.php?item_id=<?php $id ?>">
    <div>
        <p>
        <?php $item["nom"] ?>
        </p>
    </div>
    </a>
</li>
    <?php } ?>
</ul>
<?php require_once ("views/footer.php"); ?>
<?php require_once ("views/page_bottom.php.php"); ?>
