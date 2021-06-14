<?php
include("api.php");
$drone = new Drone;
$droneAPI = new api($drone);
$droneAPI->REPORT();
?>