<?php
    session_start();
    echo "Logout Successfull";
    session_destroy();
        header("Location:../Home.html");
?>