<?php require "connections.php";?>
<?php
session_start();
if(isset($_SESSION["username"])){

}else{
    header('Location: index.php');
}
?>
