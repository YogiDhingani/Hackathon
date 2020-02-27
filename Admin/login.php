<?php
include("config2.php");

// Check connection
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


if (isset($_POST['Submit'])) {
    // username and password sent from form 

    $myusername = mysqli_real_escape_string($conn, $_POST['email']);
    $mypassword = md5(mysqli_real_escape_string($conn, $_POST['password']));

    $query = "SELECT * FROM admin WHERE email_id = '$myusername' and password = '$mypassword'";
    $run = mysqli_query($conn, $query);
    $row = mysqli_fetch_array($run);
    $count = mysqli_num_rows($run);



    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {

        $_SESSION['login_admin_id'] = $row['admin_id'];
        header('location:index.php');
    } else {
        $error = "Your Login Name or Password is invalid";
    }
}
?>
<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    <div id="login">
        <br><br><center><h1 style="color:#17A2bb">Welcome Admin</h1></center><br><br>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="login.php" method="post">

                            <div class="form-group">
                                <label for="email" class="text-info">Email:</label><br>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group">
                                <!--label for="remember-me" class="text-info"><span>Remember me</span> <span><input id="remember-me" name="remember-me" type="checkbox"></span></label><br-->
                                <input type="submit" name="Submit" class="btn btn-info btn-md">
                            </div>
                            <!--div id="register-link" class="text-right">
                                <a href="#" class="text-info">Register here</a>
                            </div-->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

