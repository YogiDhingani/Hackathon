<?php
include 'getConn.php';
$search= $_POST['search'];
$sql = "SELECT * FROM complaint WHERE title = '$search' or category_name = '$search' and status='completed'";
$result = $conn->query($sql);
if (mysqli_num_rows($result) < 1) {
    echo "<p>No Complaints Found</p>";
}else{
  while($row = mysqli_fetch_assoc($result)) {

?>
<div class="container" style="margin-top: 100px;">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

    <div class="card">
      <div class="header" style="background-color:#004a99; color:#fff">
        <?php
        echo"<h4 style=\"color:#fff;\">";
        echo "<b>Title : </b>";

        echo"</h4>";
        echo" <small>";
        echo"<b>Complaint : </b>";

        echo "</br>";
        echo "<b>Status : </b>";

        echo"</small>";
        ?>
      </div>
      <div class="body">
        <?php
        echo"<b>Solution : </b>";
        echo $row['solution_detail'];?>
      </div>
    </div>
  </div>
</div>

<?php }} ?>
