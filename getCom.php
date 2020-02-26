<?php
session_start();
include('getConn.php');
$user = $_SESSION['user_id'];
$sql = "SELECT * FROM complaint where user_id = $user";
$result = $conn->query($sql);
if (count($result->num_rows)) {
    $coms = array();
    
  while($row = mysqli_fetch_array($result)) {
    $com = array();
    $com['id'] = $row["complaint_id"];
    $com['title'] = $row["title"];
    $com['category'] = $row["category_name"];
    $com['desc'] = $row["complaint_detail"];
    
    $mng =$row["manager_id"];
    $sql2 = "SELECT name FROM manager where manager_id = $mng";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
      while($row2 = $result2->fetch_assoc()) {
        $com['manager'] = $row2["name"];
      }
    }
    $com['status'] = $row["status"];
    $com['date'] = $row["creation_date"];
    array_push($coms,$com);
  }
  echo json_encode($coms);  
}

?>
