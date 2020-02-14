<html>
<head>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<title>Complaint management System</title>
<body>
  <div style="height:15%">
  <?php  include 'Header.php';?>
</div>
<section id="form" class="clearfix">
  <div class="container">
    <div class="intro-img">
<form>
  <div class="form-group row">
    <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="inputTitle" placeholder="Title">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="inputCategory" placeholder="Category">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputSubCategory" class="col-sm-2 col-form-label">Sub Category</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="inputSubCategory" placeholder="Sub Category">
    </div>
  </div>
  <div class="form-group row">
    <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
    <div class="col-sm-4">
      <textarea type="email" rows="5" class="form-control" id="inputDescription" placeholder="Description"></textarea>
    </div>
  </div>
    <div class="form-group row">
    <label for="inputLocation" class="col-sm-2 col-form-label">Location</label>
    <div class="col-sm-4">
      <input type="email" class="form-control" id="inputLocation" placeholder="Location">
    </div>
  </div>
   <div class="form-group row">
      <label class="col-sm-2 col-form-label" for="exampleInputFile">Upload File</label>
      <div class="col-sm-4">
      <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
   </div>
    </div>
  <div class="form-group row">
    <div class="col-sm-10">
      <button style="background:#00428a" type="submit" class="btn btn-primary">Complaint</button>
    </div>
  </div>
</form>
</div>
</div>
</section>
</body>

<footer id="footer">
  <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>NewBiz</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=NewBiz
        -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <nav class="mobile-nav d-lg-none">
        <ul>
          <li class=""><a href="#intro">Home</a></li>
          <li class="drop-down"><a href="">Compliant</a>
            <ul>
              <li><a href="#">New Complaint</a></li>
              <li><a href="#">Solved Complaint</a></li>
              <li><a href="#">Pending Complaint</a></li>
            </ul>
          </li>
      <li><a href="#profile">Profile</a></li>
      <li><a href="#team">Team</a></li>
          <li class=""><a href="#contact">Contact Us</a></li>
      <li class="active"><a href="#about">About Us</a></li>
      <li><a href="#">Log Out</a></li>
        </ul>
      </nav>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</html>