<div id="panier">

    <p>Panier</p>
    <a href=<?= 'index.php?action=Vider' ?>>Vider Panier</a>
    <a href="payer.php">Aller au panier</a>
    <?php if (array_key_exists('action', $_GET)){
        if ($_GET['action'] == 'Vider') {
            session_destroy();
        }
        if ($_GET['action'] == 'Ajouter') {
            $_SESSION[$jeu["id"]]++;
        }
    }
    var_dump($_SESSION);
    ?>

</div>