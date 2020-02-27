<!DOCTYPE html>
<html lang="en">
<script src="android.js"></script>
<body>
  <?php
  session_start();
  if(!isset($_SESSION['user_id'])){
    echo '<script type="text/javascript">performLogout();</script>';
  }
  include("header.php");
  ?>
  <!--==========================
  Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">
      <div class="intro-info">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Search">
          <button class="btn btn-success" type="button">Search</button>
        </div>
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
              <h3>Why choose us?</h3>
              <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
            </header>

            <div class="row counters">

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">274</span>
                <p>Clients</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">421</span>
                <p>Projects</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">1,364</span>
                <p>Hours Of Support</p>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <span data-toggle="counter-up">18</span>
                <p>Hard Workers</p>
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
                    <img src="img/testimonial-1.jpg" class="testimonial-img" alt="">
                    <h3>Saul Goodman</h3>
                    <h4>Ceo &amp; Founder</h4>
                    <p>
                      Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    </p>
                  </div>

                  <div class="testimonial-item">
                    <img src="img/testimonial-2.jpg" class="testimonial-img" alt="">
                    <h3>Sara Wilsson</h3>
                    <h4>Designer</h4>
                    <p>
                      Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    </p>
                  </div>

                  <div class="testimonial-item">
                    <img src="img/testimonial-3.jpg" class="testimonial-img" alt="">
                    <h3>Jena Karlis</h3>
                    <h4>Store Owner</h4>
                    <p>
                      Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    </p>
                  </div>

                  <div class="testimonial-item">
                    <img src="img/testimonial-4.jpg" class="testimonial-img" alt="">
                    <h3>Matt Brandon</h3>
                    <h4>Freelancer</h4>
                    <p>
                      Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    </p>
                  </div>

                  <div class="testimonial-item">
                    <img src="img/testimonial-5.jpg" class="testimonial-img" alt="">
                    <h3>John Larson</h3>
                    <h4>Entrepreneur</h4>
                    <p>
                      Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
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

    </body>
    </html>
