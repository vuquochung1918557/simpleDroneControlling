<?php
class Drone {
    public $x=0;
    public $y=0;
    public $f=0;
}
class api {
    public function __construct()
    { 
        $myDrone = new Drone;
        $this->myDrone = $myDrone;
    }
    function sendResponse($body = ”, $content_type = 'text/html')
    {
        header('Access-Control-Allow-Origin: *');
        header('Content-Type: application/json');
        echo $body;
    }
    function PLACE($x, $y, $f) {
        if($this->isPositionValidated($x, $y, $f)) {
            $this->myDrone->x = $x;
            $this->myDrone->y = $y;
            $this->myDrone->f = $f;
        } else {
            $this->myDrone->x = 0;
            $this->myDrone->y = 0;
            $this->myDrone->f = 0;
        }
        $this->REPORT();
    }
    function MOVE($x, $y, $f) {
        $moveUnit = 10;
        $this->myDrone->f = $f;
        if ($this->myDrone->f == 0) {
            $this->myDrone->y = $y - $moveUnit;
            $this->myDrone->x = $x;
        } else if ($this->myDrone->f == 90 || $this->myDrone->f == -270) {
            $this->myDrone->x = $x + $moveUnit;
            $this->myDrone->y = $y;
        } else if (abs($this->myDrone->f) == 180) {
            $this->myDrone->y = $y + $moveUnit;
            $this->myDrone->x = $x;
        } else if ($this->myDrone->f == 270 || $this->myDrone->f == -90) {
            $this->myDrone->x = $x - $moveUnit;
            $this->myDrone->y = $y;
        }
        if(!$this->isPositionValidated($this->myDrone->x, $this->myDrone->y, $this->myDrone->f)) {
            $this->myDrone->x = $x;
            $this->myDrone->y = $y;
            $this->myDrone->f = $f;
            $this->myDrone = $currentDrone;
        }
        $this->REPORT();
    }

    function isPositionValidated($x, $y, $f) {
        if (!is_numeric($x) || !is_numeric($y) || !is_numeric($f)) {
            return false;
        }
        if ($x < 0 || $x > 450 || $y < 0 || $y > 450
        || (abs($f) !== 90 && abs($f) !== 180 
        && abs($f) !== 270 && $f != 0)) {
            return false;
        }
        return true;
    }

    function LEFT($x, $y, $f){
        if($this->isPositionValidated($x, $y, $f)) {
            $this->myDrone->x = $x;
            $this->myDrone->y = $y;
            $this->myDrone->f = $this->myDrone->f = $f - 90;
            $this->REPORT();
        }
    }
    function RIGHT($x, $y, $f){
        if($this->isPositionValidated($x, $y, $f)) {
            $this->myDrone->x = $x;
            $this->myDrone->y = $y;
            $this->myDrone->f = $this->myDrone->f = $f + 90;
            $this->REPORT();
        }
    }
    function REPORT(){
        $this->sendResponse(json_encode($this->myDrone));
    }

}

?>