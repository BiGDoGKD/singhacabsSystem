<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!isset($_SESSION["M"])) {
    header("Location: ../../error.html");
    exit;
}
?>
<?php

$mess = "";

if (isset($_POST["change"])) {
    include("../dbconnection/usercon.php");
    require_once("../dbconnection/dbcon.php");
    $Fname = $_POST["first_name"];
    $Lname = $_POST["last_name"];
    $email = $_POST["email"];
    $mobile = $_POST["mobile"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $user_name = $_POST["user_name"];

    $query2 = "UPDATE users_inf SET Fname='$Fname', Lname='$Lname', email='$email', mobile='$mobile', city='$city', state='$state' WHERE user_name = '$user_name'";

    $result2 = mysqli_query($conString, $query2);
    if (!$result2) {
        $err = mysqli_error($conString);
        print $err;
        exit();
    }
}

?>
<?php
$uname = $_SESSION["M"];
?>
<?php

include("../dbconnection/usercon.php");
require_once("../dbconnection/dbcon.php");

$query = "SELECT Fname, Lname, email, mobile, city, state FROM users_inf WHERE user_name = '$uname'";
$result = mysqli_query($conString, $query);
if (!$result) {
    print mysqli_error($conString);
    exit();
}
while ($row = mysqli_fetch_array($result)) {
    $Fname = $row[0];
    $Lname = $row[1];
    $email = $row[2];
    $mobile = $row[3];
    $city = $row[4];
    $state = $row[5];
}
?>
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    .form-view {
        margin: auto;
        background: rgb(255, 175, 27);
        width: 800px;
        padding: 30px;
        border-radius: 45px;
        box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
    }

    .form-view-form {
        display: grid;
        grid-template-columns: 1fr 1fr;
        width: 100%;
        grid-column-gap: 20px;

    }

    .date-input-field {
        width: 80%;
        outline: none;
        line-height: 1;
        font-weight: 600;
        font-size: 1.1rem;
        color: #808080;
        background-color: #dfdfdf;
        margin: 10px 0;
        height: 55px;
        border: 0px;
        border-radius: 55px;
        position: relative;
    }

    .input-field input {
        width: 100%;
        outline: none;
        line-height: 1;
        font-weight: 600;
        font-size: 1.1rem;
        color: #333;
        background-color: #dfdfdf;
        margin: 8px 0;
        height: 45px;
        border: 0px;
        border-radius: 55px;
        position: relative;
        padding: 0 0 0 60px;
    }

    .input-field.select-input-field {
        width: 100%;
        outline: none;
        line-height: 1;
        font-weight: 600;
        color: #acacac;
        background-color: #dfdfdf;
        margin: 6px 0;
        height: 55px;
        border: 0px;
        border-radius: 55px;
        position: relative;
        padding: 0 0 0 60px;
    }

    select {
        width: 95%;
        outline: none;
        line-height: 1;
        font-weight: 600;
        font-size: 1.1rem;
        color: #808080;
        background: none;
        height: 55px;
        border: 0px;
        border-radius: 55px;
    }

    .input-field i {
        text-align: center;
        line-height: 55px;
        color: #acacac;
        transition: 0.5s;
        font-size: 1.1rem;
        position: absolute;
        left: 10px;
        top: 60%;
        transform: translateY(-50%);
        z-index: 1;
        margin: 2px 0 0 10px;
    }

    .input-field {
        max-width: 500px;
        width: 100%;
        position: relative;
    }

    .btn {
        width: 150px;
        background-color: #ffc107;
        border: none;
        outline: none;
        height: 49px;
        border-radius: 49px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        margin: 10px 0;
        cursor: pointer;
        transition: 0.5s;
    }

    .btn:hover {
        background-color: #ffc107;
    }

    .title {
        font-size: 2.2rem;
        color: #444;
        margin-bottom: 10px;
    }

    .form-title {
        background-color: #ffaf1b;
        color: #fafafa;
        font-family: 'Open Sans', Sans-serif;
        font-weight: 200;
        text-transform: uppercase;
    }
</style>
<center>
    <h2 style="color: #6f7274;
    font-size: 2em;
    margin: 0 0 20px 0;
    font-family: 'Open Sans', Sans-serif;
    text-transform: uppercase;">Account Settings</h2>
</center>
<div class="form-view">


    <form class="form-view-form" name="admin_edit" method="post" action="" onSubmit="return test_form2()">
        <input type="hidden" name="user_name" value="<?php echo $uname; ?>">
        <div class="input-field">
            <span class="form-title">
                First Name
            </span>
            <i class="fas fa-user"></i>
            <input type="text" name="first_name" size="50" maxlength="60" value="<?php echo $Fname; ?>">
        </div>
        <div class="input-field">
            <span class="form-title">
                Last Name
            </span>
            <i class="fas fa-user"></i>
            <input type="text" name="last_name" size="50" maxlength="60" value="<?php echo $Lname; ?>">
        </div>
        <div class="input-field">
            <span class="form-title">
                Email
            </span>
            <i class="fas fa-user"></i>
            <input type="text" name="email" size="50" maxlength="60" value="<?php echo $email; ?>">
        </div>
        <div class="input-field">
            <span class="form-title">
                Mobile
            </span>
            <i class="fas fa-user"></i>
            <input type="text" name="mobile" size="50" maxlength="60" value="<?php echo $mobile; ?>"><br>
        </div>
        <div class="input-field">
            <span class="form-title">
                City
            </span>
            <i class="fas fa-user"></i>
            <input type="text" name="city" size="50" maxlength="60" value="<?php echo $city; ?>">
        </div>
        <div class="input-field">
            <span class="form-title">
                State
            </span>
            <i class="fas fa-user"></i>
            <input type="text" name="state" size="50" maxlength="60" value="<?php echo $state; ?>">
        </div>

        <input class="btn" type="submit" name="change" value=" Submit ">

        <!-- &nbsp;&nbsp; -->

        <input class="btn" type="reset" name="reset_s" value="Cancel">

    </form>
</div>