<!--
Created by: Eric Kipkemoi
Edited and referenced other code implementation
Outsourced images used in the project
References: 
W3S - Login and Registration forms and processes, Responsive web deisigns image file upload, grid view and
box sizing properties. Web styling.
StackOverflow - Google maps API implementation, Login and registration implementation, Apache server 
web programming implementation.
YouTube tutorials - server user login and registration with sessions, image database uploads, Google Maps
geocoding and implementation, database storage implementation using php and mysql, embedded web javascript
Links to the reference criteria available in the project report
-->
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