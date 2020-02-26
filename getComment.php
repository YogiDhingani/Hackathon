<?php
session_start();
include('getConn.php');
$id = $_POST["com_id"];
$sql = "SELECT * FROM comments where complaint_id = $id";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $coms = array();
  while($row = $result->fetch_assoc()) {
    $com = array();
    $com['comment'] = $row["comment"];
    $usr =$row["user_id"];

    $sql2 = "SELECT name FROM user where user_id = $usr";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
      while($row2 = $result2->fetch_assoc()) {
        $com['user'] = $row2["name"];
      }
    }
    array_push($coms,$com);
  }
  echo json_encode($coms);
}
?>
