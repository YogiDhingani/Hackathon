<?php
include('getConn.php');
$sql = "SELECT location FROM complaint";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  $coms = array();
  while($row = mysqli_fetch_array($result)) {
    $com = array();
    $location = $row["location"];
    //print_r($location);
    if($location!=null||$location!=""){
      $str_arr = explode (",", $location);
      $com['latitude']=$str_arr[0];
      $com['longitude']=$str_arr[1];
      array_push($coms,$com);
    }
    // if($row["lat"]!=null)
    //   $com['latitude'] = $row["lat"];
    // if($row["lng"])
    //   $com['longitude'] = $row["lng"];
  }
  echo json_encode($coms);
}
?>
