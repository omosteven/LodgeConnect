<?php
session_start();
if(include('lodgeconnectDB.php'))   { //To import the Database connection file
    if(include('hashalgorithm.php'))    { //Import the hashing script here
        if(isset($_SESSION['loggedEmail'])) {
            header('location:completeprofile.php');
            }
            else {
                header('location:login.html');
            }
        }
            else    {
                header('Location:pageerrorhandler.php');
            }
    }   
    else    {
        header('Location:pageerrorhandler.php');
    }

?>
            