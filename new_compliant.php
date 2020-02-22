<html>
<!-- <head>
  <link href="css/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<title>Complaint management System</title>-->
<body>
  <?php
		session_start();
		if(!isset($_SESSION['user_id'])){
			die("Do Login First");
		}
			$_SESSION['user_id']=$_SESSION['user_id'];
			include ("header.php");
	?>
  <section id="form" class="clearfix">
    <div class="container">
      <div class="intro-img">
        <form method="post">
          <div class="form-group row">
            <label for="inputTitle" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputTitle" placeholder="Title" name="title">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputCategory" class="col-sm-2 col-form-label">Category</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputCategory" placeholder="Category" name="category">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputSubCategory" class="col-sm-2 col-form-label">Sub Category</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputSubCategory" placeholder="Sub Category" name="subcategory">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputDescription" class="col-sm-2 col-form-label">Description</label>
            <div class="col-sm-4">
              <textarea type="email" rows="5" class="form-control" id="inputDescription" placeholder="Description" name="description"></textarea>
            </div>
          </div>
            <div class="form-group row">
            <label for="inputLocation" class="col-sm-2 col-form-label">Location</label>
            <div class="col-sm-4">
              <input type="email" class="form-control" id="inputLocation" placeholder="Location" name="location">
            </div>
          </div>
           <div class="form-group row">
              <label class="col-sm-2 col-form-label" for="exampleInputFile">Upload File</label>
              <div class="col-sm-4">
              <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">
           </div>
            </div>
          <div class="form-group row">
            <div class="col-sm-10">
              <button style="background:#00428a" type="submit" class="btn btn-primary" name="compaint">Complaint</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>
  <?php
		include("footer.php");
		if(isset($_POST['compaint'])){
			$title=$_POST['title'];
			$category=$_POST['category'];
			$subcategory=$_POST['subcategory'];
			$description=$_POST['description'];
			$location=$_POST['location'];
			$userid=$_SESSION['user_id'];
			include("getConn.php");
			$sql = "INSERT INTO complaint (title,category_name,subcategory_name,complain_detail,location,status,privacy,user_id) VALUES ('$title','$category','$subcategory','$description','$location','pending','public','$user_id')";

			if ($conn->query($sql) === TRUE) {
				//echo "New record created successfully";
				header("location:new_compliant.php");
			} 
			else {
				echo "Error: " . $sql . "<br>" . $conn->error;
				}
		}	
	?>
  </body>
</html>
