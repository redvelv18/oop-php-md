<?php

class Car {
    //Properties / Fields
    private $brand;
    private $color;
    private $vehicleType = "car";

    // Constructor
    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }
}