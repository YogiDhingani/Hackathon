<!DOCTYPE html>
<html lang="en">
<body>
  <?php
  // session_start();
  // if(!isset($_SESSION['user_id'])){
  //   echo '<script type="text/javascript">performLogout();</script>';
  // }
  include("header.php");
  ?>
  <!--==========================
  Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">
      <div class="intro-info">
        <form method="post" action="search.php">
          <div class="form-group row">
            <div class="col-sm-10 col-md-10 col-xl-10 col-xs-10">
              <input type="text" class="form-control" placeholder="Search" name="search">
            </div>
            <div class="col-sm-	1">
              <input style="text-align:center" type="submit" class="btn btn-success"  name="submit" value="Search">
            </div>
          </div>
        </form>
      </div>
    </div>
  </section><!-- #intro -->

  <main id="main">
    <!--==========================
    About Us Section
    ============================-->
    <section id="about">
      <header class="section-header">
        <h4 style="text-align:center;">Some recent topics</h4>
      </header>

      <div class="row about-extra">
        <?php include 'getConn.php';
        $s = 'SELECT title,complaint_id FROM complaint where status="completed"';
        $sql=mysqli_query($conn,$s);
        while($row = mysqli_fetch_assoc($sql))
        {?>
          <div class="col-lg-6 content order-lg-1 order-2">
            <h4 class="title">
              <a href="complaints_card.php?complaint_id=<?php echo $row['complaint_id']; ?>"><?php echo $row['title'];?></a></h4><br>
            </div><?php } ?>
          </div>
        </section>

        <!--==========================
        Why Us Section
        ============================-->
        <section id="why-us" class="wow fadeIn">
          <div class="container">
            <header class="section-header">
              <h3>What we done so far!</h3>
              <p>We are helping our users at best possible way and providing quality work</p>
            </header>

            <div class="row counters">

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up" id="userVal"></span>
                <p>Users</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up" id="managerVal"></span>
                <p>Managers</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up" id="complaintVal"></span>
                <p>complaints files</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up" id="comVal"></span>
                <p>Complaints solved</p>
              </div>
            </div>
          </div>
        </section>
        <!--==========================
        Clients Section
        ============================-->
        <section id="testimonials" class="section-bg" style="margin-bottom: 100px">
          <div class="container">

            <header class="section-header">
              <h3>Testimonials</h3>
            </header>

            <div class="row justify-content-center">
              <div class="col-lg-8">

                <div class="owl-carousel testimonials-carousel wow fadeInUp">

                  <div class="testimonial-item">
                    <img src="img/testimonial-1.JPG" class="testimonial-img" alt="">
                    <h3>Rajesh S.</h3>
                    <h4>Senior Web Developer</h4>
                    <p>
                     Comssols is the leading complaint management website built for better customer relationships. Easily solve tickets and track customer complaints. many people uses comssols to lower their support costs and increase customer satisfaction.
                    </p>
                  </div>

                  <div class="testimonial-item">
                    <img src="img/testimonial-2.jpeg" class="testimonial-img" alt="">
                    <h3>Rohan B.</h3>
                    <h4>Director</h4>
                    <p>
                      Comssols is a web based customer service website hosted on the cloud. It helps to track and manage all customer support requests across all areas in a centralized ticket support system. tracking complaints makes it practical help desk. Similar customer support queries can be handled using canned actions and smart rules to automate responses. Community forums help customers connect.
                    </p>
                  </div>

                  <div class="testimonial-item">
                    <img src="img/testimonial-3.JPG" class="testimonial-img" alt="">
                    <h3>Nilesh b.</h3>
                    <h4>IT Service Desk Specialist I</h4>
                    <p>
                    Comssols is an Complaint Management helpdesk, with a fresh twist. The websites puts a refreshing user experience on top of powerful ticketing and asset management capabilities like auto-discovery of new resources, powerful configuration management and enhanced impact analysis. Incident, Problem, Change, Release & Knowledge Management are amongst the other features that make Freshservice, a perfect fit for your organization's needs.
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section><!-- #testimonials -->
      </main>
      <!--==========================
      Footer
      ============================-->
      <?php include("footer.php");?>
      <script>
      $(document).ready(function() {
        $.ajax({
          url: 'getindex.php',
          type: 'POST',
          dataType: 'json',
          success: function(res) {
            console.log(res);
            $('#userVal').html(res[0].user);
            $('#managerVal').html(res[2].manager);
            $('#complaintVal').html(res[1].complaint);
            $('#comVal').html(res[3].completed);
          }
        });
      });
      </script>

</body>
</html>
