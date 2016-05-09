<?php
?>


<?php require_once ("views/page_top.php"); ?>

<div id="main">
/*CODE HTML*/
<?php /*Affichage du catalogue*/ ?>
<ul>
<?php foreach ($data as $id => $items) { ?>
    <li>
        <div>
            <p><?php $item["nom"] ?>, <span class=".prix"></span></p>
        </div>
    </li>
<?php } ?>
</ul>
?>






</div>

<?php require_once ("views/page_bottom.php.php"); ?>
