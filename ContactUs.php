<head>
  <meta charset="utf-8">
  <title>Complaint Management System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

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

  <!-- =======================================================
  Theme Name: NewBiz
  Theme URL: https://bootstrapmade.com/newbiz-bootstrap-business-template/
  Author: BootstrapMade.com
  License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>
<?php include 'header.php';?>
<body>
  <section id="contact" class="clearfix" style="padding: 80px 20px 100px 20;">
    <div class="container-fuild">

      <div class="section-header">
        <h3>Contact Us</h3>
      </div>

      <div class="row wow fadeInUp">

        <div class="col-lg-6">
          <div class="map mb-4 mb-lg-0">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3669.731019208071!2d72.59273001492085!3d23.106940384910335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e83c959d4de6f%3A0x748d0828c02cf9fa!2sVishwakarma+Government+Engineering+College!5e0!3m2!1sen!2sin!4v1565321968402!5m2!1sen!2sin" frameborder="0" style="border:0; width: 100%; height: 350px;" allowfullscreen id="google-map"></iframe>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="row">
            <div class="col-md-5 info">
              <i class="ion-ios-location-outline"></i>
              <p>Vishwakarma Government Engineering College,Chandkheda,382424</p>
            </div>
            <div class="col-md-4 info">
              <i class="ion-ios-email-outline"></i>
              <p>cossols@gmail.com</p>
            </div>
            <div class="col-md-3 info">
              <i class="ion-ios-telephone-outline"></i>
              <p>+91 758 955 4885</p>
            </div>
          </div>

          <div class="form">
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <form action="" method="post" role="form" class="contactForm">
              <div class="form-row">
                <div class="form-group col-lg-6">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group col-lg-6">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validation"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validation"></div>
              </div>
              <div class="text-center"><button type="submit" title="Send Message">Send Message</button></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section><!-- #contact -->
</body>
<?php include 'footer.php';?>
