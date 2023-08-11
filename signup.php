
<?php

require_once "includes/config_session.inc.php";
require_once "includes/signup_model.inc.php";
require_once "includes/signup_view.inc.php";
require_once "includes/login_view.inc.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signup/login</title>
    <link rel="stylesheet" href="css/signup.css">
</head>

<body>

    <section class="wrapper">
        <h3>
            <?php
            output_username();
            ?>
        </h3>
        <div class="form_signup">
            <header>Signup</header>
            
            <form action="includes/signup.inc.php" method="post">
                
              
                
                <?php
                  signup_inputs(); //using the php function to display the inputs helps in restoring user data when a user enters a wrong information in the signup process
                 ?>
                <div class="checkbox">
                    <input type="checkbox" id="signupcheckbox">
                    <label for="signupcheckbox">I have read and accepted the terms and conditions.</label>
                </div>
                <input type="submit" value="Signup">
                <?php
                  check_signup_errors(); // the functions checks for the signup errors and displays them
                 ?>
                

            </form>
        </div>

        <div class="form_login">
            <header>Login</header>
            <?php
               check_login_errors(); //the php function checks if there are any errors and returns the findings in case the login details were wrrong
                ?>
            <form action="includes/login.inc.php" method="post">
                <input type="text" name="username" placeholder="Username">

                <input type="password" name="password" placeholder="Enter password">
                <a href="#" id="forgot-password">Forgot password?</a>
                
                <input type="submit" value="Login">
            </form>
            
        </div>

            
    </section>

</body>

</html>