<?php
session_start();
include('getConn.php');
$user = $_SESSION['user_id'];
$sql = "SELECT * FROM complaint where user_id = $user";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $coms = array();
  while($row = mysqli_fetch_array($result)) {
    $com = array();
    $com['id'] = $row["complaint_id"];
    $com['title'] = $row["title"];
    //$com['category'] = $row["category_name"];
    $com['desc'] = $row["complaint_detail"];

    $cat =$row["category_id"];
    $sql2 = "SELECT name FROM category where category_id = $cat";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
      while($row2 = $result2->fetch_assoc()) {
        $com['category'] = $row2["name"];
      }
    }

    $mng =$row["manager_id"];
    $sql3 = "SELECT name FROM manager where manager_id = $mng";
    $result3 = $conn->query($sql3);
    if ($result3->num_rows > 0) {
      while($row3 = $result3->fetch_assoc()) {
        $com['manager'] = $row3["name"];
      }
    }

    if($row["complaint_file"] != NULL)
      $com['comp_file'] = $row["complaint_file"];
    else
      $com['comp_file'] = "No file found";

    if($row["solution_file"] != NULL)
      $com['sol_file'] = $row["solution_file"];
    else
      $com['sol_file'] = "No file found";

    if($row["solution_detail"] != NULL)
      $com['sol_det'] = $row["solution_detail"];
    else
      $com['sol_det'] = "Your request is still pending";
    
    if($row["review"] != NULL)
      $com['review'] = $row["review"];
    else
      $com['review'] = "not";

    $com['status'] = $row["status"];
    $com['date'] = $row["creation_date"];
    array_push($coms,$com);
  }
  echo json_encode($coms);
}else{
  echo json_encode("no data");
}

?>
