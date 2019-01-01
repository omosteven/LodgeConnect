<head>
    <title>LodgeConnect</title>
    <meta charset="UTF-8" lang="EN-US">
    <link rel="shortcut icon" href="../img/logo.jpg">
    <link rel="stylesheet" href="../css/stephen headline.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="../js/jquery-3.2.1.min.js"></script>
    <script defer src="../js/stephen headline.js"></script>
    <style>
        /* temporary needs to be removed */
        p{
            word-wrap : break-word;
        }
        /*  */
        .header {
            clear: both;
            width: 100%;
            height:120px;
            margin-bottom:1em;
            position:relative;
        }

        .header .logo {
            padding: 0;
            padding-top: 1em;
            padding-left: 1em;
            float: left;
            height: 100px;
            margin-bottom: 1em;
            overflow: none
        }

        .header .logo img {
            width: auto;
            height: 100%;
        }

        .header .motto {
            padding: 0;
            padding-top: 1em;
            float: right;
        }

        .header .motto label {
            font-display: flex;
            display:block;
            padding-top:1em;
            padding-bottom:1em;
            font-size: 20px;
            font-size-adjust: inherit;
            font-family: "Lucida Console", monaco, monospace;
            width: 100%;
        }
        div.header .login-signUp{
            position:absolute;
            bottom:0;
            right:0;
        }
        div.header .login-signUp button.logSign{
            width:150px;
            height:40px;
            outline:none;
            background-color:cornsilk;
            border-color: rgba(0,0,70);
            -moz-border-color:rgba(0,0,70);
            transition-duration:0.4s;
            -moz-transition-duration:0.4s;
            -webkit-transition-duration:0.4s;
            -o-transition-duration:0.4s;
        }
        div.header .login-signUp button.logSign:hover{
            cursor:pointer;
            background-color:rgba(0,0,70);
            color:cornsilk;
        }
        /*mobile view for header*/

        @media screen and (max-width:600px) {
            .header {
                padding: 0.5em;
                height:170px;
                display:none;
            }
            .header .logo {
                padding: 0;
                width: 50%;
            }
            .header .logo img {
                width: 100%;
            }
            .header .motto {
                padding: 0.5em;
                width: 50%;
                text-align:right;
            }
        }
        @media screen and (max-width:460px) {
            .header .motto {
                text-align:left;
            }
        }
        @media screen and (max-width:310px) {
            .header {
                padding: 0.5em;
                height:210px;
            }
            .header .logo {
                padding: 0;
                width: 100%;
                clear: both;
                margin:0;
            }
            .logo img {
                max-width: 100%;
            }
            .header .motto {
                width: 100%;
                padding: 0;
                text-align: left;
                clear: both;
                margin:0;
            }
            div.header .login-signUp{
                position:absolute;
                bottom:0;
                left:0;
                right:auto;
                padding-left:0.5em;
            }
            div.header .login-signUp button.logSign{
                height:30px;
                width:120px
            }
        }
        @media screen and (max-width:254px) {
            div.header .login-signUp button.logSign{
                width:70px
            }
        }

        /* mobile view for header ends. */
        /* mobile view for header ends. */
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
</head>

<body>
    <div class="header">
        <div class="logo">
            <a href="../index.html"><img src="../img/logo.jpg" id="image"></a>
        </div>
        <div class="motto">
            <label>Connect easily...</label>
        </div>
        <div class="login-signUp">
            <button class="logSign" onclick="logIn()">Log in</button>
            <button class="logSign" onclick="signUp()">Sign Up</button>
        </div>
    </div>
    <!-- SPACE FOR BORDER AND LOCATION -->
    <!-- <div class='menu-down'>
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
        <a href='postgig.php'><button class='header-btn'>Advertisement</button></a>
        <a href='postgig.php'><button class='header-btn'>Need a RoomMate?</button></a>
        <a href='postgig.php'><button class='header-btn'>Sell Service</button></a>
        <a href='services.php'><button class='header-btn'>My Services</button></a>
        <a href='updateprofile.php'><button class='header-btn'>Profile</button></a>
    </div> -->
    <div class="nav-bar" id="navBar">
        <div class="menu-down" id="menuDown">
            <a href="javascript:void(0);"><img src="../img/logo.jpg"></a>
            <a href="javascript:void(0);" onclick="displayPrivate()"><i class="fa fa-bars" id="iconLib1"></i>
                Menu</a>
            <a href="javascript:void(0);" onclick="displayPrivateMobile()" class="mobile-reserve"><i class="fa fa-bars"
                    id="iconLibSpecial"></i></a>

            <div class="dropdownContent w3-animate-left" id="dropdownContent">
                <a href='cart.php' class="mobileNavLink">My Cart</a>
                <div class="services-dropDown" style="display:none" id="servicesDropdown">
                    <a href="javascript:void(0)">My Services </a>
                    <a href="javascript:void(0)">Sell Services </a>
                </div>
                <a href="chats.php" class="mobileNavLink">My Order</a>
                <a href='chats.php' class="mobileNavLink">Chats</a>
                <a href="chats.php" class="mobileNavLink">Contacts</a>
                <a href='chats.php' class="mobileNavLink">Payment</a>
            </div>
        </div>

        <div class="other-contents" id="otherContents">
            <a href='postgig.php' class="others-hide w3-animate-right">Need a RoomMate?</a>
            <a href='postgig.php' class="others-hide w3-animate-right">Sell Service</a>
            <a href='services.php' class="others-hide w3-animate-right">My Services</a>
            <a href='updateprofile.php' class="others-hide w3-animate-right">Profile</a>
        </div>
    </div>
    <div class='full-body-container' id="container">
        <p style="width:50%; margin:auto">
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
            A hint is a way of telling NativeScript to temporarily place text inside a textbox, as long
            as a user hasn’t typed text into the textbox. For example, if a textbox hint is "Enter a subject," the text
            "Enter a subject" will appear in the empty textbox. When you tap textbox to enter text, the temporary
            text "Enter a subject" disappears, allowing you to type. Entering text into the textbox will remove the
            temporary text. Deleting all of the text you entered into the textbox will once again display the
            temporary text, "Enter a subject." To set a textbox hint, add a hint attribute to a TextField or TextView:

            /> .
            TIP Hints are a subtle way of making an app more useable. Two common uses for hints are describing
            what should be entered into a textbox (for example, "Enter a subject") and describing the expected
            formatting of the text entered into the textbox (for example, "name@domain.com" for an email
            address).
            TIP If you use a hint effectively, you can often remove desc
        </p>
        <button style='display:none' name='querySearch' value='searchQuery'>Submit</button>

        <div class='Check-geo'>
            <input type='checkbox' class='checkbox' name='geolocation' type='apply'>
            <button class='check'>ApplyMy Geolocation</button>
        </div>


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
                    <option value='hostels'>Campus Hostels</option>
                    <option value='offk'>Off Campus</option>
                </select>
                <select id='gender' name='gender'>
                    <option value='male' selected>Male</option>
                    <option value='female'>Female</option>
                    <option value='female'>Couple</option>
                </select>
                <select name='size' id='size'>
                    <option value='size' selected>Size</option>
                    <option value='1bed'>1 Bedroom</option>
                    <option value='2bed'>2 Bedroom Flat</option>
                    <option value='3bed'>3 Bedroom Flat</option>
                    <option value='self-con'>Self container</option>
                </select>
                <select name='subTypeService' id='service'>
                    <option value='default'>Category</option>
                    <option value='painting' selected>Painting</option>
                    <option value='plumbling'>Plumbling</option>
                    <option value='furniture-works'>Furniture Works</option>
                </select>
                <select name='priceRange' class='barnav'>
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
                <script type="text/javascript" src='js/countries.js'>
                </script>
            </div>
        </div>

    </div>
    <script>
        //log in reroute
        function logIn() {
            window.location = "../login.html";
        }
        //signup reroute
        function signUp() {
            window.location = "../signup.html";
        }
        //to open modal of private activities

        let counter = 2;

        function displayPrivate() {
            if (counter % 2 == 0) {
                dropdownContent.style.display = "block";
                document.getElementById('iconLib1').className = "fa fa-window-close";
                normalDetails();
            } else {
                $(document).ready(function() {
                    $(dropdownContent).fadeOut("slow");
                });
                document.getElementById('iconLib1').className = "fa fa-bars";
            }
            counter++;
        }
        //to open modal of private activities for mobile;
        let mobileNavLink = document.getElementsByClassName('mobileNavLink');
        let servicesDropClick = document.getElementById('servicesDropdown');
        let counterB = 2;

        function displayPrivateMobile() {
            dropdownContent.className = "dropdownContent";
            if (counterB % 2 == 0) {
                $(document).ready(function() {
                    $(dropdownContent).slideDown("slow");
                });
                document.getElementById('iconLibSpecial').className = "fa fa-window-close";
                for (var countArrayLink = 0; countArrayLink < 5; countArrayLink++) {
                    mobileNavLink[countArrayLink].href = "";
                    mobileNavLink[countArrayLink].innerHTML = "";
                }
                //this section defines the change of the text link and destination
                changeDetails();
            } else {
                $(document).ready(function() {
                    $(dropdownContent).slideUp("slow");
                });
                document.getElementById('iconLibSpecial').className = "fa fa-bars";
            }
            counterB++;
        }

        function normalDetails() {
            mobileNavLink[0].href = "javascript:void(0)";
            mobileNavLink[0].innerHTML = "My Cart";
            mobileNavLink[1].href = "javascript:void(0)";
            mobileNavLink[1].innerHTML = "My Order";
            mobileNavLink[2].href = "javascript:void(0)";
            mobileNavLink[2].innerHTML = "Chats";
            mobileNavLink[3].href = "javascript:void(0)";
            mobileNavLink[3].innerHTML = "Contacts";
            mobileNavLink[4].href = "javascript:void(0)";
            mobileNavLink[4].innerHTML = "Payment";
            mobileNavLink[0].removeEventListener("click");
        }

        function changeDetails() {
            mobileNavLink[0].href = "javascript:void(0)";
            mobileNavLink[0].innerHTML =
                "Services <i class='fas fa-chevron-right' style='display:block;text-align:right;float:right'></i>";
            mobileNavLink[1].href = "javascript:void(0)";
            mobileNavLink[1].innerHTML = "My Cart";
            mobileNavLink[2].href = "javascript:void(0)";
            mobileNavLink[2].innerHTML = "My Order";
            mobileNavLink[3].href = "javascript:void(0)";
            mobileNavLink[3].innerHTML = "Need a roommate";
            mobileNavLink[4].href = "javascript:void(0)";
            mobileNavLink[4].innerHTML = "Login";
            mobileNavLink[0].addEventListener("click", function() {
                $(servicesDropClick).slideToggle();
            });
        }

        //to open other activities menu bar
        var openClose = 2;

        function displayOthers() {
            var others_hide = document.getElementsByClassName('others-hide');
            var others_content = document.getElementById('otherContents');
            // others_content.style.height = window.innerHeight;
            // others_content.style.width = window.innerWidth;
            if (openClose % 2 == 0) {
                for (var counterRelease = 0; counterRelease < 4; counterRelease++) {
                    others_hide[counterRelease].style.display = "block";
                    others_hide[counterRelease].style.float = "none";
                    others_hide[counterRelease].style.clear = "both";
                    others_hide[counterRelease].style.width = "100%";
                    others_hide[counterRelease].style.opacity = "0.9";
                    others_hide[counterRelease].style.color = "rgba(255, 248, 220)";

                }
                document.getElementById('iconLib').className = "fa fa-window-close";
            } else {
                for (var counterRelease = 0; counterRelease < 4; counterRelease++) {
                    others_hide[counterRelease].style.display = "none";
                }
                document.getElementById('iconLib').className = "fa fa-bars";
            }
            openClose++;
        }
        //to create a sticky nav-bar
        window.onscroll = function() {
            stickyNav()
        };
        var navbar = document.getElementById('navBar');
        var sticky = navbar.offsetTop;

        function stickyNav() {
            if (window.pageYOffset >= sticky) {
                navbar.classList.add("sticky");
            } else {
                navbar.classList.remove("sticky");
            }
        }
    </script>
</body>