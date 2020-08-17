<?php

include 'config2.php';
if (!isset($_SESSION['login_admin_id'])) {
    header('Location:login.php');
}
$id = $_REQUEST['id'];
$update = 'UPDATE complaint SET status="pending",review_status="accept" where complaint_id='.$id;
if (mysqli_query($conn, $update)) {
    //echo "Records updated successfully.";
    header("Location:viewreviewcomplaint.php");
} else {
    echo "ERROR: Could not able to execute $update. " . mysqli_error($conn);
}
?>

