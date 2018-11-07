<?php
session_start();
//
//php page to update profile details
?>
<!doctype html>
<html>
<head>
    <title>LodgeConnect- Update Profile</title>
    <meta charset='UTF-8' lang='EN-US'>
    <link rel='shortcut icon' href='img/logo.jpg'>
    <link type='text/css' rel='stylesheet' href='css/materialize.min.css'>
    <link rel='stylesheet' href='css/profile.css'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
    <script>
        function script() {
            var variable = document.getElementById('block');
            variable.style.display = 'block';
            var variable = document.getElementById('block1');
            variable.style.display = 'block1';
            var variable = document.getElementById('block2');
            variable.style.display = 'block2';
        }
    </script>
</head>

<body>
    <div class='header'>
        <div class='logo'>
            <img src="img/logo.jpg">
        </div>
        <div class="motto">
            <label><marquee>Connect easily...</marquee></label>
        </div>
    </div>
    <div class="aim" style="width:100%">
        <!-- <img src=""> -->
        <h3>Update Your Profile here...</h2>
        <p> Let us know You</p>
    </div>
    <div class="form">
        <form action="profileupdatesubmission.php" method="GET" name="updateProfile">
            <div class="input-field modify">
                <input id="first_name" type="text" name="firstName" class="validate" required>
                <label for="first_name">First Name</label>
            </div>
    
            <div class="input-field modify">
                <input id="last_name" type="text" name="lastName" class="validate" required>
                <label for="last_name">Last Name</label>
            </div>
            <div class="input-field modify">
                <input id="state" type="text" name='city-state-nation' class="validate" required>
                <label for="City-State-Nationality">City-State-Nationlity</label>
            </div>
            <div class="input-field modify">
                <input id="hometown" type="text" name='address' class="validate" placeholder='should be detailed enough' required>
                <label for="address">Address</label>
            </div>
            <div class="input-field modify">
                <input id="contact" type="text" name='contact' class="validate" placeholder="eg +2347037048119" required>
                <label for="contact">Telephone</label>
            </div>
            <div class="input-field modify">
                    <input id="business_name" type="text" name="businessName" class="validate" placeholder="Not Necessary">
                    <label for="business_name">Business Name</label>
                </div>
            <div class="input-field modify">
                <select class="waves-effect waves-light btn" id="jsdone" name ='occupation' style="background-color:white;color:RGB(0,0,70);" required>
                      <option value="" disabled selected>Choose your occupation</option>
                      <option value="Employed">Employed</option>
                      <option value="Unemployed">Unemployed</option>
                      <option value="Self-Employed">Self-Employed</option>
                      <option value="Student">Student</option>
                </select>
                <!-- <label>Materialize Select</label> -->
            </div>
            <div class="input-field modify" id="block">
                <input id="nameOfInstitution" type="text" class="validate" name='nameOfInst'>
                <label for="nameOfInstitution">Name of Institution</label>
            </div>
            <div class="input-field modify" id="block1">
                    <input id="nameOfWork" type="text" class="validate" name='nameOfOrg'>
                    <label for="nameOfWork">Name of Organization/Company</label>
            </div>
            <div class="input-field modify" id="block2">
                        <input id="nameOfJob" type="text" class="validate" name='nameOfJob'>
                        <label for="nameOfJob">What self Job do you do?</label>
            </div>
            <div class="input-field modify">
                <select class="waves-effect waves-light btn" name="personality"style="background-color:white;color:RGB(0,0,70);" required>
                <option value="" disabled selected>We can recognize you as?</option>
                <option value="Agent">Agent</option>
                <option value="Caretaker">Caretaker</option>
                <option value="Landlord">Landlord</option>
                <option value="Buyer">Buyer</option>
                <option value="Neutral">Neutral</option>
                </select>
            </div>

            <div class="input-field modify">
                <select class="waves-effect waves-light btn" name="gender" style="background-color:white;color:RGB(0,0,70);" required>
                        <option value="" disabled selected>Choose your gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
            </div>
            <!--input id="submit" type="submit" value="Update Profile"-->
            </div>
            <button class="btn btn-lg btn-primary btn-block btn-signin"  name="updateProfile" type="submit">Submits</button>
        </form>

    
    <!-- Compulsory js -->
    <script>
        $(document).ready(function() {
            $('select').material_select();
        });
    </script>
    <!--js script for form live-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <!--Compulsory js for pop up institution name-->
    <script>
        (function() {
            'use strict';
            var nameOfInstitution = document.getElementById('block');
            var nameOfWork = document.getElementById('block1');
            var nameOfJob = document.getElementById('block2');
            var caller = document.getElementById('jsdone');
            nameOfInstitution.className = 'hide';
            nameOfWork.className = 'hide';
            nameOfJob.className = 'hide';
            caller.onchange = function() {
                if (this.value == 'Student') {
                    nameOfInstitution.className = "input-field modify";
                    nameOfWork.className = 'hide';
                    nameOfJob.className = 'hide';
                } else if(this.value == 'Employed'){
                    nameOfWork.className = "input-field modify";
                    nameOfInstitution.className = 'hide';
                    nameOfJob.className = 'hide';
                } else if(this.value == 'Self-Employed'){
                    nameOfJob.className = "input-field modify";
                    nameOfInstitution.className = 'hide';
                    nameOfWork.className = 'hide';
                }
                else {
                    nameOfInstitution.className = "hide";
                    nameOfWork.className = 'hide';
                    nameOfWork.className = 'hide';
                }
                
                
            };
        }());
    </script>
</body>