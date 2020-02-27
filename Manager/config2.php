<?php
$conn = mysqli_connect('127.0.0.1', 'root', '', 'cms');
session_start();
if(isset($_SESSION['login_admin_id']) && !empty($_SESSION['login_admin_id'])){	
	$adminid = $_SESSION['login_admin_id'];
}
$qq9 = "SELECT * FROM manager";
    $rr9 = mysqli_query($conn,$qq9);
     $roo9 = mysqli_fetch_assoc($rr9);
     $_REQUEST['login_admin_id'] = $roo9['manager_id'];

?>