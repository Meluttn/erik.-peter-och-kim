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

switch ($action) {


    case 'park': // Om park kör filtreringsmetod
        $regNR = test_input($regNR);
        $carUnit = new Vehicles($regNR, 2, $_POST['vType'], 20);
        var_dump($carUnit);

        break;


}


include('view/footer.html');
?>

