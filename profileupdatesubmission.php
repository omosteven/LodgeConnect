<?php
//php page to submit profile update
session_start();
if(include('lodgeconnectDB.php'))   { //To import the Database connection file
    if(include('hashalgorithm.php'))    { //Import the hashing script here
        if(isset($_SESSION['loggedEmail']))     {
            if ($Mysqli_database)               {
                if(isset($_GET['updateProfile'])) {
                    $arrayaddr = $_GET['city-state-nation'];
                    $citystatenation = explode(',',$arrayaddr);
                    $city = $citystatenation[0];
                    $state = $citystatenation[1];
                    $nation = $citystatenation[2];
                    
                    $fullName = $_GET['lastName'].' '.$_GET['firstName'];
                    $sql = "UPDATE lodgeconnectmembers SET FULLNAME = '".$fullName."', TELEPHONE = '".$_GET[contact]."', INSTITUTION='".$_GET[nameOfInst]."', ORG_NAME ='".$_GET[nameOfWork]."', SELF_JOB = '".$_GET[nameOfJob]."', PERSONALITY='".$_GET[personality]."', CITY = '".$city."', STATE = '".$state."', COUNTRY = '".$nation."', ADDRESS = '".$_GET[address]."', BUSINESSNAME = '".$_GET[businessName]."', GENDER = '".$_GET[gender]."' WHERE EMAIL = '".$_SESSION[loggedEmail]."'";
                    $Mysqli_query = mysqli_query($Mysqli_database,$sql);
                    if($Mysqli_query){
                        header('Location:viewprofile.php');
                    }
                    
                }   else    {
                       header('Location:pageerrorhandler.php');
            }
                       }   else    {
                       header('Location:pageerrorhandler.php');
            }
        }   else    {
                    header('Location:login.html');
            }
    }   else    {
                header('Location:pageerrorhandler.php');
            }
}   else    {
            header('Location:pageerrorhandler.php');
        }
?>
