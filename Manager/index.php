<?php 
include 'config2.php';

  
if (!isset($_SESSION['login_admin_id'])) {
header('Location:login.php');
}
include('admin_header.php');
?>

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
	  <!-- Icon Cards-->
      <div class="row">
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-envelope-open"></i> </div>
                <?php
                 $s='SELECT count(*) As a FROM complaint where manager_id='.$_SESSION['login_admin_id'];
                 $sql=mysqli_query($conn,$s);
                 while($row = $sql->fetch_assoc())

                 {?>
                 <h5> <?php echo $row['a'];
                 }
                ?> Complaints </h5>
                     </div>
              
        
            <a class="card-footer text-white clearfix small z-1" href="viewcomplaint.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>              </span>            </a>          </div>
        </div>

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-warning o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-star"></i>              </div>
				 <?php
                 $s='SELECT count(*) As a FROM complaint where status="completed" and manager_id='.$_SESSION['login_admin_id'];
				 
                 $sql=mysqli_query($conn,$s);
                 while($row = $sql->fetch_assoc())
                 {?>
                  <h5> <?php echo $row['a'];
                 }
                ?> Solved </h5>
				
            </div>
            <a class="card-footer text-white clearfix small z-1" href="viewsolvedcomplaint.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>              </span>            </a>          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-calendar-check-o"></i>              </div>
              <?php
                 $s='SELECT count(*) As a FROM complaint where status="pending" and manager_id='.$_SESSION['login_admin_id'];
				 
                 $sql=mysqli_query($conn,$s);
                 while($row = $sql->fetch_assoc())

                 {?>
                 <h5> <?php echo $row['a'];
                 }
                ?> Pending </h5>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="viewpendingcomplaint.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>              </span>            </a>          </div>
        </div>
        <!--div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-heart"></i>              </div>
              <!--?php
                 $s="SELECT count(*) AS a FROM video_detail";
                 $sql=mysqli_query($conn,$s);
                 while($row = $sql->fetch_assoc())

                 {?>
                  <h5> <!--?php echo $row['a'];
                 }
                ?> Video </h5>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="viewvideo.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>              </span>            </a>          </div>
        </div-->

		</div>
      <!--div class="row">
         <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-success o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-calendar-check-o"></i>              </div>
             <--?php
                 $s="SELECT count(*) AS a FROM user";
                 $sql=mysqli_query($conn,$s);
                 while($row = $sql->fetch_assoc())

                 {?>
                 <h5> <--?php echo $row['a'];
                 }
                ?> User </h5>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="viewuser.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>              </span>            </a>          </div>
        </div>
         <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-danger o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-heart"></i>              </div>
              <--?php
                 $s="SELECT count(*) AS a FROM manager";
                 $sql=mysqli_query($conn,$s);
                 while($row = $sql->fetch_assoc())

                 {?>
                  <h5> <--?php echo $row['a'];
                 }
                ?> Managers </h5>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="viewmaster.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>              </span>            </a>          </div>
        </div>
        <!--div class="col-xl-3 col-sm-6 mb-3">
          <div class="card dashboard text-white bg-primary o-hidden h-100">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-envelope-open"></i> </div>
                <!--?php
                 $s="SELECT count(*) AS a FROM user_detail where role=2";
                 $sql=mysqli_query($conn,$s);
                 while($row = $sql->fetch_assoc())

                 {?>
                 <h5> <!--?php echo $row['a'];
                 }
                ?> Store </h5>
                     </div>
              
        
            <a class="card-footer text-white clearfix small z-1" href="viewstore.php">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>              </span>            </a>          </div>
        </div-->

      
       
          
      </section>

		<!-- /cards -->
		</div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
	<?php include('admin_footer.php');?>
   