<?php
require "includes/header.php"
?>

<main>
    <div class="bg-cover">
        <div class="h-100 container center-me">
            <div class="my-auto">
                <div class="signup-form">
                    <form action="includes/signup-helper.php" method="POST">
                        <h2>Register</h2>
                        <p class="hint-text">Create Your Account</p>
                        <div class="form-group">
                            <div class="row">
                                <div class="col">
                                    <input type="text" class="form-control" name="fname" placeholder="First Name" required="required">
                                </div>
                                <div class="col">
                                    <input type="text" class="form-control" name="lname" placeholder="Last Name" required="required">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname" placeholder="Username" required="required">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-Mail" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pwd" placeholder="Password" required="required">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="con-pwd" placeholder="Confirm Password" required="required">
                        </div>
                        <div class="form-group">
                            <button type="submit" name="signup-submit" class="btn btn-lg btn-outline-dark btn-block">Create Account</button>
                        </div>
                    </form>
                    <div class="text-center">
                        Already have an account? <a href="login.php"> Sign-in</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>