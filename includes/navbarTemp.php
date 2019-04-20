 <!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<div class="row">
    <div class=" col-10 navbar">
        <a href="index.php">Home</a>
        <a href="services.php">Services</a>
        <a href="farms.php">Farms</a>
        <a href="forum.php">Forum</a>
    </div>
    <div class="col-2 navbar"> 
            <?php
            if(isset($_SESSION['userName'])){
              echo "<div class='dropdown'>
                        <a >Loggedin</a>                   
                        <div class='dropdown-content'>
                            <a href='#'>Account</a>
                            <a href='#'>Profile</a>
                            <a href='#'>Log-Out</a>
                        </div>
                    </div>";
            }else{
                //include ('includes/loginForm.php');
                echo "<a href='loginForm.php' style='width: 100%;'>Sign-In</a>";
           
            }
            ?>
    </div>
</div>
