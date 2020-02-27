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
        <form method="post" id="regform" action="addUser.php">
          <div class="form-group row">
            <label for="inputName" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="nm" placeholder="Name" name="nm">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPhone" class="col-sm-2 col-form-label">Phone No.</label>
            <div class="col-sm-4">
              <input type="tel" class="form-control" id="phone_no" placeholder="Phone No." name="phone_no">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="eid" placeholder="example@gmail.com" name="eid">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputGender" class="col-sm-2 col-form-label">Gender</label>
            <div class="col-sm-4">
              <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="male" checked>
                <label class="form-check-label" for="exampleRadios1">Male</label>
              </div>
              <div class="form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="gender" value="female">
                <label class="form-check-label" for="foefemale">Female</label>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label">New Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="password" placeholder="New Password" name="password" required>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputConfirmPassword" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" id="cpassword" placeholder="Confirm Password" name="cpassword" required>
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
  <?php include 'footer.php'?>

<script>
$("#regform").submit(function(e){
  e.preventDefault();
  var form_data = new FormData(this);
  $.ajax({
    url: "/Hackathon/addUser.php",
    cache: false,
    contentType: false,
    processData: false,
    data: form_data,
    type: 'POST',
    success: function(data){
      if(data=="success"){
        alert("User registred successfully");
        setInterval('window.history.back()',200);
      }else if(data=="Not matched") {
        alert("Password and Confirm password doesn't matched");
      }else if(data=="Already") {
        alert("Email already in used");
      }else if(data=="phone"){
        alert("Enter valid phone No.");
      }else{
        console.log(data);
      }
    },error:function(){
      console.log("Error");
    }
  });
});
</script>

</body>
</html>
