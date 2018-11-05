<?php
$url = 'https://bot.dialogflow.com/7e122fbe-3651-4ada-aedb-16778dfd7a3d'; //parse the url bot here
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  
$output = curl_exec($ch);
echo $output;
?>