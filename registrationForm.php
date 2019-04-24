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
<!--Registration page. Displays the registration form-->
<?php $title = "Registration"?>    
<?php include ('includes/header.php');?>   
<!--set registration form body-->  
<div class="row">
    <div class="content contentBrd">
        <div class="boxTxt" style="background-color: #ccc">
            <h1>REGISTRATION FORM</h1>
        </div>
        <!--displays registration form-->
        <?php include('includes/registerForm.php');?>
    </div>
</div>

<?php include ('includes/footer.php');?>  

