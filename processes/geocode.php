<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require ('connection.php');

session_start();

$adr1 = $_SESSION['userAdr1'];
$adr2 = $_SESSION['userAdr2'];
$zip = $_SESSION['userZip'];
$city = $_SESSION['userCity'];
$country = $_SESSION['userCountry'];

$fullAdr = "'".$adr1."', '".$adr2."', '".$city."', '".$zip."', '".$country."' ";
$geo = file_get_contents($fullAdr);
