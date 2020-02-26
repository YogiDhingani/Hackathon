<?php
session_start();
include("getConn.php");
$comm=$_POST['com'];
$com_id = $_POST['com_id'];
$userid=$_SESSION['user_id'];

$sql = "INSERT INTO comments(complaint_id,comment,user_id)VALUES('$com_id','$comm','$userid')";

if ($conn->query($sql) === TRUE) {
  echo "success";
}else {
  echo 'error';
}
?>
