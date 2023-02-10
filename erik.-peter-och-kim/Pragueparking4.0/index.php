<?php

session_start();

require('classes/parking.php');
require('functions.php');
require('classes/vehicles.php');
include('view/header.html');

// if user is not logged in, they cant into this page
if (!isset($_SESSION["user"])) {
    header("Location: view/loginform.php");
    exit();
  }
 

$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW); // filtrerar input
$regNR = filter_input(INPUT_POST, 'regnumber', FILTER_UNSAFE_RAW); 


?> <h2><?="welcome " . $_SESSION['user'];?></h2><?php

if (isset($_POST['Park'])) 
{
    include('view/park.php');
}
if (isset($_POST['Collect'])) 
{
    include('view/collect.php');
}
if (isset($_POST['Move'])) 
{
    include('view/move.php');
}
if (isset($_POST['Find'])) 
{
    include('view/find.php');
}
if (isset($_POST['Print'])) 
{
    include('view/print.php');
}

// so that we can log out... 
if(isset($_POST['Logout']))
{
    include('view/logout.php');
}

switch ($action) 
{
    case 'park': // Om park kör filtreringsmetod
        $regNR = test_input($regNR);


        function priceVehicles($vType){

            if($vType == 'car')
            {
                
                $price = 80;
                return $price;
                
            



            }
            else 
            $price = 40;
            return $price;
        }
        function sizeVehicles($vType)
        {
        

            if($vType == 'car')
            {
                
                $size = 20; // kapacitet för MC
                return $size;
                
            



            }
            else 
            $size = 10; // kapacitet för MC
            return $size;

        }
        $price = priceVehicles($_POST['vType']);
        $size = sizeVehicles($_POST['vType']);

        $carUnit = new Vehicles($regNR, $size, $_POST['vType'], $price);
        writeToFile($carUnit);
        
        break;
        

    }


    function writeToFile($carUnit)
    {
        $carArr=(array)$carUnit;
        var_dump($carArr) ;
        echo 'rad 122';
       // $fp=fopen('csv/parkedvehicles.csv','w'); //file open
        
       // fclose() //file close


    }


include('view/footer.html');
?>

