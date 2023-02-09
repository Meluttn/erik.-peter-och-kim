<?php

  // what happens when we press the logout button, cleaning up the session and unsetting the global
  // and returning to Login in this case.
  
  session_destroy();
  unset($_SESSION);

  header('location: index.php');

?>