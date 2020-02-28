<!DOCTYPE html>
<html lang="en">
    <script src="android.js"></script>
    <body>
        <?php
        include('header_op.php');
        session_start();
        if (isset($_SESSION['user_id'])) {
            echo '<script type="text/javascript">performLogin();</script>';
        }
        ?>
        <!--==========================
        Intro Section
        ============================-->
        <section id="intro" class="clearfix">
            <div class="container">
                <div class="intro-info">
                    
                    <form method="post" action="checkLogin.php">
                        <div class="form-group row">
                            <label style="color:#ffffff" for="inputOTP" class="col-sm-2 col-form-label">OTP</label>
                            <div class="col-sm-4">
                                <input type="text" class="form-control" name="otp" placeholder="Enter OTP">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="color:#ffffff" for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="password" placeholder="Enter Password">
                            </div>

                        </div>
                        <div class="form-group row">
                            <label style="color:#ffffff" for="inputPasswordConf" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="confirm_password" placeholder="Enter Confirm Password">
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <a href="signup.php" class="btn-services scrollto">Change Password</a>
                            </div>
                        </div>
                    </form>
                    

                </div>

            </div>
        </section>
        <div>  
        </div>  

  <!-- #intro -->
        <!--==========================
        Footer
        ============================-->
        <?php include("footer.php"); ?>
    </body>
</html>
