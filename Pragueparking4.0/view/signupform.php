<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.css">
   <title>Signup</title>
</head>

<body>
   <header>
      <h1>Create an account for Prague Parking</h1>   
      <h2><?php session_start(); if(isset($_SESSION['message'])) {echo $_SESSION['message'];} session_destroy(); unset($_SESSION['message']); ?></h2>  
   </header>
   <main>
      <fieldset>        
         <form method="post" action="../signup.php">
         <label for="user">User</label>
         <input type="text" name="user" required>         
         <label for="password">Password</label>         
         <input type="password" name="password" required>
         <label for="password_confirmation">Repeat password</label>
         <input type="password" name="password_confirmation" required>
         <input type="submit" value="Sign Up">
         </form>
      </fieldset>
   </main>
   <a href="loginform.php">back to login</a>
 
</body>
</html>