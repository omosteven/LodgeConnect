<script type="text/javascript">

    function showPosition(output){

        if(navigator.geolocation){

            navigator.geolocation.getCurrentPosition(function(position){

                var mylatitude = position.coords.latitude;
                var mylongitude = position.coords.longitude;
                var positionInfo = "Your current position is (" + "Latitude: " + position.coords.latitude + ", " + "Longitude: " + position.coords.longitude + ")";
                if(output =='lat'){
                    document.write(mylatitude);
                } else if(output == 'lon') {
                    document.write(mylongitude);
                } else if(output == 'both'){
                    document.write(mylatitude.toString()+','+mylongitude);
                } else{
                    document.write('output should lon,lat or both');
                }
                //document.getElementById("result").innerHTML = positionInfo;

            });

        } else{

            alert("Sorry, your browser does not support HTML5 geolocation.");

        }

    }
//typecasting to string is done if the argument passed is both

</script>
<?php //to convert the JS to php function
    function showPosition($output){
        if($output == 'lon'){
           echo  "<script>
                showPosition('lon');
            </script>";
        } elseif($output == 'lat'){
            echo "<script>
                showPosition('lat');
            </script>";
        } elseif($output == 'both'){
            echo "<script>
                showPosition('both');
            </script>";
        } else{
            echo "<script>
                showPosition('error');
            </script>";
        }
    }
//showPosition('both');
?>