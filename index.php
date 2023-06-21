<?php

$url = "https://getbootstrap.com/";

// Setup this setting on .env file
$apiEndPoint = "http://api.linkpreview.net/";
$apiKey = "YOUR-API-KEY";

// From URL to get webpage contents.
$api = $apiEndPoint."?key=".$apiKey."&q=".$url;
 
// Initialize a CURL session.
$ch = curl_init();
 
// Return Page contents.
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
 
// grab URL and pass it to the variable.
curl_setopt($ch, CURLOPT_URL, $api);
 
$result = curl_exec($ch);
 
echo $result;
