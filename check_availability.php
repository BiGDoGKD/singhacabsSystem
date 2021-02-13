<?php
require_once("DBController.php");
$db_handle = new DBController();


if(!empty($_POST["username"])) {
  $query = "SELECT * FROM users_info WHERE user_name='" . $_POST["username"] . "'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      echo "<span class='status-not-available'> Username has already been taken!</span>";
  }else{
      echo "<span class='status-available'> Username Available!</span>";
  }
}
?>