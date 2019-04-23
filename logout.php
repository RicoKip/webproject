<?php
//cancel session and remove user
session_start();

if(session_destroy()){
   //redirect to main page 
    header("location:index.php");
}
