<?php
require_once("data/data.php");
?>
<?php require_once ("views/page_top.php"); ?>
<ul>
    <?php
    /*AFFICHAGE DU CATALOGUE*/
    /*$id = clé/position des items dans le tableau $data des produits*/
    foreach ($data as $id => $item) {?>
<li>
    <div>
        <p>
        <?php $item["nom"] ?>
        </p>
    </div>
</li>
    <?php } ?>
</ul>
<?php require_once ("views/page_bottom.php.php"); ?>
