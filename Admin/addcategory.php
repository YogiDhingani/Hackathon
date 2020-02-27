<?php
include 'config2.php';
if (!isset($_SESSION['login_admin_id'])) {
    header('Location:login.php');
}

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $sql = "INSERT INTO category(name) VALUES ('$name')";
    if (mysqli_query($conn, $sql)) {
        echo "Records added successfully.";
        header('Location:addcategory.php');
    } else {
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }

    // close connection
    mysqli_close($conn);
}
?>

<?php include('admin_header.php'); ?>
<?php
$q = "SELECT * FROM category";
$data = mysqli_query($conn, $q);
?>
<!-- /Navigation-->
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Add Category</li>
        </ol>
        <div class="card mb-3"-->
            <div class="card-header"-->
                <div class="table-responsive"-->
                    <div class="container">
                        <input class="form-control mb-4" id="myInput" type="text"
                               placeholder="Search Category">

                        <table class="table table-bordered table-striped" width="100%" cellspacing="0">
                            <tr>
                                <td>
                                    <table  class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody id="myTable">
                                            <?php while ($result = mysqli_fetch_array($data)) { ?>
                                                <tr>
                                                    <td><?php echo $result ['name']; ?></td>
                                                    <td><a href="categorydelete.php?id=<?php echo $result['category_id']; ?>" onclick="return val()" class="btn_1 gray delete">Delete</a></td>
                                                </tr>

                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </td>
                                <td>		
                                    <form method="post" action="addcategory.php">
                                        <div class="box_general padding_bottom">
                                            <div class="header_box version_2">
                                                <h2><i class="fa fa-user"></i>Add Category</h2>
                                            </div>
                                            <div class="col-md-8 add_top_30">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label>Category Name</label>
                                                            <input type="text" name="name" minlength="2" class="form-control" required="" placeholder="Category Name">
                                                        </div>
                                                    </div>

                                                </div>
                                                <button type="submit" class="btn_1 medium" name="submit" >Add Category</button>
                                            </div>
                                        </div>
                                        </div>

                                        </div>
                                    </form>
                                </td>
                            <script type="text/javascript">
                                function val()
                                {
                                    conf = confirm('Are you sure to delete this category?');
                                    if (conf)
                                        return true
                                    else
                                        return false
                                }
                            </script>
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
                                $(document).ready(function () {
                                    $("#myInput").on("keyup", function () {
                                        var value = $(this).val().toLowerCase();
                                        $("#myTable tr").filter(function () {
                                            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                                        });
                                    });
                                });
                </script>


                </body>
                </html>
