<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<form action="register.php" method="post" ><!--action: server.php process to server-->
    <div class="containerLgn">
        <h1>REGISTRATION</h1>
        <p>Please complete this form to register account</p>
        <hr class="new1">
        <div class="row boxSpc">
            <div class="col-5 imagebox"></div>
            <div class="col-7 boxTxt">
                <p>Click UPLOAD to select an image file</p>
                <input type="file" name="image"style="margin-left: 25%;">
            </div>
        </div>
        <hr class="new1">
        <label for="cname"><b>Name</b></label>
        <input type="text" placeholder="Enter Name" name="cname" required>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required>
        <label for="passWd"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="passWd" required>
        <label for="addr1"><b>Address 1</b></label>
        <input type="text" placeholder="Enter Address" name="addr1" required>
        <label for="addr2"><b>Address 2</b></label>
        <input type="text" placeholder="Enter Address" name="addr2" required>
        <label for="zipCd"><b>Zip Code</b></label>
        <input type="text" placeholder="Zip" name="zipCd" required>
        <label for="city"><b>City</b></label>
        <input type="text" placeholder="Enter City Name" name="city" required>
        <label for="country"><b>Country</b></label>
        <input type="text" placeholder="Enter Country Name" name="country" required="">
        <!--Add text Area to add description about-->
        <label for="desc"><b>Description</b></label>
        <div>
            <textarea name="desc" cols="40" rows="20" placeholder="insert company  description..."></textarea>
        </div>
        
        <hr class="new1">
        <button class="signInBtn" type="submit" name="upload" style="width: 30%; margin-left: 35%; margin-right: 35%;">SUBMIT</button>
    </div>
</form>
