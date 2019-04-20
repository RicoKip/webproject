<?php

//establish connection to database
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'fyp');
$conn = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
//$conn = mysqli_connect('localhost', 'mamp', 'root', 'fyp'); 

if(!$conn){
    die('Connection error. Try again later'.mysqli_error());
} 