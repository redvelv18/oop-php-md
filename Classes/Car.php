<?php

class Car {
    //Properties / Fields
    private $brand;
    private $color;
    public $vehicleType = "car";

    // Constructor
    public function __construct($brand, $color = "none") {
        $this->brand = $brand;
        $this->color = $color;
    }
}

$car01 = new Car("Volvo", "Red");
echo $car01->vehicleType;