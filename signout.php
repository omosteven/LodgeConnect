<?php
//php script to log out user and destroy sessions
session_start();
if(include('lodgeconnectDB.php'))   { //To import the Database connection file
    if ($Mysqli_database) {
        if(isset($_SESSION['loggedEmail'])){
            $lastseen = time();
            $sql = "UPDATE lodgeconnectmembers SET ONLINE_STATUS = '0', LAST_SEEN ='".$lastseen."' WHERE EMAIL = '".$_SESSION[loggedEmail]."'";
            $Mysqli_query = mysqli_query($Mysqli_database,$sql);
            if($Mysqli_query){
                unset($_SESSION['loggedEmail']);
                session_destroy();
                header('location:login.html');
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
