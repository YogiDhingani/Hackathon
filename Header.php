<head>
<meta charset="utf-8">
<title>Complaint Management System</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<meta content="" name="keywords">
<meta content="" name="description">

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<!-- Favicons -->
<link href="img/favicon.png" rel="icon">
<link href="img/apple-touch-icon.png" rel="apple-touch-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

<!-- Bootstrap CSS File -->
<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

<!-- Libraries CSS Files -->
<link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="lib/animate/animate.min.css" rel="stylesheet">
<link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
<link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
<link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

<!-- Main Stylesheet File -->
<link href="css/style.css" rel="stylesheet">
<script src="android.js"></script>
<script type="text/javascript">
function removeIncl(){
  var el = document.getElementById("header");
  el.parentNode.removeChild(el);
  var el2 = document.getElementsByClassName("mobile-nav-toggle");
  el2[0].parentNode.removeChild(el2[0]);
}

function logout(){
  var r = confirm("You want to logout?");
  if(r){
    window.location.href="logout.php";
  }
}
</script>
<?php
session_start();
if(!isset($_SESSION['user_id'])){
  echo '<script type="text/javascript">performLogout();</script>';
}
?>
<!-- =======================================================
  Theme Name: NewBiz
  Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  Author: BootstrapMade.com
  License: https://bootstrapmade.com/license/
======================================================= -->
</head>
<body>
  <!-- <button type="button" class="mobile-nav-toggle d-lg-none">
    <i class="fa fa-bars"></i>
  </button> -->
  <!--==========================
  Header
  ============================-->
  <header id="header" class="fixed-top">
  <div class="container">
    <div class="logo float-left">
      <h1 class="text-light"><a href="index.php"><b><span>Comssols</span></b></a></h1>
    </div>

    <nav class="main-nav float-right d-none d-lg-block">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li class="drop-down"><a href="">Compliant</a>
          <ul>
            <li><a href="new_complaint.php">New Complaint</a></li>
            <li><a href="Pending_complaint.php">Your Complaint</a></li>
          </ul>
        </li>
      	  <li><a href="ProfileDB.php">Profile</a></li>
          <li><a href="ContactUs.php">Contact Us</a></li>
      	  <li><a href="AboutUs.php">About Us</a></li>
      	  <li><a href="#" onclick="logout()">Log Out</a></li>
      </ul>
    </nav>
  </div>
</header>
</body>
