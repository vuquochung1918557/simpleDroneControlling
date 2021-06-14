<?php
include("api.php");
$drone = new Drone;
$droneAPI = new api($drone);
$x = $_GET["x"];
$y = $_GET["y"];
$f = $_GET["f"];
$droneAPI->RIGHT($x, $y, $f);
?>