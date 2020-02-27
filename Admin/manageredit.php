<?php
include 'config2.php';
if (!isset($_SESSION['login_admin_id'])) {
    header('Location:login.php');
}
?>

<?php
$id = $_REQUEST['id'];
if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email_id = mysqli_real_escape_string($conn, $_POST['email_id']);
    $phone_no = mysqli_real_escape_string($conn, $_POST['phone_no']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $update = "UPDATE manager SET name='$name', email_id='$email_id', phone_no='$phone_no' , city='$city', category='$category' 
   WHERE manager_id=$id";
    if (mysqli_query($conn, $update)) {
        //echo "Records updated successfully.";
        header("Location:viewmanager.php");
    } else {
        echo "ERROR: Could not able to execute $update. " . mysqli_error($conn);
    }
}
?>
<?php
include ('admin_header.php');
?>
<!doctype html>
<html>     
    <div class="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Edit Manager</li>
            </ol>
            <form method="post" action="">
<?php
$sql = "SELECT * FROM manager WHERE manager_id= $id";
$result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
$sql1 = "SELECT name FROM category";
$rescat = mysqli_query($conn, $sql1) or die(mysqli_error($conn));
while ($row = mysqli_fetch_array($result)) {
    ?>
                    <div class="box_general padding_bottom">
                        <div class="header_box version_2">
                            <h2><i class="fa fa-user"></i>Edit Manager</h2>
                        </div>
                        <div class="col-md-8 add_top_30">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" name="name" minlength="2" Value="<?php echo $row['name'] ?>"  required="" class="form-control" placeholder="Full Name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" required="" Value="<?php echo $row['email_id'] ?>" name="email_id" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Phone no</label>
                                        <input type="tel" class="form-control" Value="<?php echo $row['phone_no'] ?>"required="" name="phone_no" placeholder="Phone no">
                                    </div>
                                </div>
                            </div>
                            <!-- /row-->
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>City</label>
                                        <input type="text" class="form-control" Value="<?php echo $row['city'] ?>" required="" name="city" placeholder="City">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Category</label>
                                        <select name="category" class="form-control" required="">
                                            <option value="">Select Category</option>
    <?php
    while ($cat = mysqli_fetch_array($rescat)) {
        echo '<option value="' . $cat['name'] . '"';
        if ($row['category'] == $cat['name'])
            echo ' selected="selected"';
        echo '>' . $cat['name'] . '</option>';
    }
    ?>
                                        </select>
                                    </div>
                                </div>
                            </div>


<?php } ?>

                    </div>
                    <button type="submit" class="btn_1 medium" name="submit" >Update Manager</button>



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
<footer class="sticky-footer">
    <div class="container">
        <div class="text-center">

        </div>
    </div>
</footer>
<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fa fa-angle-up"></i>
</a>
<!-- Logout Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="index.php">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<!-- Page level plugin JavaScript-->
<script src="vendor/chart.js/Chart.min.js"></script>
<script src="vendor/datatables/jquery.dataTables.js"></script>
<script src="vendor/datatables/dataTables.bootstrap4.js"></script>
<script src="vendor/jquery.selectbox-0.2.js"></script>
<script src="vendor/retina-replace.min.js"></script>
<script src="vendor/jquery.magnific-popup.min.js"></script>
<!-- Custom scripts for all pages-->
<script src="js/admin.js"></script>
<!-- Custom scripts for this page-->
<script src="vendor/dropzone.min.js"></script>


<script>
    $(function () {
        $("#datepicker").datepicker();
    });
</script>


</body>
</html>
