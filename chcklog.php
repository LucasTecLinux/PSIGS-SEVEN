<?php

session_start();
if(!isset($_SESSION["rus"]) || !isset($_SESSION["senha"])){//para ver se realmente ha uma sessao aberta
header("location: index.php");
exit;
}
?>