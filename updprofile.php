<?php
session_start();
include("getConn.php");
  $name=$_POST['nm'];
  //$id=$_POST['eid'];
  $pn=$_POST['phone_no'];
  $uid = $_SESSION['user_id'];
  $sql = "UPDATE user SET name='$name', phone_no='$pn' WHERE user_id=$uid";

  if ($conn->query($sql) === TRUE) {
    echo "success";
  }
  else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
?>
