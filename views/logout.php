<?php
require "connections.php";
?>

<?php

session_start();
unset($_SESSION["username"]);
session_destroy();
?>