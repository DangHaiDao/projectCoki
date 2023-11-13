<?php include_once 'header.php';?>
<form action="../database/signup.db.php" method="post">
    <div class="sign-up_container">
        <div class="signup-contact-header">
            <h5>Sign up</h5>
        </div>
        <p style="font-family: Tilt Neon;">Please fill in this form to create an account</p>
        <hr>
        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" class="input-form" required>
        <label for="fname"><b>Full Name</b></label>
        <input type="text" placeholder="Enter Full Name" name="fname" class="input-form" required>
        <label for="tel"><b>Phone Number</b></label>
        <input type="text" placeholder="Enter Phone Number" name="tel" class="signup_phone" required>
        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" class="signup_password" required>
        <label for="psw-repeat"><b>Repeat password</b></label>
        <input type="password" placeholder="Repeat password" name="psw-repeat" class="signup_rptpassword" required>
        <label for="">
            <input type="checkbox" checked="checked" name="subs"> Subscribe to our newsletter?
        </label>
        <div class="clearfix">
            <button type="button" class="cancelbtn">Cancel</button>
            <button type="submit" class="signupbtn">Sign Up</button>
        </div>
    </div>
    </div>
    </div>
</form>

<?php include_once 'footer.php';?>