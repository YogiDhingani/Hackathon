
<?php 		
include 'config2.php';
if (!isset($_SESSION['login_admin_id'])) {
header('Location:login.php');
	echo $_REQUEST['id'];
}
if(isset($_POST['submit'])){
   mysqli_close($conn);
}

?>

<?php include('admin_header.php');  
$j=1; $i=0;
$q='SELECT * FROM complaint where complaint_id='.$_REQUEST['id'];
$data=mysqli_query($conn,$q);
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
        <li class="breadcrumb-item active">Add Solution</li>
      </ol>
       <form method="post" action="addComplaint.php" id="comForm" enctype="multipart/form-data">
	   	<input type="hidden" name="id" value="<?php echo $_REQUEST['id'] ?>">
		<div class="box_general padding_bottom">
			<div class="header_box version_2">
				<h2><i class="fa fa-user"></i>Add Solution</h2>
			</div>
				<div class="col-md-8 add_top_30">
					<div class="row">
						<div class="col-md-12"-->
							<div class="form-group">
								<label>Title</label>
								<input type="text" name="title" id="title" value="<?php echo  $result ['title'];?>" minlength="2" required="" class="form-control" placeholder="Title" readonly>
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
						<div class="col-md-12">
							<div class="form-group">
								<label>Complaint Detail</label>
								<textarea class="form-control" id="complaint_detail" rows="7" readonly><?php echo $result ['complaint_detail'] ?></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<label>Solution Detail</label>
								<textarea class="form-control" id="solution_detail" rows="7"name="description" placeholder="write solution here"></textarea>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
						<div class="form-group">
							<label>Upload File</label>
							<input type="file" class="form-control-file" aria-describedby="fileHelp" name="fileToUpload">
						</div>
						</div>
					</div>

    <button type="submit" class="btn_1 medium" name="submit" >Add</button>

         	
          
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
	<script>
	    $("#comForm").submit(function(e){
      e.preventDefault();
      var form_data = new FormData(this);
      $.ajax({
        url: "addComplaint.php",
        cache: false,
        contentType: false,
        processData: false,
        data: form_data,
        type: 'POST',
        success: function(data){
          if(data=="not valid"){
            alert("Only jpg, png and pdf allowed");
          }else if(data=="success"){
            window.location.href = "viewsolvedcomplaint.php";
          }else if(data=="big file"){
            alert("Size is too big");
          }else {
            console.log(data);
          }
        },error:function(){
          console.log("Error");
        }
      });
    });

    </script>
	<?php include('admin_footer.php');?>
	
</body>
</html>
