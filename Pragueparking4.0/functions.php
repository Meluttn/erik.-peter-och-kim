<?php

function test_input($data){ //tvättar inputdata
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>