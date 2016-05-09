<?php
require_one("data/data.php");
//var_dump($GET);
$item_id = 0;
if (array_key_exists("item_id", $_GET)) {
    $item_id = $GET["$item_id"];
}
?>
<?php require_once("views/page_top.php"); ?>
<?php require_once("views/header.php"); ?>
<div id="main">


</div>
<?php require_once("views/footer.php"); ?>
<?php require_once("views/page_bottom.php.php"); ?>
