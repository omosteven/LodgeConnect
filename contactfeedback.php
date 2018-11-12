<?php
session_start(); //start session
if(isset($_GET['contact'])){
    if(include('lodgeconnectDB.php')) {
        if($Mysqli_database){
            $sql = "INSERT INTO messages (FULLNAME,EMAIL,CONTACTEMAIL,CONTACTMSG,MSGTYPE)
            VALUES('".$_GET[fullName]."','".$_GET[loggedEmail]."','".$_GET[email]."','".$_GET[contactmsg]."','CONTACT');";
            if(mysqli_query($Mysqli_database,$sql)) {
                header('Location:contactresponse.html');
            } else    {
                header('Location:pageerrorhandler.php');
            }
        }
        else    {
            header('Location:pageerrorhandler.php');
        }
    }   else    {
        header('Location:pageerrorhandler.php');
    }
} else if(isset($_GET['feedback'])) {
if(include('lodgeconnectDB.php')) {
    if($Mysqli_database){
        if(isset($_SESSION['loggedEmail'])){
            if(isset($_GET['feedback'])){
                if((isset($_GET['medium1']) OR  isset($_GET['medium2']) OR  isset($_GET['medium3']) OR  isset($_GET['medium4'])) AND isset($_GET['rate'])){
                    echo 'goods';
                    
                } else {
                    
                   /* $sql = "INSERT INTO members SET FULLNAME = '".$_GET[fullName]."', FEEDBACKMSG = '".$_GET[FeedMsg]."', AWARENESS_MEDIUM='".$awareness."', RATE='".$_GET[rate]."', EMAIL = '".$_SESSION[loggedEmail]."'";
                    $Mysqli_query = mysqli_query($Mysqli_database,$sql);
                    if($Mysqli_query){ 
                        echo 'done';*/
                       echo "<script>alert('a missing field needs to be filled')</script>";
                        //header('Location:feedback.html');   
                }
            }
        }   else    {
            header('Location:login.html');
        }
    }   else    {
        header('Location:pageerrorhandler.php');
    }
} else    {
    header('Location:pageerrorhandler.php');
}
}
else    {
    header('Location:pageerrorhandler.php');
}
?>