<?php
    session_start();
    require_once('DB.php');
    if(isset($_POST['login']))
    {
        if(empty($_POST['uname']) || empty($_POST['pass']))
        {
            header("location:login.php?Empty= Enter Username & Password");
        }
        else
        {
            $query="select * from user_profile where Username='".$_POST['uname']."' and Password='".$_POST['pass']."'";
            $result=mysqli_query($con,$query);

            if(mysqli_fetch_assoc($result))
            {
                $_SESSION['User']=$_POST['uname'];
                header("location:Usrhome.php");
            }
            else
            {
                header("location:login.php?Invalid= Incorrect Username or Password");

            }
        }
    }
    else
    {
        echo 'Login button Error';
    }
?>