<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include ('connection.php');

session_start();

$adr1 = $_SESSION['userAdr1'];
$adr2 = $_SESSION['userAdr2'];
$zip = $_SESSION['userZip'];
$city = $_SESSION['userCity'];
$country = $_SESSION['userCountry'];

$address = "$adr1, $adr2, $city, $zip, $country ";
//$prepAddr = str_replace(' ','+',$address);
//$geocode=file_get_contents('https://maps.googleapis.com/maps/api/geocode/json?address='.$prepAddr.'&key=AIzaSyAh-2b6-TpKt1mD_gqt68TprUZK3sPmtpE');
//$output= json_decode($geocode);
//$latitude = $output->results[0]->geometry->location->lat;
//$longitude = $output->results[0]->geometry->location->lng;