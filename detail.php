<?php
require_once("data/data.php");
var_dump($_GET);
$item_id = 0;
if (array_key_exists("item_id", $_GET)
    && (array_key_exists($_GET["item_id"], $pc_games)
        || array_key_exists($_GET["item_id"], $ps4_games)
        || array_key_exists($_GET["item_id"], $xbox_games)
        || array_key_exists($_GET["item_id"], $wii_games) )) {
    $item_id = $_GET["item_id"];
    echo "<p> 'existe' </p>";
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
    <?php require_once("views/login.php"); ?>
    <?php require_once ("views/page_top.php"); ?>
    <?php require_once ("views/header.php"); ?>
    <?php require_once ("views/footer.php"); ?>
</div>
<script>
</script>
</body>
</html>
