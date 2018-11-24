<?php
session_start(); //start session
if(include('lodgeconnectDB.php'))   { //To import the Database connection file
    if ($Mysqli_database)               {
        if(isset($_SESSION['loggedEmail'])) {
            if(isset($_GET['postService'])) { 
                if($_GET['subTypeAccess'] != 'default'){
                    $subType = $_GET['subTypeAccess'];
                } 
                elseif($_GET['subTypeLodge'] != 'default'){
                    $subType = $_GET['subTypeLodge'];
                }
                elseif($_GET['subTypeService'] != 'default'){
                    $subType = $_GET['subTypeService'];
                }
                else {
                    $subType = 'default';
                }
                $sql = "INSERT INTO services (FULLNAME,CONTACTEMAIL,EMAIL,TELEPHONE,ADDRESS,DESCRIPTION,TYPE,SUBTYPE,PRICERANGE,GENDER,STATE,COUNTRY,CITY,SIZE,FRONTVIEW,SIDEVIEW,BACKVIEW,EXTRAVIEW,OPTIONALVIEW1,OPTIONALVIEW2,OPTIONALVIEW3) 
                    VALUES ('".$_GET[nameOfService]."','".$_GET[contactEmail]."','".$_SESSION[loggedEmail]."','".$_GET[contactTel]."','".$_GET[addressOfService]."','".$_GET[desc]."','".$_GET[type]."','".$subType."','".$_GET[priceRange]."','".$_GET[gender]."','".$_GET[state]."','".$_GET[country]."','".$_GET[city]."','".$_GET[size]."','".$_GET[frontView]."','".$_GET[sideView]."','".$_GET[backView]."','".$_GET[extraView]."','".$_GET[optionalView1]."','".$_GET[optionalView2]."','".$_GET[optionalView3]."');";
        
                     if(mysqli_query($Mysqli_database,$sql))   {
                        
                        echo "<script type='text/javascript' src='js/cookies.js'></script>
                        <script>
                        setCookie('uploadresponse','upload',1);
                        </script>";
                        header('refresh:2,url=uploadfile.php');
                    } else {
                        header('Location:pageerrorhandler.php');
                    } 
            } 
            else    {
                header('Location:pageerrorhandler.php');
            }
        } else    {
            header('Location:login.html');
        }
    } else    {
        header('Location:pageerrorhandler.php');
    }
} else    {
    header('Location:pageerrorhandler.php');
}
?>