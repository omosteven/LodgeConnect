<link href="css/headline.css" rel="stylesheet"/>
<div class = 'border'>
<div><!--a href="home.php"><img src='img/home.jpeg' alt ='Home' style ='width:3em; height:3.2em; float:left;'/></a--></div>
<div class="navbar">
<div class='head-line'>
<b class='box'><img src='img/marklogo1.png' class='mark'/><b class='locsize'><!--?php include('GeoNavigation/geolocation.php'); if(strlen(userLocation('129.205.114.26')) < 3 ) { echo $_SESSION['location'];} else { echo userLocation('129.205.114.26');}?-->
Gbagada, Lagos, Nigeria, Victoria Island, Abuja</b></b>
<p><b class='namesize'><?php if(strlen($_SESSION['fullName']) != 0 and !empty($_SESSION['fullName'])) { echo $_SESSION['fullName'];}?>Omole-Adebomi Steven</b></p>
</div>
<div class='headline'>
<button class='btn1'><a class='txt1' href='signup.html'>Register</a></button> 
<button class='btn1'><?php if(isset($_SESSION['loggedEmail'])) { echo "<a href='signout.php' class='txt1'>Sign out</a>"; } else { echo "<a href='login.html' class='txt1'>Sign in</a>"; } ?></b></button>
</div>
</div>
</div>
<div>
