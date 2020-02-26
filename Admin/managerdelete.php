<?php include 'config2.php';
    $id=$_REQUEST['id']; 
    $delete="DELETE FROM manager WHERE manager_id='$id'";
    if(mysqli_query($conn, $delete))
    {
      echo "Records deleted successfully.";
    }
    else
    {
      echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
    header('Location:viewmanager.php'); 
?>