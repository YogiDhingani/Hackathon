<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from https://bootdey.com  -->
    <!--  All snippets are MIT license https://bootdey.com/license -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="sunilcss/style.css" rel="stylesheet"/>
	<link href="bootstrap.min.css" rel="stylesheet"/>

    <!--link href="sunilcss/style.css" rel="stylesheet"-->

</head>
<?php include 'header.php'?>
<body>
	<div class="container" style="margin-top: 100px;margin-bottom: 100px;">
		<div class="user-info" style="text-align:center;">
                        <img style="border-radius: 100px; margin-top: 20px" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
             
        </div><br>
        <hr>
        <h3> Personal Details</h3>
        <hr>
        <div>
        <form method="post" action="Profile.php">
          <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-8">
              <input type="text" class="form-control" id="inputName" value="Yogi Dhingani"  name="nm">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPhone" class="col-sm-2 col-form-label">Phone No.</label>
            <div class="col-sm-8">
              <input type="tel" class="form-control" id="inputPhone" value="9999955577" name="phone_no">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-8">
              <input type="email" class="form-control" id="inputEmail" value="yogi123@gmail.com" name="eid">
            </div>
          </div>
          <input class="btn btn-primary" type="submit" name="sub" value="Update Profile">
      <hr>
        </div>
        <h3>Complaints</h3><hr>
    </form>
        
<div class="container">
	
    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header" style="background-color:#004a99; color:#fff">
                                <?php include 'getConn.php';
                 $s='SELECT count(*) As a FROM complaint';
                 $sql=mysqli_query($conn,$s);
                 while($row = $sql->fetch_assoc())

                 {?>
                 <h5> <?php echo $row['a'];
                 }
                ?></h5> <small>Complaints </small>
                     </div>
                            
                        
                        <div class="body">
                            <a href="#">View Details</a>
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header" style="background-color:#004a99; color:#fff">
                                <?php
                 $s='SELECT count(*) As a FROM complaint where status="Completed"';
                 $sql=mysqli_query($conn,$s);
                 while($row = $sql->fetch_assoc())
                 {?>
                  <h5> <?php echo $row['a'];
                 }
                ?> </h5> <small>Solved </small>
                     </div>
                            
                        
                        <div class="body">
                            <a href="#">View Details</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="card">
                        <div class="header" style="background-color:#004a99; color:#fff">
                               <?php
                 $s='SELECT count(*) As a FROM complaint where status="Pending"';;
                 $sql=mysqli_query($conn,$s);
                 while($row = $sql->fetch_assoc())

                 {?>
                 <h5> <?php echo $row['a'];
                 }
                ?> </h5> <small>Pending </small>
                     </div>
                            
                        
                        <div class="body">
                            <a href="pending_complaint.php">View Details</a>
                        </div>
                    </div>
                </div>
   
</div>
</div>
	</div>
	<?php 
		session_start();
		//$_SESSION['user_id']=$_SESSION['user_id'];
		//$iid=$_SESSION['user_id'];
		if(isset($_POST['sub'])){
			$name=$_POST['nm'];
			$id=$_POST['eid'];
			$pn=$_POST['phone_no'];
		
			echo "<script>";
					echo "document.getElementById('inputName').value = '$name';";
					echo "document.getElementById('inputEmail').value = '$id';";
					echo "document.getElementById('inputPhone').value = '$pn';";
				echo"</script> ";
			include("getConn.php");
			$sql = "UPDATE user SET name='$name', email_id='$id', phone_no='$pn' WHERE user_id='$iid'";

			if ($conn->query($sql) === TRUE) {
				echo "<script> alert ('Registered Successfully');";
				echo "</script>";
				
			} 
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				}	
		}
	?>
</body>
<?php include 'footer.php';?>
</div>
