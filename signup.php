<html>
<head>
<style>
label{
  color: #ffffff;
}
</style>
</head>
<body>
  <?php include ("header_op.php");?>
  <!--==========================
  Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">
      <div class="intro-info">
        <form method="post">
          <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="inputName" placeholder="Name" name="nm">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPhone" class="col-sm-2 col-form-label">Phone No.</label>
            <div class="col-sm-4">
              <input type="tel" class="form-control" id="inputPhone" placeholder="Phone No." name="phone_no">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputEmail" placeholder="example@gmail.com" name="eid">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-4">
              <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="formale" value="male" checked>
                <label class="form-check-label" for="exampleRadios1">Male</label>
              </div>
              <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="forfemale" value="female">
                <label class="form-check-label" for="foefemale">Female</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputPassword" placeholder="New Password" name="password">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="inputConfirmPassword" placeholder="Confirm Password">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <!-- <a href="#" class="btn-get-started scrollto">Register</a>-->
			   <input type="submit" class="btn-get-started scrollto" value="Register" name="register">
              <a href="#" class="btn-services scrollto" onclick="window.history.back()">Back to Login</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php include("footer.php");
		if(isset($_POST['register'])){
			$name=$_POST['nm'];
			$eid=$_POST['eid'];
			$phone_no=$_POST['phone_no'];
			
			
			
		}
  ?>
</body>
</html>
