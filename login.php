<!DOCTYPE html>
<html lang="en">
<!--<script type="text/javascript">
function performLogin(){
try {
login.performLogin();
} catch (e) {
//
} finally {
window.location.replace('/Hackathon/index.php');
}
}
</script>-->
<body>
  <?php include("header_op.php");
  include("getConn.php");
  if(isset($_POST['login'])) {

    session_start();
    $myusername = $_POST['username'];
    $mypassword = $_POST['password'];

    $sql = "SELECT user_id FROM user WHERE email_id = '$myusername' and password = '$mypassword'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while($row = $result->fetch_assoc()) {
        $_SESSION['user_id']=$row['user_id'];
        header('location:index.php');
      }
    }
    else {
      echo "Invalid UserName Or Password";
    }

  }
  ?>

  <!--==========================
  Intro Section
  ============================-->
  <section id="intro" class="clearfix">
    <div class="container">
      <div class="intro-info">
        <form method="post" action="login.php">
          <div class="form-group row">
            <label style="color:#ffffff" for="inputEmail" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" name="username" placeholder="example@gmail.com">
            </div>
          </div>
          <div class="form-group row">
            <label style="color:#ffffff" for="inputPassword" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-4">
              <input type="password" class="form-control" name="password" placeholder="Password">
            </div>
          </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <input type="submit" class="btn-get-started scrollto" value="Login" name="login">
              <a href="signup.php" class="btn-services scrollto">Register</a>
            </div>
          </div>
        </form>
      </div>

    </div>
  </section><!-- #intro -->
  <!--==========================
  Footer
  ============================-->
  <?php include("footer.php");?>

</body>
</html>
