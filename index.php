<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();
?>
<?php $title = "Home"?>    
<?php include ('includes/header.php');?>   
<!--Main window display image-->
<?php include ('includes/navbarTemp.php');?>
<div class = "slideshow slideshowBrd">
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
</div>

<div class = "row">
    <div class="content">
        <!--image box to company services-->
        <div class="row boxSpc">
            <div class="col-5 imagebox1"></div>
            <div class="col-7 boxTxt">
                <!--<h1>COMPANY SERVICES</h1>-->
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
                <!--<h1>FARM LANDS</h1>-->
                <p>View farms that are nearby. Explore organic farming.</p>
                <a href="farms.php">Find Out More Here</a>
            </div>
            <div class="col-5 imagebox2"></div>
        </div>
        <hr class="new1">
        <div class="row boxSpc ">
            <div class="col-5 imagebox3"></div>
            <div class="col-7 boxTxt">
                <!--<h1>FORUM</h1>-->
                <p>Learn more on modern farming methods and <br>
                    techniques and sustainable agricultural practices</p>
                <a href="forum.php">Learn More Here</a>
            </div>
        </div>
    </div>
</div>
<?php include ('includes/footer.php');?> 
        
