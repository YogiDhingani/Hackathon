<?php include 'config2.php';
if (!isset($_SESSION['login_admin_id'])) {
header('Location:login.php');
}
?>

<?php include('admin_header.php'); ?>
<?php 
      $j=1; $i=0;
$q="SELECT * FROM complaint where complaint_id=".$_REQUEST['id'];
          $data=mysqli_query($conn,$q);
          ?>
  <!-- /Navigation-->

  <div class="content-wrapper">
    <div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">View Complaint</li>
      </ol>

    <!-- Example DataTables Card-->
      <div class="card mb-3"-->
        <div class="card-header"-->
          <div class="table-responsive"-->
		  <div class="container">
  <input class="form-control mb-4" id="myInput" type="text"
    placeholder="Search Complaint">
	
            <table  class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
				  <th>Description</th>
                </tr>
              </thead>
             <!--  <tfoot>
                <tr>
                  <th>User Id</th>
                  <th>Name</th>
                  <th>Lname</th>
                  <th>Email</th>
                  <th>Username</th>
                  <th>Gender</th>
                  <th>Birthdate</th>
                </tr>
              </tfoot> -->
			  <tbody id="myTable">
              <?php

               while($result = mysqli_fetch_array($data)){
          
       ?>
                 <tr>
                 <!--td> <!--?php echo  $result['user_id'];?> </td-->
					<td>Title</td>
					<td> <?php echo  $result ['title'];?> </td>
				</tr>
				<tr>
					<td>Category</td>
					<td><?php
                                        $q = 'SELECT * FROM category where category_id=' . $result['category_id'];
                                        $data1 = mysqli_query($conn, $q);
                                        $result1 = mysqli_fetch_array($data1);
                                        echo $result1['name'];
                                        ?></td>
				</tr>
								<tr>
					<td>complaint_detail</td>
					<td><?php echo $result ['complaint_detail'];?></td>
				</tr>
				<tr>
					<td>complaint_file</td>
					<td>
                                        <?php if($result ['complaint_file']!=NULL){
                                                echo "<a href=".$result ['complaint_file'].">See file</a>";
                                            }else{
                                                echo "No Complaint file exist";
                                            }
                                        ?></td>
                                        
				</tr>				<tr>
					<td>location</td>
					<td> <?php if ($result ['location'] != NULL) {
                                                echo '<a target="_blank" href=https://www.google.com/maps/place/'.$result ['location'].'>View Location</a>';
                                            } else {
                                                echo "No location specified";
                                            }
                                            ?></td>
				</tr>
			
				<tr>
					<td>status</td>
					<td><?php echo $result ['status'];?></td>
				</tr>
				<!--tr>
					<td>privacy</td>
					<td><?php echo $result ['privacy'];?></td>
				</tr-->
								<tr>
					<td>creation_date</td>
					<td><?php echo $result ['creation_date'];?></td>
                                        
                                
				</tr>
                                <tr>
                                        <td>Review</td>
					<td><?php echo $result ['review'];?></td>
                                        </tr>
								<!--tr>
					<td>solution_date</td>
					<td><?--php echo $result ['solution_date'];?></td>
				</tr-->
				<tr>
					<td>User</td>
					<td><?php $q1="SELECT name FROM user where user_id=".$result['user_id'];
							$data1=mysqli_query($conn,$q1);
							$result1 = mysqli_fetch_array($data1);
							echo '<a href="useredit.php?id='.$result['user_id'].'">'.$result1['name'].'</a>';
							?></td>
				</tr>
				<tr>
					<td>Manager</td>
					<td><?php $q1="SELECT name FROM manager where manager_id=".$result['manager_id'];
							$data1=mysqli_query($conn,$q1);
							$result1 = mysqli_fetch_array($data1);
							echo '<a href="manageredit.php?id='.$result['manager_id'].'">'.$result1['name'].'</a>';
							?></td>
				</tr>
				<tr>
				<td colspan=2>
				<a href="addsolution.php?id=<?php echo $_REQUEST['id'] ?>" class="btn_1 medium">Add Solution</a></td> 
				</tr>
                  
				  <!--td>
                    <a href="useredit.php?id=<--?php echo $result['user_id'];?>" class="btn_1 gray edits">Edit</a>
					</td> 
                  <td>
                     <a href="userdelete.php?id=<--?php echo $result['user_id'];?>" onclick="return val()" class="btn_1 gray delete">Delete</a>
				</td>      
                </tr>
       



        	<?php } ?>
        </tbody>
        </table>

      </div>
        </div>
       
      </div>
    <!-- /tables-->
    </div>
    <!-- /container-fluid-->
    </div>
    <!-- /container-wrapper-->
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
  
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
  <script src="vendor/jquery.selectbox-0.2.js"></script>
  <script src="vendor/retina-replace.min.js"></script>
  <script src="vendor/jquery.magnific-popup.min.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/admin.js"></script>
  <!-- Custom scripts for this page-->
    <script src="js/admin-datatables.js"></script>
  <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
</body>
</html>
