<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
Reference: w3schools How To - Login Form
-->
<?php $title = "Login"?>    
<?php include ('includes/header.php');?>     
<div class="row">
    <div class="content contentBrd">
        <div class="boxTxt" style="background-color: #ccc">
            <h1>LOGIN FORM</h1>
        </div>
        <?php
        if(@$_GET['Empty'] == true){?>
        <div class="boxTxt"><?php echo $_GET['Empty']?></div>
        <?php    
        }
        ?>
        <?php
        if(@$_GET['Invalid'] == true){?>
        <div class="boxTxt"><?php echo $_GET['Invalid']?></div>
        <?php    
        }
        ?>
        <div class="row">
            <div class="content contentBrd">
                <form action="login.php" method="post"><!--action: process for login in user. Uses sessions-->
                    <div class="containerLgn">
                        <label for="email"><b>Email</b></label>
                        <input type="text" placeholder="Enter Email" name="email">
                        <label for="passWd"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="password">
                        <button type="submit" name="login" class="signInBtn">LOGIN</button>
                    </div>
                    <div class="containerLgn" style="background-color: #888">
                        <div class="boxTxt" ><a href="registrationForm.php" style="color: white;">Not yet Registered. Register here</a></div>
                    </div>
                </form>
            </div>
        </div>  
    </div>
</div>

<?php include ('includes/footer.php');?>
