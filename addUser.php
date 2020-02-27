<?php
  $name=$_POST['nm'];
  $eid=$_POST['eid'];
  $phone_no=$_POST['phone_no'];
  $gender=$_POST['gender'];
  $password=$_POST['password'];
  $cpassword=$_POST['cpassword'];

  function validPhone($ph){
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
    else {
      $pass = md5($password);
      $sql = "INSERT INTO user(name,email_id,phone_no,password,gender) VALUES('$name','$eid',$phone_no,'$pass','$gender')";
      if ($conn->query($sql) === TRUE) {
        echo "success";
      }
      else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    }
  }
?>
