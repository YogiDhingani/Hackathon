<script src="android.js"></script>
<?php
session_start();
if(isset($_SESSION['user_id'])){
  unset($_SESSION['user_id']);
}
session_destroy();?>
<script>
var r = confirm("You want to logout?");
if(r)
  performLogout();</script>
