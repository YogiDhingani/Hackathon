<!DOCTYPE html>
<html lang="en">
<head>
		<link href="sunilcss/style.css" rel="stylesheet"/>
</head>
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
		<form method="post" >
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
        <!-- <h4 style="text-align:center;">Some recent topics</h4> -->
		
		<?php  
		if(isset($_POST['submit'])){
			$search= $_POST['search'];
			 include 'getConn.php';
								$sql = "SELECT * FROM complaint WHERE title = '$search' or category_name = '$search'";
								$result = $conn->query($sql);
								if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
							
		?>
		
		
		<div class="container" style="margin-top: 100px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			
		<div class="card">
                        <div class="header" style="background-color:#004a99; color:#fff">
                        	<?php
                        		echo"<h4 style=\"color:#fff;\">";
								echo "<b>Title : </b>";
								echo $row['title'];
								echo"</h4>";
								echo" <small>";
								echo"<b>Complaint : </b>";
								echo $row['complaint_detail'];
								echo "</br>";
								echo "<b>Status:</b>";
								echo $row['status'];
								echo"</small>";
								?>
								</div>
								<div class="body">
								<?php 
								echo"<b>Solution : </b>";
								echo $row['solution_detail'];?>
								</div>
								</div>
								</div>
							</div>
							 
			<?php
		}	}}?>
		</table>
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
                  	<!--
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
                  </div-->

                </div>

              </div>
            </div>


          </div>
        </section><!-- #testimonials -->
      </main>
      <!--==========================
      Footer
      ============================-->
      <?php include("footer.php");	  
	  ?>

    </body>
    </html>
