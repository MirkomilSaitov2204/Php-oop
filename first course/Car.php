<?php

class Car
{
    public $brand ;
    public $color ;
    public $maxSpeed;
    public $currentSpeed = 0;

    public static $_counter = 0;

    public function __construct($brand, $color, $maxSpeed)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
        self::$_counter ++;

        $this->move(30);
    }

    public function __destruct()
    {
        $this->stop();
        echo $this->currentSpeed;

        self::$_counter --;
        echo self::$_counter;
    }


    public static function getCarsWithRandSpeed()
    {
        return new  self('Matiz', 'Red', rand(200, 333));
    }


    public function move($param){
        $this->currentSpeed = $param;
    }

    public function stop(){
        $this->currentSpeed = 0;
    }


}