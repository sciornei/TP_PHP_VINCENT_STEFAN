<?php

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"/>
    <title>Formulaire : Input</title>
    <link rel="stylesheet" href="style/style.css"/>
</head>
<body>
<div id="main">
    <?php require_once("views/login.php"); ?>
    <?php require_once ("views/page_top.php"); ?>
    <?php require_once ("views/header.php"); ?>
    <div id="menu_gauche"><?php require_once("views/menu_gauche.php"); ?></div>
    <div id="creer_compte_form">
    <?php require_once("views/register.php"); ?>
    </div>
    <div id="log_in_form">
        <?php ; ?>
    </div>

    <?php require_once ("views/footer.php"); ?>
</div>
<script>
</script>
</body>
</html>
