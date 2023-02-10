<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">

<?php

require('functions.php');

session_start();

// if passwords doesnt add up
if($_POST['password'] != $_POST['password_confirmation'])
{
  $_SESSION['message'] = 'passwords doesnt match';
  exit(header('location: view/signupform.php'));  
}

// checks if the user already exists
if(isset($_POST['user']))
{
  $user = test_input($_POST["user"]);

  $csvhandle = fopen('csv/users.csv', 'r');
  while(! feof($csvhandle))
  {
    $temp = fgetcsv($csvhandle, 1000, ',');

    if(!empty($temp))
    {
      if(in_array($user, $temp))
      {
        ?> 
        <h2>user already exists!</h2>
        <button><a href="view/loginform.php">return to login</a></button>
        <button><a href="view/signupform.php">return to signup</a></button> 
        <?php
        fclose($csvhandle);
        unset($user); // unsets the $user which we handled here, so that we don't another version of a user if the username already exists
        break;             
      }
    }
  }  
}

// if user doesn't exists, we create a new one.
if(isset($user) && isset($_POST['password']) === isset($_POST['password_confirmation']))
{   
  $pw = test_input($_POST['password']); 
  $userArr = array($user,$pw);
  $filename = 'csv/users.csv';
  appendTofile($userArr, $filename);
  header('location: index.php');
}

// appending to the file of our choice
function appendToFile($userArr, $filename)
{
  $csvhandle = fopen($filename, 'a');
  fputcsv($csvhandle, $userArr);
  fclose($csvhandle);  
}

?>



