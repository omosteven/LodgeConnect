<style>
    /*begining of Filter drop down style*/
.Filter-down {
    width:10em ;
    margin-top:1em ;
    float:left ;
    margin-left:1em ;
}
.Filter-down:hover .bar {
display: block ;
}
.Check-geo {
    
   float:right ;
   margin-top:1em ;
}
.check {
    color:red;
    background:white ;
    float:right ;
    margin-right:1em ;
    border-radius: 2em ;
    
}
.check:hover{
    color:white ;
    background-color:green ;
    
}
.Filter-btn {
    color:red ;
    background-color:white ;
    border-radius:2em ;
    
}
.Filter-btn:hover  {
    color:white ;
    background-color:red ;
}
.bar {
    max-width:auto ;
    float: left ;
    font-size:1.8em ;
    border-radius: 1.5em ;
    align-content: center ;
    display: none ;
    position: absolute ;
  
    width: 4em ;
    height:auto ;
    /*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
    z-index: 1 ;
}
.barnav:hover {
    color:rgb(0,0,70) ;
    background-color: white ;
}

.barnav {
    float: left ;
    color:white ;
    background-color: rgb(24, 9, 9) ;
    padding: 1px ;
    font-weight: normal ;
    margin-top:0.5em ;
    margin-left:0em ;
    margin-right: 0em ;
    font-size: 0.7em ;
    border-radius: 1.5em ;
    
}
/*End of Filter drop down style*/

/*begining of Menu drop down style*/
.menu-btn {
    color:white ;
  
    font-size:0.8em ;
    border-radius:1em ;
    height:3em ;
   
}
.menu-btn:hover {
    color:red ;
    background-color:white ;
}

.menu-form button {
float: none ;
color: white ;
background-color:rgb(0,0,70) ;
padding: 12px 16px ;
text-decoration: none ;
display: block ;
text-align: center ;
}

.menu-form {
display: none ;
position: absolute ;
background-color: white ;
width: auto ;
height:auto ;
/*box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
z-index: 1 ;

}

/* Show the dropdown menu on hover */
.menu-down {
    width:1em ;
    margin-top:0em ;
    margin-left: 1em ;
    margin-bottom:-1em ;
    float:left ;
}
.menu-down:hover .menu-form {
display: block ;
}
.menu-btn {
    color:darkred ;
    background-color:white ;
    border-radius:1em ;
    
    
}
.menu-btn:hover  {
    color:white ;
    background-color:darkred ;
}
/* End of Menu drop down style*/
.header-detail {
    margin-top:2em ;
    
    margin-bottom:-1em ;
    
}
.header-btn {
    color:darkred;
    background-color:white;
    border-radius:1em;
    height:2.8em;
    margin-right:1em;
    float:right;
}
.header-btn:hover {
    color:white;
    background-color:rgb(128, 24, 224);
}




/*border down */
body{
  width:100%;
  height:100%;
  margin: 0;
  text-decoration:none;
  background-size:100% 100%;
  background-color:RGB(250,250,250);
  background-position:fixed;
  /*background-image: url('freelance1.jpg');*/
  opacity:1;
  background-repeat:no-repeat;
  background-position:fixed;
  filter:alpha(opacity=100);
  z-index: -1
  /*linear-gradient(rgb(104, 145, 162), rgb(12, 97, 33));*/
}
.border {
    color: rgb(0,0,70);
    background-color: rgb(0,0,70);
    width: 100%;
    height:auto;
    margin-top:-0.5em;
    border: 5px thin rgb(0,0,70);
    
}
a {
    text-decoration:none;
}

/* Navbar container */
.navbar {
  overflow: hidden;
  background-color: rgb(0,0,70); /*#333*/
  font-family: Arial;
}

.hide {
    display: none;
}



.searchbar {
    color: rgb(250,0,0);
    background-color: rgb(250,0,0);
    margin-top:1em;
    margin-left:auto;
    max-width:100%;
    margin-right:1em;
    margin-bottom:0.2em;
    border: 4px solid rgb(150,0,0);
    float: left;
    font-size:1.8em;
    border-radius: 2em;
    size:100%;
}
.full-body-container {
    /*  margin-bottom:100%;*/
  
    height:100% ;

}

.btn1{
  background-color: white;
  
  color: green;
  font-size: 0.8em;
  height: 2.5em;
  margin-left:1em;
  -moz-border-radius: 3px;
  -webkit-border-radius: 3px;
  border-radius: 0.5em;
  border: none;
  -o-transition: all 0.218s;
  -moz-transition: all 0.218s;
  -webkit-transition: all 0.218s;
  transition: all 0.218s;
}

.btn1:hover,
.btn1:active,
.btn1:focus {
  background-color: rgb(255,0,0);
}

.headline {
  float:right; 
  margin-right:1em;
  position: relative; 
  margin-top:1.7em;
  margin-bottom:0em;
}
.head-line {
  float:left; 
  margin-left:0.5em;
  position: relative; 
  margin-top:0.5em;
  margin-bottom:0em;
}
.txt1 {
  font-size:1em;
  margin-left:1em;
  margin-right:1em;
  color:darkgreen;
  font-weight: bold;
}
.txt1:hover,
.txt1:active,
.txt1:focus{
color:white;
}

.locsize {
  color:white; 
  margin-top:0.5em;
  font-size:1em;
}


.mark {
  width:2.5em; height:2.5em;
  -webkit-filter:invert(100%);
  filter:invert(100%);
  background-color: ;
}
@media screen and (max-width:720px){
    .txt1 {
      font-size:1em;
      margin-left:0.5em;
      margin-right:.5em;
      color:darkgreen;
      font-weight: bold;
    }
    .btn1{
      background-color: white;
      color: green;
      font-size: 0.8em;
      height: 2em;
      margin-left:0.5em;
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      border-radius: 0.5em;
      border: none;
      -o-transition: all 0.218s;
      -moz-transition: all 0.218s;
      -webkit-transition: all 0.218s;
      transition: all 0.218s;
    }
    .locsize {
      color:white; 
      margin-top:0.5em;
      font-size:0.9em;
    }

    .headline {
      float:right; 
      margin-right:0.5em;
      position: relative; 
      margin-top:2em;
      margin-bottom:0em;
    }
    .head-line {
      float:left; 
      max-width:70%;
      margin-left:0em;
      position: relative; 
      margin-top:0.5em;
      margin-bottom:0em;
    }
    .mark {
      width:2em; height:2em;
      -webkit-filter:invert(100%);
      filter:invert(100%);
      background-color: ;
    }

  }

@media screen and (max-width:540px){
    .txt1 {
      font-size:1em;
      margin-left:0.5em;
      margin-right:.5em;
      color:darkgreen;
      font-weight: bold;
    }
    .btn1{
      background-color: white;
      color: green;
      font-size: 0.8em;
      height: 2em;
      margin-left:0.5em;
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      border-radius: 0.5em;
      border: none;
      -o-transition: all 0.218s;
      -moz-transition: all 0.218s;
      -webkit-transition: all 0.218s;
      transition: all 0.218s;
    }
    .locsize {
      color:white; 
      margin-top:0.5em;
      font-size:0.8em;
    }
    .headline {
      float:right; 
      margin-right:0.5em;
      position: relative; 
      margin-top:2em;
      margin-bottom:0em;
    }
    .head-line {
      float:left; 
      max-width:50%;
      margin-left:0em;
      position: relative; 
      margin-top:0.5em;
      margin-bottom:0em;
    }
    .mark {
      width:1.8em; height:1.8em;
      -webkit-filter:invert(100%);
      filter:invert(100%);
      background-color: ;
    }

  }

  @media screen and (max-width:360px){
    .txt1 {
      font-size:0.8em;
      margin-left:0.5em;
      margin-right:.5em;
      color:darkgreen;
      font-weight: bold;
    }
    .btn1{
      background-color: white;
      color: green;
      font-size: 0.8em;
      height: 2em;
      margin-left:0.5em;
      -moz-border-radius: 3px;
      -webkit-border-radius: 3px;
      border-radius: 0.5em;
      border: none;
      -o-transition: all 0.218s;
      -moz-transition: all 0.218s;
      -webkit-transition: all 0.218s;
      transition: all 0.218s;
    }
    .locsize {
      color:white; 
      margin-top:0.5em;
      font-size:0.8em;
    }
    .headline {
      float:right; 
      margin-right:0.5em;
      position: relative; 
      margin-top:2em;
      margin-bottom:0em;
    }
    .head-line {
      float:left; 
      max-width:50%;
      margin-left:0em;
      position: relative; 
      margin-top:0em;
      margin-bottom:0em;
    }
    .mark {
      width:1.5em; height:1.5em;
      -webkit-filter:invert(100%);
      filter:invert(100%);
      background-color: ;
    }

  }




@media screen and (max-width:1080px) {

    .barnav{
        float: left;
        color:white;
        background-color: rgb(24, 9, 9);
        padding: 1px;
        font-weight: normal;
        margin-top: 0.5em;
        margin-left:0em;
        margin-right: 0em;
        font-size: 0.6em;
        border-radius: 1.5em;
        
    }
}
@media screen and (max-width:720px) {
    .barnav{
        float: left;
        color:white;
        background-color: rgb(24, 9, 9);
        padding: 1px;
        font-weight: normal;
        margin-top: 0.5em;
        margin-left:0em;
        margin-right: 0em;
        font-size: 0.5em;
        border-radius: 1.5em;
        
    }
    .menu-down {
        width:1em;
        margin-top:0em;
        margin-left: 1em;
        margin-bottom:-1em;
        float:left;
        
    }
   

}
@media screen and (max-width:540px){
    .header-btn {
        color:darkred;
        background-color:white;
        border-radius:1em;
        height:2.8em;
        margin-right:1em;
        float:right;
    }
    .menu-down {
        width:1em;
        margin-top:0em;
        margin-left: 0em;
        margin-bottom:-1em;
        float:left;
    }
  
    .barnav{
        float: left;
        color:white;
        background-color: rgb(24, 9, 9);
        padding: 1px;
        font-weight: normal;
        margin-top: 0.5em;
        margin-left:2em;
        margin-right: 0em;
        font-size: 0.4em;
        border-radius: 1.5em;
        
    }
    .Filter-down {
        width:10em ;
        margin-top:1em ;
        float:left ;
        margin-left:0.5em ;
    }
}

@media screen and (max-width:480px){
    .header-btn {
        color:darkred;
        background-color:white;
        border-radius:1em;
        height:4.0em;
        margin-right:.5em;
        font-weight: bold;
        float:right;
        font-size: 0.55em;
    }
    .menu-down {
        width:1em;
        margin-top:0em;
        margin-left: 0em;
        margin-bottom:-1em;
        float:left;
    }
    .Filter-down {
        width:10em ;
        margin-top:1em ;
        float:left ;
        margin-left:0.2em ;
    }
    .check {
        color:red;
        background:white;
        float:right;
        margin-right:0.2em;
        border-radius: 2em;
        
    }
}
@media screen and (max-width:360px){
    .header-btn {
        color:darkred;
        background-color:white;
        border-radius:1em;
        height:4.5em;
        margin-right:.5em;
        font-weight: bold;
        float:right;
        font-size: 0.5em;
    }
 
}
</style>

<div class = 'border'>
<div><!--a href="home.php"><img src='img/home.jpeg' alt ='Home' style ='width:3em; height:3.2em; float:left;'/></a--></div>
<div class="navbar">
<div class='head-line'>
<b class='box'><img src='img/marklogo1.png' class='mark'/><b class='locsize'><!--?php include('GeoNavigation/geolocation.php'); if(strlen(userLocation('129.205.114.26')) < 3 ) { echo $_SESSION['location'];} else { echo userLocation('129.205.114.26');}?-->
Gbagada, Lagos, Nigeria, Victoria Island, Abuja</b></b>
<p><b class='namesize'><?php //if(strlen($_SESSION['fullName']) != 0 and !empty($_SESSION['fullName'])) { echo $_SESSION['fullName'];} else { echo $_SESSION['loggedEmail'];}?></b></p>
</div>
<div class='headline'>
<button class='btn1'><a class='txt1' href='signup.html'>Register</a></button> 
<button class='btn1'><?php //if(isset($_SESSION['loggedEmail'])) { echo "<a href='signout.php' class='txt1'>Sign out</a>"; } else { echo "<a href='login.html' class='txt1'>Sign in</a>"; } ?></b></button>
</div>
</div>
</div>
<div>





<div class='menu-down'>
<button class='menu-btn'>Menu<i class="fa fa-caret-down"></i></button>
<div class='menu-form'>
<a href='cart.php'><button class='menu-btn'>My Cart</button></a>
<button class='menu-btn'>My Order</button>
<a href='chats.php'><button class='menu-btn'>Chats</button></a>
<button class='menu-btn'>Contacts</button>
<a href='savecarddetails.php'><button class='menu-btn'>Payment</button></a>
</div>
</div>
<div class='header-detail'>
    <!--a href='postgig.php'><button class='header-btn'>Advertisement</button></a-->
    <a href='postgig.php'><button class='header-btn'>Need a RoomMate?</button></a>
    <a href='postgig.php'><button class='header-btn'>Sell Service</button></a>
    <a href='services.php'><button class='header-btn'>My Services</button></a>
    <a href='updateprofile.php'><button class='header-btn'>Profile</button></a>
</div>
<div class='full-body-container'>
<button style='display:none' name='querySearch' value='searchQuery'>Submit</button>

<div class='Check-geo'><input type='checkbox' class='checkbox' name='geolocation' type='apply'><button class='check'>Apply My Geolocation</button></div>


<div class='Filter-down'><button class='Filter-btn'>Filter Search<i class="fa fa-caret-down"></i></button>
<div class='bar'>
   <select name='type' id='type' class='barnav' required>
       <option value='type' selected>Type</option>
       <option value='lodges'>Lodge</option>
       <option value='house'>House</option>
       <option value='rent'>Rent</option>
       <option value='hotel'>Hotel</option>
       <!--option value='events'>Events</option-->
       <option value='access'>Home Accessories</option>
       <option value='services'>Home Services</option>
    </select>
    <select id='access' name='subTypeAccess' value='default'>
        <option value='default'>Category</option>
        <option value='chairTable'>Chairs & Tables</option>
        <option value='carpetRugs'>Carpets/Rugs</option>
        <option value='bedPillow'>Beds & Pillows</option>
        <option value='others'>Others</option>
    </select>
    <select id='lodge' name='subTypeLodge' value='default'>
        <option value='default'>Category</option>
        <option value ='hostels'>Campus Hostels</option>
        <option value ='offk'>Off Campus</option>
    </select>
    <select id='gender' name='gender'>
        <option value ='male' selected>Male</option>
        <option value ='female'>Female</option>
        <option value ='female'>Couple</option>
    </select>
    <select name='size' id='size'>
       <option value='size' selected>Size</option>
       <option value='1bed'>1 Bedroom</option>
       <option value='2bed'>2 Bedroom Flat</option>
       <option value='3bed'>3 Bedroom Flat</option>
       <option value='self-con'>Self container</option>
    </select>
    <select name ='subTypeService' id='service'>
        <option value='default'>Category</option>
        <option value='painting' selected>Painting</option>
        <option value='plumbling'>Plumbling</option>
        <option value='furniture-works'>Furniture Works</option>
    </select>
    <select name = 'priceRange' class='barnav'>
       <option value='price'>Price Range</option>
       <option value='b9k'>Below 9,999</option>
       <option value='b24k'>10,000 - 24,999</option>
       <option value='b49k'>25,000 - 49,999</option>
       <option value='b69k'>50,000 - 69,999</option>
       <option value='b99k'>70,000 - 99,999</option>
       <option value='b149k'>100,000 - 149,999</option>
       <option value='b249k'>15,000 - 249,999</option>
       <option value='b499k'>250,000 - 499,999</option>
       <option value='b999k'>500,000 - 999,999</option>
       <option value='1b1m'>Above 1000,000</option>
    </select>
    <select id="country" name="country" class='barnav' required></select>
    <select name="state" id="state" class='barnav' required></select>
    <!--Js file that controls the country and respective states selecion-->
    <script type="text/javascript" src='js/countries.js'></script>
</div>
</div>

</div></div>
</form>
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
