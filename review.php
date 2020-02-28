<?php
include 'getConn.php';
$rev = $_POST['review'];
$id = $_POST['id'];

if($rev==="satisfied"){
  $sql = "Update complaint set review='satisfied' where complaint_id=$id";
  if ($conn->query($sql) === TRUE) {
      echo "success";
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}else{
$sql = "Update complaint set review='$rev', status='Pending' where complaint_id=$id";
  if ($conn->query($sql) === TRUE) {
      echo "success";
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}
?>
