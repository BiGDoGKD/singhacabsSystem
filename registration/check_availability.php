<?php
require_once("DBController.php");
$db_handle = new DBController();

if(!empty($_POST["username"])) {
  $query = "SELECT * FROM users_inf WHERE user_name='" . $_POST["username"] . "'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      echo "<span class='status-not-available'> Username has already been taken!</span>";
  }else{
      echo "<span class='status-available'> Username Available!</span>";
  }
}

if(!empty($_POST["email"])) {
  $query = "SELECT * FROM users_inf WHERE email='" . $_POST["email"] . "'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      echo "<span class='status-not-available'> Sorry, that email address is already used!</span>";
  }else{
      echo "<span class='status-available'> Email Available! " . $_POST["email"] . "</span>";
  }
}

if(!empty($_POST["nic"])) {
  $query = "SELECT * FROM `users_inf` WHERE NIC = '".$_POST["nic"]."'";
  $user_count = $db_handle->numRows($query);
  if($user_count>0) {
      echo "<span class='status-not-available'> Sorry, that identity is already used!</span>";
  }else{
      echo "<span class='status-available'> Identity Available!</span>";
  }
}
