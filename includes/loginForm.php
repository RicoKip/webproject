<!DOCTYPE html>
<!--login Modal implementation. On click animates a pop up form to be filled-->
<a onclick="document.getElementById('loginId').style.display='block'" style="width: 100%;">Sign-In</a>
<!--modal form-->
<div class="row">
    <div class="content contentBrd">
        <div id="loginId" class="modal">
            <form class="modal-content animate" action="login.php" method="get"><!--action: process for login in user. Uses sessions-->
                <div class="containerLgn">
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Enter Email" name="email" required>
                    <label for="passWd"><b>Password</b></label>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <button type="submit" name="login" class="signInBtn">LOGIN</button>
                </div>
                <!--redirect to registration-->
                <div class="containerLgn" style="background-color: #888">
                    <div class="boxTxt" ><a href="registrationForm.php" style="color: white;">Not yet Registered. Register here</a></div>
                </div>
            </form>
        </div>
    </div>
</div>  

