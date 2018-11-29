<?php
session_start();
//
//php page to update profile details
?>
<!Doctype Html>
<html>
<head>
    <title>LodgeConnect- Upload File</title>
    <meta charset='UTF-8' lang='EN-US'>
    <link rel='shortcut icon' href='img/logo.jpg'>
    <link rel='stylesheet' href='css/upload.css'>
    
    
    <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
    <script>
    </script>
    <script type='text/javascript' src='js/cookies.js'></script>
</head>

<body>
    <?php include('headerlogo.html'); ?>
     <div class="aim" style="width:100%">
        <h3>Have you got a service to sell?</h3>
        <p> Let people know about it right here</p>
        <div id='msg' class='msg'>Thanks, your Service has been publicized, kindly go to home and confirm by searching for it</div>
        <script>
            if(checkCookie('uploadresponse') == 1) {
                var msg = checkCookie('uploadresponse');
                document.getElementById("msg").className = 'msg';
                deleteCookie('uploadresponse');
            } else {
                deleteCookie('uploadresponse');
                document.getElementById('msg').className='hide';
            }
        </script>
    </div>
    <div class='full-content-page'>
<div>
<form action = 'submituploadfile.php' method = 'GET' name = 'postService'>
<div class='bars'>
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
       <option value='self-con'>Self contain</option>
    </select>
    <select name ='subTypeService' id='service'>
        <option value='default'>Category</option>
        <option value='painting' selected>Painting</option>
        <option value='plumbling'>Plumbling</option>
        <option value='furniture-works'>Furniture Works</option>
    </select>
    <select name = 'priceRange' class='barnav' required>
       <option value='price'>Price Range</option>
       <option value='b9k'>Below 9,999</option>
       <option value='b24k'>10,000 - 24,999</option>
       <option value='b49k'>25,000 - 49,999</option>
       <option value='b69k'>50,000 - 69,999-</option>
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
<div class='box-down' id='box-down'>
<div class='detail' id='lodge-detail'>Upload Images about the Lodge Here</div>
<div class='detail' id='house-detail'>Upload Images of the House you want/recommend to sell Here</div>
<div class='detail' id='rent-detail'>Upload Images of the apartment you want to let out</div>
<div class='detail' id='hotel-detail'>Upload Images of the Hotel of your Business</div>
<div class='detail' id='service-detail'>Upload Images about what the Service entails</div>
<div class='detail' id='access-detail'>Upload Images about what the Home Accessories are</div>
<div class='full-card' id='full-card'>
<div class='half'>
<img id='output' class='image'/> 
<img id='output1' class='image'/>
</div>
<div class='half'>
<img id='output2' class='image'/>  
<img id='output3' class='image'/> 
</div>
</div>
<div class='file-container' id='file-container'>
<div class='file-hover'><input type='file'  name='frontView' title='Front View'id='file'onchange='loadFile(event)' accept='image/gif, image/jpeg,image/png' required/></div>
<div class='file-hover'><input type='file'  name='sizeView' title='Side View'id='file'onchange='loadFile1(event)' accept='image/gif, image/jpeg,image/png' required/></div>
<div class='file-hover'><input type='file'  name='backView' title='Back View'id='file'onchange='loadFile2(event)' accept='image/gif, image/jpeg,image/png' required/></div>
<div class='file-hover'><input type='file'  name='extraView' title='Extra View'id='file'onchange='loadFile3(event)' accept='image/gif, image/jpeg,image/png' required/></div>
<div class='file-hover'><input type='file'  name='optionalView1' title='Optional View' accept='image/gif, image/jpeg,image/png'/></div>
<div class='file-hover'><input type='file'  name='optionalView2' title='Optional View'accept='image/gif, image/jpeg,image/png'/></div>
<div class='file-hover'><input type='file'  name='optionalView3' title='Optional View'accept='image/gif, image/jpeg,image/png'/></div>
</div>
</div>
<div>
<div class="full-field" id='full-field'>
<h4 style='margin-left:0.5em'>Please Read the Following Instructions below</h4>
<ul class='pro'>
    <h3 class='pro'>Procedures & Tips:</h3>
    <li>Click on the Type, and Select the Service</li>
    <li>Navigate your Cursor to the New Selection fields your Service Type brings to you</li>
    <li>Select the possibly related options to the Service in the new selection fields</li>
    <li>Navigate your Cursor to the Price Range Selection Field</li>
    <li>Select the Minium and Maximum Prices for your Service</li>
    <li>Then Select Country and State where your Service can be accessed</li>
    <li>Upload Images</li>
    <li>Try to Upload more Images of your Service via the optional view Choose File</li>
    <li>The more you upload Images, the more your people get to know more about your Services</li>
    <li>Make your Submission and you're done</li>
    <li>Go to Home page and Search for your Service to Confirm Uploads</li>
</ul>
</div>

<div>
<div class="full-field-change" id='full-field-change'>
<h4 style='margin-left:0.5em'>Please Fill in the required information (*) below</h4>
<label class='field'>Name of the Service*</label>
<div><input  type="text" name='nameOfService' id='setcol'class ='field' size=30 placeholder='like name of lodge, hotel...' required></div>
<label class='field'>Contact Email*</label>
<div><input  type="email" name='contactEmail' id='setcol' class ='field' size=30 placeholder='Email to Contact' required></div>
<label class='field'>Contact Telephone*</label>
<div><input  type="tel" name='contactTel' id='setcol' class ='field' size=30 placeholder='e.g +2347037048119' required></div>
<label class='field'>Address of the Service*</label>
<div><input  type="text" name='addressOfService' id='setcol' class='field' size=30 placeholder='Full Address' required></div>
<label class='field'>City*</label>
<div><input  type="text" name='city' id='setcol'class ='field' size=30 placeholder='like Akure, Lagos...' required></div>
<label class='field'>More Description of the Service</label>
<div><textarea  cols=29 rows = 5 type="text" id='setcol' name='desc' class='textfield' placeholder='Optional but let people know more of the service'></textarea></div>
<div class='btn-align'><button class="btn" name="postService" type="submit">Upload Service</button></div>
</div>
</div>
</form>
    <!-- Compulsory js -->
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
    <!--js script for form live-->
    <!--script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!Compulsory js for pop up institution name-->
<script type='text/javascript' src='js/uploadfile.js'></script>
<?php include('footer.php'); ?>
</body>
</html>