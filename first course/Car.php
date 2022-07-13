<?php

class Car
{
    public $brand = "Mitsubishi";
    public $color = "red";
    public $maxSpeed = 240;
    public $currentSpeed = 0;

    public function move($param){
        $this->currentSpeed = $param;
    }

    public function stop(){
        $this->currentSpeed = 0;
    }

}