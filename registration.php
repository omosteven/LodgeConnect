<?php
if(include('lodgeconnectDB.php')){ //To import the Database connection file
if(include('hashalgorithm.php')){ //Import the hashing script here
if(include('mailhandling.php')){
if ($Mysqli_database) {
    if(isset($_POST['signup'])) {
        { 
        if($_POST['Password'] == $_POST['Confirm_Password']) {
            $Email = mysqli_escape_string($Mysqli_database,$_POST['Email']);
            $checklogin = "SELECT * FROM lodgeconnectmembers WHERE (EMAIL = '$Email');"; //checks for existing account
            $mysqli = mysqli_query($Mysqli_database,$checklogin);
                if($mysqli AND mysqli_num_rows($mysqli) == 0)  {
                    $hashPassword = hashcube($_POST['Password']);
                    //echo $hashPassword;
                    $pass = $_POST['Password'];
                    $randomcode = rand();
                    $sqlsignup = "INSERT INTO lodgeconnectmembers (EMAIL,PASSWORD,CODE_VERIFY) 
                    VALUES ('".$_POST['Email']."','".$hashPassword."','".$randomcode."');";
                    if(mysqli_query($Mysqli_database,$sqlsignup)) {
                        echo "<script>
                                alert('Account Created Successfully, Check your Email for Account Verification');
                            </script>";
                        include("login.html");
                        $Subj = "Verification of Your LodgeConnect Account";
                        $Msg = "<b>Congratulations</b>, </br>
                        Your Account was successfully created,Kindly use this link provided here to activate and proceed to login.Thanks</br>
                        <form action = 'localhost/lodgeconnect/vlogin.php' method = 'GET' name='CODE_VERIFY' value ='$randomcode'>
                        <input type='hidden' name='CODE_VERIFY' value = '$randomcode' method ='GET'/>    
                        <a href='http://localhost:8080/lodgeconnect/vlogin.php' onclick='event.preventDefault()'>http://localhost:8080/lodgeconnect/vlogin.php</a>
                            
                        </form>";
                        sendmail($Email,NULL,$Msg,$Subj,NULL,NULL); //send verification link
                    } else {
                        //echo 'error while signings in '.mysqli_error();
                        header('Location:pageerrorhandler.php');
                    }
                } else {
                    echo "<script>
                                alert('Sorry, the entered email already exists with another account,if you are the owner, please log in here ');
                        </script>";   
                    include("login.html");
                }
        } else {
            
            echo "<script>
                   alert('Password and Confirm Password did not math');
                  </script>";
                  include("signup.html");
                  
        }
        }
    } elseif(isset($_POST['login'])) { //for logging in
       {
        
        $Email = mysqli_escape_string($Mysqli_database,$_POST['Email']);
        $Password = mysqli_escape_string($Mysqli_database,$_POST['Password']);
        $checklogin = "SELECT * FROM lodgeconnectmembers WHERE (EMAIL = '$Email');";
        $mysqli = mysqli_query($Mysqli_database,$checklogin);
        if($mysqli AND mysqli_num_rows($mysqli) == 1)  { // return true if queried true and queried rows is only one.
            $mysqli_details = mysqli_fetch_assoc($mysqli); //fetch details
            if(password_verify($Password,$mysqli_details['PASSWORD'])) {
            
                $_SESSION['loggedEmail'] = $mysqli_details['EMAIL'];
                echo 'success';
            } else {
                echo "<script>
                   alert('Incorrect Email or Password');
                  </script>";
                include("login.html"); 
            }

            
        } else {
            echo "<script>
            alert('Incorrect Email or Password');
           </script>";
            include("login.html");          
                }
       }
    } else {
        header("Location:signup.html");
    }
} else {
//include('critedbottominfo.php');
header('Location:pageerrorhandler.php');
}
} else {
    header('Location:pageerrorhandler.php');
}
} else {
    header('Location:pageerrorhandler.php');
}
} else {
    header('Location:pageerrorhandler.php');
}
?>
