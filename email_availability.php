<?php
require_once("DBController.php");
$db_handle = new DBController();


if(!empty($_POST["email"])) {
    $query = "SELECT * FROM users_info WHERE email='" . $_POST["email"] . "'";
    $user_count = $db_handle->numRows($query);
    if($user_count>0) {
        echo "<span class='status-not-available'> Sorry, that email address is already used!</span>";
    }else{
        echo "<span class='status-available'> Email Available!</span>";
    }
  }
?>