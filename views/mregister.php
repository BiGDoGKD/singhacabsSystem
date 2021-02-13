<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!isset($_SESSION["A"])) {
    header("Location: ../error.html");
    exit;
}
?>
<?php
$mess = "";
if (isset($_POST["register"])) {
    //conncet to the database
    require_once("./dbconnection/usercon.php");
    include("./dbconnection/dbcon.php"); //database connection function
    $role = 'M';
    $time = strtotime($_POST['DOB']);
    $dob = date('Y-m-d', $time);
    $user_name = $_POST["uname"];
    $password = md5($_POST["password"]);
    $password_conf = md5($_POST["password_conf"]);
    if ($password != $password_conf) {
        header("location:./customer.php?missmatch=password missmatch");
        exit;
    }
    $email = $_POST["email"];
    $first_name = $_POST["fName"];
    $last_name = $_POST["lName"];
    $nic = $_POST["nic"];
    $mobile = $_POST["mobile"];
    $bgroup = $_POST["B-group"];
    $city = $_POST["city"];
    $state = $_POST["state"];


    $query = "INSERT INTO users_inf(role,user_name, email, password, Fname, Lname, NIC, DOB, BGroup, mobile, city, state) VALUES('$role','$user_name','$email','$password','$first_name','$last_name','$nic','$dob','$bgroup','$mobile','$city','$state')";
    $result = mysqli_query($conString,$query);
    if (!$result) {
        echo 'you cant register twice:';
        exit;
    }
    header("Refresh:0; url=./administrator.php");
    
}
?>