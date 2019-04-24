<?php

//establish connection to database
$DB_SERVER = 'localhost';
$DB_USERNAME = 'root';
$DB_PASSWORD = 'root';
$DB_DATABASE = 'fyp';
$conn = mysqli_connect($DB_SERVER, $DB_USERNAME, $DB_PASSWORD, $DB_DATABASE);
 
//error calling if connection fails
if(!$conn){
    die('Connection error. Try again later'.mysqli_error());
} 