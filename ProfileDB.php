<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <!--  This file has been downloaded from https://bootdey.com  -->
  <!--  All snippets are MIT license https://bootdey.com/license -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Profile</title>
  <link href="sunilcss/style.css" rel="stylesheet"/>
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
      <form id="profileform" method="post" action="updprofile.php">
        <div class="form-group row">
          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputName" name="nm" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPhone" class="col-sm-2 col-form-label">Phone No.</label>
          <div class="col-sm-8">
            <input type="tel" class="form-control" id="inputPhone" name="phone_no" required>
          </div>
        </div>
        <div class="form-group row">
          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
          <div class="col-sm-8">
            <input type="email" class="form-control" id="inputEmail" name="eid" required>
          </div>
        </div>
        <input class="btn btn-primary" type="submit" id="updprofile" value="Update Profile">
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
              $uid = $_SESSION["user_id"];
              $s="SELECT count(*) As a FROM complaint where user_id=$uid";
              $sql = $conn->query($s);
              while($row = $sql->fetch_assoc())
              {?>
                <h5> <?php echo $row['a'];
              }
              ?></h5> <small>Complaints </small>
            </div>
          </div>
        </div>


        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="card">
            <div class="header" style="background-color:#004a99; color:#fff">
              <?php
              $s="SELECT count(*) As a FROM complaint where status='Completed' AND user_id=$uid";
              $sql = $conn->query($s);
              while($row = $sql->fetch_assoc())
              {?>
                <h5> <?php echo $row['a'];
              }
              ?></h5> <small>Solved </small>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
          <div class="card">
            <div class="header" style="background-color:#004a99; color:#fff">
              <?php
              $s="SELECT count(*) As a FROM complaint where status='Pending' AND user_id=$uid";
              $sql = $conn->query($s);
              while($row = $sql->fetch_assoc())
              {?>
                <h5> <?php echo $row['a'];
              }
              ?></h5> <small>Pending </small>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
<script>
function setProfile(name,email,phone){
  //console.log(name+email+phone);
  document.getElementById("inputName").value = name;
  document.getElementById("inputEmail").value = email;
  document.getElementById("inputEmail").disabled = true;
  document.getElementById("inputPhone").value = phone;
}
</script>
<?php
include('getConn.php');
$uid= $_SESSION['user_id'];
$sql = "SELECT * FROM user where user_id = $uid";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {
    $nm=$row['name'];
    $eid=$row['email_id'];
    $pn = $row['phone_no'];
    echo "<script>setProfile('$nm','$eid','$pn');</script>";
  }
}
?>
<script>
$("#profileform").submit(function(e){
  e.preventDefault();
  var form_data = new FormData(this);
  $.ajax({
    url: "/Hackathon/updprofile.php",
    cache: false,
    contentType: false,
    processData: false,
    data: form_data,
    type: 'POST',
    success: function(data){
      if(data=="success"){
        alert("Successfully updated");
        setInterval('location.reload(true)',200);
      }else {
        console.log(data);
      }
    },error:function(){
      console.log("Error");
    }
  });
});
</script>
</body>
<?php include 'footer.php';?>
</div>
