<?php
//establich database connection
include ('connection.php');
//start session
session_start();
//obtain logged in users informationfrom stored sessions
$adr1 = $_SESSION['userAdr1'];
$adr2 = $_SESSION['userAdr2'];
$zip = $_SESSION['userZip'];
$city = $_SESSION['userCity'];
$country = $_SESSION['userCountry'];
//arrange data in an address form
$address = "$adr1, $adr2, $city, $zip, $country ";

/*Additional implementation to test data is being gathered and can be converted*/
//$prepAddr = str_replace(' ','+',$address);
//$geocode=file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$prepAddr.'&key=AIzaSyAh-2b6-TpKt1mD_gqt68TprUZK3sPmtpE');
//$output= json_decode($geocode);
//$latitude = $output->results[0]->geometry->location->lat;
//$longitude = $output->results[0]->geometry->location->lng;