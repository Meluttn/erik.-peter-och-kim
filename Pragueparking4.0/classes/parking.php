<?php 

class Parking // deklaration av class i php
{

    private $capacity;
    public $parkVehicles = array();


    private function readParkingFile($filename) //Läser in fil
    {
        $filetwo = fopen($filename, 'r'); // öppnar

        $filethree = fread($filetwo, $filename); // filreader
        fclose($filetwo); // stänger

        return $filethree;
    }
}








?>