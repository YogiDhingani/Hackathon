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
<title>Admin</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link rel="stylesheet" href="css/bootstrap.min.css" >
<!-- //bootstrap-css -->
<!-- Custom CSS -->
<link href="css1/style.css" rel='stylesheet' type='text/css' />
<link href="css1/style-responsive.css" rel="stylesheet"/>
<!-- font CSS -->
<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<!-- font-awesome icons -->
<link rel="stylesheet" href="css1/font.css" type="text/css"/>
<link href="css1/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons -->
<script src="js1/jquery2.0.3.min.js"></script>
</head>
<body>
<div class="log-w3">
<div class="w3layouts-main">

	<h2>Admin</h2>
<p><?php if(isset($error)){ echo $error;} ?></p>
		<form  method="post">
			<input type="email" class="ggg" name="email" required="" placeholder="Email" >
			<input type="password" class="ggg" name="password" required="" placeholder="Password">
			
			
				<div class="clearfix"></div>
				<input type="submit" value="Sign In" name="Submit">
				<center> <a href="../brainzone/index.php">Go to User Panel</a></center>
				</form>
		
</div>
</div>
<script src="js1/bootstrap.js"></script>
<script src="js1/jquery.dcjqaccordion.2.7.js"></script>
<script src="js1/scripts.js"></script>
<script src="js1/jquery.slimscroll.js"></script>
<script src="js1/jquery.nicescroll.js"></script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/flot-chart/excanvas.min.js"></script><![endif]-->
<script src="js/jquery.scrollTo.js"></script>
</body>
</html>
