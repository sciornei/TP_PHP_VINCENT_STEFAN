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
    <?php require_once ("views/page_top.php"); ?>
    <?php require_once ("views/header.php"); ?>

    <div class="creer_compte_form">
    <?php require_once ("views/creer_account_tp.php"); ?>
    </div>
    <div class="creer_compte_form">
        <?php require_once ("views/log_in_form.php"); ?>
    </div>

    <?php require_once ("views/footer.php"); ?>
    <?php require_once ("views/page_bottom.php"); ?>
</div>
<script>
</script>
</body>
</html>
