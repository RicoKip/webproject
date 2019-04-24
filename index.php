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
<!--Establish session-->
<?php
session_start();
?>
<?php $title = "Home"?>    
<?php include ('includes/header.php');?>   
<!--Main window display image with navbar-->
<?php include ('includes/navbarTemp.php');?>
<div class = "slideshow slideshowBrd">
    <?php include ('includes/navbarTempHeader.php');?>
        <?php
        //check sessions has been set
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
                //modal login form
                include ('includes/loginForm.php');
            }
        ?>
    <?php include ('includes/navbarTempFooter.php');?>
</div>
<!--main body content with links-->
<div class = "row">
    <div class="content">
        <!--image box to company services-->
        <div class="row boxSpc">
            <div class="col-5 imagebox1"></div>
            <div class="col-7 boxTxt">
                <p>View companies offering goods and services 
                    in the agricultural sector. </p>
                <a href="services.php">Find Out More Here</a>
            </div>
        </div>
        <!--horizontal line division between boxes-->
        <hr class="new1">
        <!--image box for farm lands-->
        <div class="row boxSpc ">
            <div class="col-7 boxTxt">
                <p>View farms that are nearby. Explore organic farming.</p>
                <a href="farms.php">Find Out More Here</a>
            </div>
            <div class="col-5 imagebox2"></div>
        </div>
        <hr class="new1">
        <div class="row boxSpc ">
            <div class="col-5 imagebox3"></div>
            <div class="col-7 boxTxt">
                <p>Learn more on modern farming methods and <br>
                    techniques and sustainable agricultural practices</p>
                <a href="forum.php">Learn More Here</a>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/footer.php');?> 
        
