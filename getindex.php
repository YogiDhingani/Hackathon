<?php
include 'getConn.php';
$arrs=array();
$s="SELECT count(user_id) As a FROM user";
$sql = $conn->query($s);
while($row = $sql->fetch_assoc()){
  $usr['user']=$row['a'];
  array_push($arrs,$usr);
}

$s2="SELECT count(complaint_id) As c FROM complaint";
$sql2 = $conn->query($s2);
while($row2 = $sql2->fetch_assoc()){
  $com['complaint']=$row2['c'];
  array_push($arrs,$com);
}

$s3="SELECT count(manager_id) As m FROM manager";
$sql3 = $conn->query($s3);
while($row3 = $sql3->fetch_assoc()){
  $mng['manager']=$row3['m'];
  array_push($arrs,$mng);
}

$s4="SELECT count(complaint_id) As co FROM complaint where status='Completed'";
$sql4 = $conn->query($s4);
while($row4 = $sql4->fetch_assoc()){
  $co['completed']=$row4['co'];
  array_push($arrs,$co);
}

echo json_encode($arrs);
?>
