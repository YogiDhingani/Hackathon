<head>
	<link href="sunilcss/style.css" rel="stylesheet"/>
	<link href="css/bootstrap.min.css" rel="stylesheet"/>
</head>

<?php include 'header.php';?>
<body>
<div class="container" style="margin-top: 100px;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header" style="background-color:#004a99; color:#fff">
                        	<?php include 'getConn.php';
                        	$id = $_GET['complaint_id'];
    $s = "SELECT complaint_detail,title FROM complaint where complaint_id=$id";
    $sql=mysqli_query($conn,$s);
    $row = mysqli_fetch_assoc($sql);
    echo"<h4 style=\"color:#fff;\">";
    echo "<b>Title : </b>";
    echo $row['title'];
    echo"</h4>";
    echo" <small>";
    echo"<b>Complaint : </b>";
    echo $row['complaint_detail'];
	echo "<b>Status:</b>";
	echo $row['status'];
			
    echo"</small>";
	?>
    </div>
    <div class="body">
    <?php include 'getConn.php';
    $id = $_GET['complaint_id'];
    $s = "SELECT solution_detail FROM complaint where complaint_id=$id";
    $sql=mysqli_query($conn,$s);
    $row = mysqli_fetch_assoc($sql);
    echo"<b>Solution : </b>";
    echo $row['solution_detail'];?>
    </div>
    </div>
    </div>
</div>
</body>
<?php include 'footer.php';?>