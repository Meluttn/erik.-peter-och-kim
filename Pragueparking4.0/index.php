<?php

session_start();

require('classes/parking.php');
require('functions.php');
require('classes/vehicles.php');
include('view/header.html');

// if user is not logged in
if (!isset($_SESSION["user"])) {
    header("Location: view/loginform.php");
    exit();
  }
 

$action = filter_input(INPUT_POST, 'action', FILTER_UNSAFE_RAW); // filtrerar input
$regNR = filter_input(INPUT_POST, 'regnumber', FILTER_UNSAFE_RAW); 




if (isset($_POST['Park'])) 
{
    include('view/park.php');
}

switch ($action) {


    case 'park': // Om park kör filtreringsmetod
        $regNR = test_input($regNR);
        $carUnit = new Vehicles($regNR, 2, $_POST['vType'], 20);
        var_dump($carUnit);

        break;


}


// if(isset($_SESSION['user'])){
//     session_destroy();
//     unset($_SESSION);
// }


include('view/footer.html');
?>

