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
    $s = "SELECT complain_detail FROM complaint where complaint_id=$id";
     $sql=mysqli_query($conn,$s);
     $row = mysqli_fetch_assoc($sql);
     echo $row['complain_detail'];?>
                        </div>
                        <div class="body">
                            
                        </div>
                    </div>
    	</div>
</div>
</body>
<?php include 'footer.php';?>