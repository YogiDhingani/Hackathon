<?php
session_start();

function fileUpload(){
  $uploadOk = 1;
  $target_dir = "../upload/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

  if ($_FILES["fileToUpload"]["size"] > 500000) {
    //echo "Sorry, your file is too large.";
    $uploadOk = 0;
    echo "big file";
  }

  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
  && $imageFileType != "pdf" ) {
    $uploadOk = 0;
    echo "not valid";
  }

  $link = "http://127.0.0.1/upload/";
  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk== 0) {
    //echo "Upload fails";
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
      updateSQL($link.basename($_FILES["fileToUpload"]["name"]));
    } else {
      //echo "Sorry, there was an error uploading your file.";
    }
  }
}

function updateSQL($par){
  include("getConn.php");
  $title=$_POST['title'];
  $category=$_POST['category'];
  $description=$_POST['description'];
  $userid=$_SESSION['user_id'];
  $location = null;
  if(isset($_POST['cords'])){
      $location=$_POST['cords'];
  }
  $mng = "SELECT manager_id FROM manager where category = (SELECT category_id FROM category where name = '$category')";
  $result = $conn->query($mng);
  if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
      $mng_id=$row['manager_id'];
    }
  }

  if($par === "not"){
    $sql = "INSERT INTO complaint(title,category_name,complain_detail,location,status,privacy,user_id,manager_id)
    VALUES('$title','$category','$description','$location','pending',0,$userid,$mng_id)";
  }else{
    $sql = "INSERT INTO complaint(title,category_name,complain_detail,location,status,privacy,user_id,manager_id,complaint_file)
    VALUES('$title','$category','$description','$location','pending',0,$userid,$mng_id,'$par')";
  }

  if ($conn->query($sql) === TRUE) {
    echo "success";
  }else {
    echo '<script>console.log("SQL error")</script>';
  }
}

if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
  updateSQL("not");
}else{
  fileUpload();
}
?>
