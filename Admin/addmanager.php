
<?php 		include 'config2.php';
if (!isset($_SESSION['login_admin_id'])) {
header('Location:login.php');
}
if(isset($_POST['submit'])){
  $name = mysqli_real_escape_string($conn,$_POST['name']);
  $email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
  $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
  $category = mysqli_real_escape_string($conn, $_POST['category']);
  $city = mysqli_real_escape_string($conn, $_POST['city']);
  $password=mysqli_real_escape_string($conn, $_POST['password']);
	$cpassword=mysqli_real_escape_string($conn, $_POST['cpassword']);

   if($password!=$cpassword){
	    echo "<script>";
		echo "alert('Password is not matched please enter again');";
		echo "document.getElementById('name').value = '$name';";
		echo "document.getElementById('email_id').value = '$email_id';";
		echo "document.getElementById('phone_no').value = '$phone_no';";
		echo "document.getElementById('category').value = '$category';";
		echo "document.getElementById('city').value = '$city';";
	    echo "document.getElementById('password').value = '';";
		echo "document.getElementById('cpassword').value = '';";
		echo "</script> ";
   }else{

	    $sql = "SELECT manager_id FROM manager WHERE email_id = '$eid'";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			echo '<script type="text/javascript">alert("Email already used before");</script>';
        exit();
		}
		else {
	      $sql = "INSERT INTO manager (name,email_id,phone_no,category,city,password) VALUES ('$name', '$email_id','$phone_no','$category','$city','$password')";
		if(mysqli_query($conn, $sql)){
			echo "<script>alert('Registered Successfully');</script>";
			header('Location:viewmanager.php');
		} else{
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
		}
	}
   
   mysqli_close($conn);
}

?>

<?php include('admin_header.php'); ?>
  <!-- /Navigation-->
  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Add Manager</li>
      </ol>
       <form method="post" action="addmanager.php">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-user"></i>Add Manager</h2>
			</div>
				<div class="col-md-8 add_top_30">
					<div class="row">
						<div class="col-md-12"-->
							<div class="form-group">
								<label>Full Name</label>
								<input type="text" name="name" id="name" minlength="2" required="" class="form-control" placeholder="Full Name">
							</div>
						</div>
						<!--div class="col-md-6">
							<div class="form-group">
								<label>Last Name</label>
								<input type="text" name="u_lname" minlength="3" required="" class="form-control" placeholder="Last Name">
							</div>
						</div-->
					</div>
					<!-- /row-->
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Email</label>
								<input type="email" id="email_id" class="form-control" required="" name="email_id" placeholder="Email">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Phone no</label>
								<input type="tel"  id="phone_no" class="form-control" required="" name="phone_no" placeholder="Phone no">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label>Password</label>
								<input type="password" id="password" minlength="6" maxlength="16" name="password" required="" class="form-control" placeholder="Password">
							</div>
								              <!--label>Gender :</label>
              <select name="gender" class="form-control" required="">
                <option value="">Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div-->
				</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Confirm Password</label>
								<input type="password" id="cpassword" minlength="6" maxlength="16" name="cpassword" required="" class="form-control" placeholder="Confirm Password">
							</div>
						</div>
						
					</div>

			<div class="row">
				<div class="col-md-6">
				<div class="form-group">
					<label>Category</label>
					<select name="category" id="category" class="form-control" required="">
					<option value="">Select Category</option>
					<?php
							$sql1 = "SELECT name FROM category";
							$rescat = mysqli_query ($conn,$sql1) or die (mysqli_error($conn));
						while ($cat = mysqli_fetch_array ($rescat))
						{	
							echo '<option value="'.$cat['name'].'"';
							echo '>'.$cat['name'].'</option>';
						}
					?>
					</select>
              </div>
				</div>
								<div class="col-md-6"-->
							<div class="form-group">
								<label>City</label>
								<input type="text" id="city" name="city" minlength="2" required="" class="form-control" placeholder="City">
							</div>
						</div>

              </div>

 
    <button type="submit" class="btn_1 medium" name="submit" >Add Manager</button>

         	
          
					<!-- /row-->
					</div>
			</div>
		</div>
		
	</div>
	
</form>
	  </div>
	  <!-- /.container-fluid-->
   	</div>
    <!-- /.container-wrapper-->
	<?php include('admin_footer.php');?>
	
</body>
</html>
