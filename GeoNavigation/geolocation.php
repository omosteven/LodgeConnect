<?php
//Thi is a geolocation file
function userLocation($ip) {
    $url = 'http://api.db-ip.com/v2/free/'.$ip.'';
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);  
    curl_setopt($ch, CURLOPT_HEADER, 0);  
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
    $output = curl_exec($ch);
    $geoloc = json_decode($output, true);
    //print_r($geoloc);
    if($geoloc['city'] == $geoloc['stateProv']){
        $loc = $geoloc['city'].', '.$geoloc['countryName'];
        return $loc;
    } else {
        $loc = $geoloc['city'].', '.$geoloc['stateProv'].', '.$geoloc['countryName'];
        return $loc;
    }
}
echo userLocation('196.220.144.2');

?>