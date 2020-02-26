<?php
session_start();
include('getConn.php');
$user = $_SESSION['user_id'];
$sql = "SELECT * FROM complaint where user_id = $user";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  $coms = array();
  while($row = $result->fetch_assoc()) {
    $com = array();
    $com['id'] = $row["complaint_id"];
    $com['title'] = $row["title"];
    $com['category'] = $row["category_name"];
    $com['desc'] = $row["complaint_detail"];
    // if()
    //   $coms[$i]['location'] = $row["location"];
    $mng =$row["manager_id"];
    $sql2 = "SELECT name FROM manager where manager_id = $mng";
    $result2 = $conn->query($sql2);
    if ($result2->num_rows > 0) {
      while($row2 = $result2->fetch_assoc()) {
        $com['manager'] = $row2["name"];
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

    $com['status'] = $row["status"];
    $com['date'] = $row["creation_date"];
    array_push($coms,$com);
  }
  echo json_encode($coms);
}
?>
