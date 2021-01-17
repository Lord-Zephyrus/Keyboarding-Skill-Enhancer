<?php

    $con=mysqli_connect('localhost','root','','kse');
    if(!$con)
    {
        die('Unable to establish connection:'.mysqli_error());
    }
?>