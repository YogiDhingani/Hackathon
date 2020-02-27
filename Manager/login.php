<?php
include("config2.php");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
   
   if(isset($_POST['Submit'])) {
      // username and password sent from form 
 
      $myusername = mysqli_real_escape_string($conn,$_POST['email']);
      $mypassword = mysqli_real_escape_string($conn,$_POST['password']); 
      
      $query = "SELECT * FROM manager WHERE email_id = '$myusername' and password = '$mypassword'";
	 $run = mysqli_query($conn,$query);
	  $row = mysqli_fetch_array($run);
	  $count = mysqli_num_rows($run);
	 
      
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
        
        $_SESSION['login_admin_id'] = $row['manager_id'];
	    header('location:index.php');
       
      }else {
         $error = "Your Login Name or Password is invalid";
      }
   }?>
<!DOCTYPE html>
<head>
<title>Manager</title>
<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>-->
<!-- bootstrap-css -->
<!-- <link rel="stylesheet" href="css/bootstrap.min.css" > -->
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<!-- <link href="css1/style.css" rel='stylesheet' type='text/css' />
<link href="css1/style-responsive.css" rel="stylesheet"/> -->
<!-- font CSS -->
<!-- <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'> -->
<!-- font-awesome icons -->
<!-- <link rel="stylesheet" href="css1/font.css" type="text/css"/>
<link href="css1/font-awesome.css" rel="stylesheet"> -->
<!-- //font-awesome icons -->
<!-- <script src="js1/jquery2.0.3.min.js"></script> -->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</head>
<body>
    <div id="login">
        <br><br><center><h1 style="color:#17A2bb">Welcome Manage</h1></center><br><br>
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
