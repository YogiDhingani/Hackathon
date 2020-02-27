<?php
include 'getConn.php';
$rev = $_POST['review'];
$id = $_POST['id'];
$sql = "Update complaint set review='$rev', status='Pending' where complaint_id=$id";
  if ($conn->query($sql) === TRUE) {
      echo "success";
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
