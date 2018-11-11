<?php
if(include('lodgeconnectDB.php')){ //To import the Database connection file
    if(include('hashalgorithm.php')){ //Import the hashing script here
        if(include('mailhandling.php')){
            if ($Mysqli_database) {
                if(isset($_SESSION['loggedEmail'])){
                    if(isset($_POST['login'])){
                        echo $_POST['Email'];
                    }   else    {
                        header("location:index.html");
                    }
                }   else    {
                    header("location:login.html");
                }
            }   else    {
                header('Location:pageerrorhandler.php');
            }
        }   else    {
            header('Location:pageerrorhandler.php');
        }
    }   else    {
        header('Location:pageerrorhandler.php');
    }
}   else    {
    header('Location:pageerrorhandler.php');
}
?>