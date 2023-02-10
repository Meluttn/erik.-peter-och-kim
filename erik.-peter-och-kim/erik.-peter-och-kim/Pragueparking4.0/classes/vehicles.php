<?php

class Vehicles
{

    private $regNR;
    private $size;
    private $vehicleType;
    private $startTime;
    private $price;
    private $parkingSpot;
    

    function __construct($regNR,$size,$vehicleType,$price,$parkingSpot=0) // Parkeringsplater får 0 värde
    {
        $this->parkingSpot = $parkingSpot;
        $this->regNR = $regNR;
        $this->size = $size;
        $this->price = $price;
        $this->vehicleType = $vehicleType;
        $this->startTime = time(); // Skapar starttid i sekunder
    }   

    public function getRegNR()
    {
        return $this -> regNR;
    }
    public function getParkingspace()
    {
        return $this -> parkingSpot;
    }




}






