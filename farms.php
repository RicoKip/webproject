<!DOCTYPE html>
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
<!--Establish session.-->
<?php
session_start();
?>
<!--set page title-->
<?php $title = "farms"?>
<!--set body heading in setFarmItems file-->
<?php $heading = "FARMS"?>
<?php include ('includes/header.php');?>
<!--set navigation bar with sessions-->
<?php include ('includes/navbarTempHeader.php');?>
    <?php
        if(isset($_SESSION['userName'])){?>
            <div class="dropdown">
                <button class="dropdownBtn" style="width:100%;height:100%;background-color: #333;"><?php echo $_SESSION['userName']?></button>                
                <div class="dropdown-content">
                    <a href="account.php">Account</a>
                    <a href="profile.php">Profile</a>
                    <a href="logout.php">Log-Out</a>
                </div>
            </div>
        <?php
        }else{
            include ('includes/loginForm.php');
        }
    ?>
<?php include ('includes/navbarTempFooter.php');?>

<?php include ('includes/listViewTempHeader.php');?>
<!--include farm items-->
    <?php
    // code to update list view with saved farms from database
    include ('processes/setFarmItems.php');
    ?>
<?php include ('includes/listViewTempFooter.php');?>
<?php include ('includes/footer.php');?>
