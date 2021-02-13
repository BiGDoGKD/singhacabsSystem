<?php
    
    require_once("../dbconnection/usercon.php");
    include("../dbconnection/dbcon.php");
    session_start();
    if(isset($_POST['Login'])){
        if(empty($_POST['uname'])|| empty($_POST['password'])){
            header("location:../index.php?empty=please enter your login details");
        }else{
            $query = "SELECT user_name, role FROM users_inf WHERE user_name = '".$_POST['uname']."' AND password = md5('".$_POST['password']."')";
            $result = mysqli_query($conString,$query);
            while ($row = mysqli_fetch_array($result)) {
                    $name = $row["0"];
                    $role = $row["1"];
                }
            if(mysqli_affected_rows($conString) == 0){
                header("location:../index.php?invalid=invalid login credentials"); 
            }else if($role == 'A'){
                $_SESSION['A']=$name;
                header("Location:../views/administrator.php");
            }else if($role == 'M'){
                $_SESSION['M']=$name;
                header("Location:../views/manager.php");
            }else if($role == 'D'){
                $_SESSION['D']=$name;
                header("Location:../views/driver.php");
            }else if($role == 'C'){
                $_SESSION['C']=$name;
                header("Location:../views/customer.php");
            }
        }
    }else{
        echo 'Not Working Now';
    }

    // //conncet to the database
    // require_once("./dbconnection/usercon.php");
    // include("./dbconnection/dbcon.php"); //database connection function
    // $user = $_POST["user_name"];
    // $password = md5($_POST["password"]);
    // //retriving data from db
    // $query = "SELECT username FROM users WHERE username = '$user' AND password = '$password'";
    // $result = mysqli_query($conString,$query);
    // while ($row = mysqli_fetch_array($result)) {
    //     $name = $row["0"];
    // }
    // if (mysqli_affected_rows($conString) == 0) {
    //     $mess = "<font color=purple size=2><b>Wrong username or password.<br>Please try again.</b></font><br>";
    // } else {
    //     $_SESSION["username"] = $name;
    //     header("Location:./user/customer.php");
    //     exit;
    // }
