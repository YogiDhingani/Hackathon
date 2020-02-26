<?php
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

  $link = "http://127.0.0.1/Hackthon2020/upload/";
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
include("config2.php");
  $description=$_POST['description'];
  $id=$_POST['id'];
  //echo $id;

  if($par === "not"){
    $sql = "Update complaint set solution_detail='$description', status='Completed' where complaint_id=$id";
  }else{
    $sql = "Update complaint set solution_detail='$description',solution_file='$par',status='Completed' where complaint_id=$id";
  }

  if ($conn->query($sql) === TRUE) {
    echo "success";
  }else {
    echo "SQL error";
  }
}

if(!isset($_FILES['fileToUpload']) || $_FILES['fileToUpload']['error'] == UPLOAD_ERR_NO_FILE) {
  updateSQL("not");
}else{
  fileUpload();
}
?>
