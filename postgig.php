<?php
session_start();
if(include('lodgeconnectDB.php'))   { //To import the Database connection file
    if(include('hashalgorithm.php'))    { //Import the hashing script here
        if(isset($_SESSION['loggedEmail'])) {
            header('location:uploadfile.php');
            }
            else {
                echo "<script type='text/javascript' src='js/cookies.js'></script>
                <script>
                setCookie('bypasslogin','no',1);
                </script>";
                header('refresh:0.1,url=login.html');
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
            