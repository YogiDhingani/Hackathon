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
                            <label style="color:#ffffff" for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-4">
                                <input type="email" class="form-control" name="username" placeholder="example@gmail.com">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label style="color:#ffffff" for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-4">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>

                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="submit" class="btn-get-started scrollto" value="Login" name="login">
                                <a href="signup.php" class="btn-services scrollto">Register</a>
                            </div>
                        </div>
                    </form>
                    <a href="forgetpass.php" style="color:white"/>Forget Password?</a-->

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
