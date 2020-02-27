
<?php
include 'config2.php';
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
    $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);

    $sql = "Update manager set name='$name' ,email_id='$email_id',phone_no='$phone_no',category='$category',city='$city' where manager_id=" . $_SESSION['login_admin_id'];
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Updated Successfully');</script>";
        header('Location:manager.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    mysqli_close($conn);
}
?>

<?php
if (!isset($_SESSION['login_admin_id'])) {
    header('Location:login.php');
}include('admin_header.php');
?>
<?php
$j = 1;
$i = 0;
$q = 'SELECT * FROM manager where manager_id=' . $_SESSION['login_admin_id'];
$data = mysqli_query($conn, $q);
$result = mysqli_fetch_array($data);
?>
<!-- /Navigation-->
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Profile</li>
        </ol>
        <form method="post" action="manager.php">
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-user"></i>Profile</h2>
                </div>
                <div class="col-md-8 add_top_30">
                    <div class="row">
                        <div class="col-md-12"-->
                            <div class="form-group">
                                <label>Full Name</label>
                                <input type="text" name="name" id="name" value="<?php echo $result['name'] ?>" minlength="2" required="" class="form-control" placeholder="Full Name">
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
                                <input type="email" id="email_id" value="<?php echo $result['email_id'] ?>" class="form-control" required="" name="email_id" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phone no</label>
                                <input type="tel"  id="phone_no" value="<?php echo $result['phone_no'] ?>" class="form-control" required="" name="phone_no" placeholder="Phone no">
                            </div>
                        </div>
                    </div>
                    <!--div class="row">
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
</div>
</div>
<div class="col-md-6">
<div class="form-group">
      <label>Confirm Password</label>
      <input type="password" id="cpassword" minlength="6" maxlength="16" name="cpassword" required="" class="form-control" placeholder="Confirm Password">
</div>
</div>

</div-->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" id="category" value="<?php
                                $q = 'SELECT * FROM category where category_id=' . $result['category'];
                                $data1 = mysqli_query($conn, $q);
                                $result1 = mysqli_fetch_array($data1);
                                echo $result1['name'];
                                ?>" name="category" minlength="2" required="" class="form-control" placeholder="category" readonly>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>City</label>
                                <input type="text" id="city" value="<?php echo $result['city'] ?>" name="city" minlength="2" required="" class="form-control" placeholder="City">
                            </div>
                        </div>

                    </div>


                    <button type="submit" class="btn_1 medium" name="submit" >Update</button>



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
<?php include('admin_footer.php'); ?>

</body>
</html>
