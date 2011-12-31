<?php 
/*
session_start();
$_SESSION["mins"] = $_GET["min"];
$_SESSION["secs"] = $_GET["sec"];
*/
?>


<?php
session_start();
$_SESSION["mins"] = $_GET["min"];
$_SESSION["secs"] = $_GET["sec"] < 10 ?  substr($_GET["sec"],1,1) : $_GET["sec"];
?>
