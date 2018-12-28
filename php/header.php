<head>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            padding: 0;
            margin: 0;
        }

        .header {
            clear: both;
            width: 100%;
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
            height: 100%;
        }

        .header .motto label {
            font-display: flex;
            font-size: 20px;
            font-size-adjust: inherit;
            font-family: "Lucida Console", monaco, monospace;
            width: 100%;
        }


        /*mobile view for header*/

        @media screen and (max-width:600px) {
            .header {
                padding: 0.5em;
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
            }
        }

        @media screen and (max-width:310px) {
            .header {
                padding: 0.5em;
            }
            .header .logo {
                padding: 0;
                width: 100%;
                clear: both;
            }
            .logo img {
                max-width: 100%;
            }
            .header .motto {
                width: 100%;
                padding: 0;
                text-align: left;
                clear: both;
            }
        }


        /* mobile view for header ends. */
        /* mobile view for header ends. */
    </style>
</head>
<div class="header">
    <div class="logo">
        <a href="index.html"><img src="img/logo.jpg" id="image"></a>
    </div>
    <div class="motto">
        <label>Connect easily...</label>
    </div>
</div>