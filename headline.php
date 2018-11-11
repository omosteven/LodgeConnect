<?php
session_start();
include('checkstatus.php'); //to log out user when logged out in another browser
//checkstatus();
//include('inactiveness.php');
?>
<html>
    <head>
    <meta charset="utf-8" lang="EN-US">
    <meta name="viewport" content="width=device-width" initial-scale= "1">
    <link href="css/headline.css" rel="stylesheet">
    <!--link rel='stylesheet' href='css/profile.css'>
    <!--link type="text/css" rel="stylesheet" href="css/materialize.min.css">
    <!-- Bootstrap CSS -->
    <!--link rel="stylesheet" href="css/vendor/bootstrap.min.css">
    <!-- Loader CSS -->
    <!--link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/overrides.css">
    <link rel="stylesheet" href="css/profile.css">
    <link rel="stylesheet" href="css/animations.css">
	<!-- Bootstrap.css -->
        <title>LodgeConnect- Home Page
        </title>
        <style>
    </style>
    
</head>
<body>
<div class='header'>
        
        
    </div>
    <!--div class="aim" style="width:100%">
        <!-- <img src=""> >
        <h3>Update Your Profile here...</h2>
        <p> Let us know You here</p> 
    </div-->





<div class = 'border'>
<div><!--a href="home.php"><img src='img/home.jpeg' alt ='Home' style ='width:3em; height:3.2em; float:left;'/></a--></div>
<div class="navbar">
<div><img src="img/logo.jpg" class='logo'/></div>
<div class='head'>
<button class='btn btn-signin'><a class='txt' href='signup.html'>Register</a></button> 
<button class='btn btn-signin'><?php if(isset($_SESSION['loggedEmail'])) { echo "<a href='signout.php' class='txt'>Sign out</a>"; } else { echo "<a href='login.html' class='txt'>Sign in</a>"; } ?></b></button>
<div><p><img src='img/mark.png' class='mark'/><b style='color:white; margin-top:0.5em;font-size:1em;'><?php include('GeoNavigation/geolocation.php'); if(strlen(userLocation('129.205.114.26')) < 3 ) { echo $_SESSION['location'];} else { echo userLocation('129.205.114.26');}?></b></p></div>
<div><p><b style='color:white; margin-top:0.5em;font-size:1em;'><?php if(strlen($_SESSION['fullName']) != 0 and !empty($_SESSION['fullName'])) { echo $_SESSION['fullName'];}?></b></p>
</div>

    

</div>
</div>

</div>
</body>
</html>

<div class = 'border' style='margin-top:5em;'>
<div class="navbar">
    <div class='head1'><button class='btn btn-signin'><a class='txt' href='signup.html'>Feedback</a></button> </div>
    <div class='head1'><button class='btn btn-signin'><a class='txt' href='signup.html'>Constact Us</a></button> </div>
    <div class='head1'><button class='btn btn-signin'><a class='txt' href='signup.html'>About Us</a></button> </div>
</div>
</div>