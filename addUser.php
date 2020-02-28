<?php
  $name=$_GET['nm'];
  $eid=$_GET['eid'];
  $phone_no=$_GET['phone_no'];
  $gender=$_GET['gender'];
  $password=$_GET['password'];
  //$cpassword=$_POST['cpassword'];

  /*function validPhone($ph){
    return preg_match('/^[0-9]{10}+$/',$ph);
  }

  if (!validPhone($phone_no)) {
    echo "phone";
  }else if($password!==$cpassword){
    echo "Not matched";
  }else{
    include("getConn.php");
    $sql = "SELECT user_id FROM user WHERE email_id = '$eid'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      echo "Already";
    }
    else {*/
      $pass = md5($password);
      include("getConn.php");
      $sql = "INSERT INTO user(name,email_id,phone_no,password,gender) VALUES($name,$eid,$phone_no,'$pass',$gender)";
      if ($conn->query($sql) === TRUE) {
          header("Location:login.php");
      }
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
   // }
  //}
?>
