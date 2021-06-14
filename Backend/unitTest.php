<?php
include("api.php");
$drone = new Drone;
$droneAPI = new api($drone);
$x = 0;
$y = 0;
$f = 0;
echo "\n calling PLACE(ABC, 0, 0)";
echo "\n result:";
$droneAPI->PLACE('ABC', 0, 0);
echo "\n calling PLACE(0, ABC, 0)";
echo "\n result:";
$droneAPI->PLACE(0, 'ABC', 0);
echo "\n calling PLACE(0, 0, ABC)";
echo "\n result:";
$droneAPI->PLACE(0, 0, 'ABC');
echo "\n calling PLACE(ABC, ABC, ABC)";
echo "\n result:";
$droneAPI->PLACE('ABC', 'ABC', 'ABC');
echo "\n calling PLACE(460, 0, 0)";
echo "\n result:";
$droneAPI->PLACE(460, 0 ,0);
echo "\n calling PLACE(0, 460, 0)";
echo "\n result:";
$droneAPI->PLACE(0, 460 ,0);
echo "\n calling PLACE(0, 0, 120)";
echo "\n result:";
$droneAPI->PLACE(0, 0, 120);
echo "\n calling PLACE(460, 460, 120)";
echo "\n result:";
$droneAPI->PLACE(460, 460 ,120);
$x = 10;
$y = 20;
$f = 0;
echo "\n calling PLACE(" . $x . "," . $y . "," . $f . ")";
echo "\n result:";
$droneAPI->PLACE($x, $y, $f);
echo "\n calling RIGHT(" . $x . "," . $y . "," . $f . ")";
echo "\n result:";
$droneAPI->RIGHT($x, $y, $f);
$f = 90;
echo "\n calling MOVE(" . $x . "," . $y . "," . $f . ")";
echo "\n result:";
$droneAPI->MOVE($x, $y, $f);
$x = 10;
echo "\n calling LEFT(" . $x . "," . $y . "," . $f . ")";
echo "\n result:";
$droneAPI->RIGHT($x, $y, $f);
$f = 180;
echo "\n calling MOVE(" . $x . "," . $y . "," . $f . ")";
echo "\n result:";
$droneAPI->MOVE($x, $y, $f);
?>