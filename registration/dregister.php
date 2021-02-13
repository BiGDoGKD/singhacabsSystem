<?php
$mess = "";
if (isset($_POST["register"])) {
    //conncet to the database
    require_once("./dbconnection/usercon.php");
    include("./dbconnection/dbcon.php"); //database connection function
    $role = 'D';
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

    $licenseno = $_POST["licenseNo"];

    $time1 = strtotime($_POST['LED']);
    $LED = date('Y-m-d', $time1);

    $vehicleno = $_POST["vehicleno"];
    $model = $_POST["model"];
    $color = $_POST["color"];
    $type = $_POST["type"];


    $query1 = "INSERT INTO users_inf(role,user_name, email, password, Fname, Lname, NIC, DOB, BGroup, mobile, city, state) VALUES('$role','$user_name','$email','$password','$first_name','$last_name','$nic','$dob','$bgroup','$mobile','$city','$state')";
    $query = "INSERT INTO drivers(user_name, licenseno, licenseExDate, availability) VALUES('$user_name','$licenseno','$LED',1)";
    $query2 = "INSERT INTO vehicles(user_name,vehicleNo,model,color,type)VALUES('$user_name','$vehicleno','$model','$color','$type')";
    $result = mysqli_query($conString,$query);
    $result1 = mysqli_query($conString,$query1);
    $result2 = mysqli_query($conString,$query2);
    if (!($result&&$result1&&$result2)) {
        echo 'you cant register twice:';
        exit;
    }
    echo 'user successfully created!';
    header("Refresh:2; url=../index.php");
}
