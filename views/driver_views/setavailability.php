<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!isset($_SESSION["D"])) {
    header("Location: ../error.html");
    exit;
}
$driver = $_SESSION["D"];
?>
<?php

include("../dbconnection/usercon.php");
require_once("../dbconnection/dbcon.php");
$query = "select drivers.availability from drivers where drivers.user_name = 'isuru123'";
$result = mysqli_query($conString, $query);
$row = mysqli_fetch_array($result);
$avaliablity = $row[0];
if (isset($_POST["available"])) {
    $query1 = "update drivers set drivers.availability = 1 WHERE drivers.user_name = 'isuru123'";
    $result1 = mysqli_query($conString, $query1);
    echo "<div class='availablity-status'>";
    echo "<h1 class='status-title' style='color:green;'>Currently Available</h1></div>";   
    if (!$result1) {
        $err = mysqli_error($conString);
        print $err;
        exit();
    }
}else if(isset($_POST["not-available"])){
    $query2 = "update drivers set drivers.availability = 0 WHERE drivers.user_name = 'isuru123'";
    $result2 = mysqli_query($conString, $query2);
    echo "<div class='availablity-status'>";
    echo "<h1 class='status-title' style='color:red;'>Currently Not Available</h1></div>"; 
    if (!$result2) {
        $err = mysqli_error($conString);
        print $err;
        exit();
    }
}

?>
<style>
    .main {
        width: 500px;
        display: grid;
        grid-template-columns: 1fr;
        align-items: center;
        padding: 20px;
        border-radius: 30px;
        background: rgb(194 194 194 / 50%);
        margin: auto;
    }

    .containeravail {
        display: flex;
        padding: 10px;
        text-align: center;
        margin: 20px auto 20px auto;
    }

    .left-content {
        padding: 5px;
        background: green;
        border-radius: 49px;
        height: 50px;
        margin: 0 0 0 0;
    }

    .right-content {
        padding: 5px;
        background: red;
        border-radius: 49px;
        height: 50px;
        margin: 0 0 0 10px;
    }

    .available {

        background-color: green;
    }

    .not-available {

        background-color: red;
    }

    .button-default {
        margin: auto;
        width: 150px;
        border: none;
        outline: none;
        height: 50px;
        border: 2px solid white;
        border-radius: 49px;
        color: #fff;
        cursor: pointer;
        transition: 0.5s;
        float: right;
        text-transform: uppercase;
        font-weight: bold;
    }

    .status-title {
        margin: auto;
    }

    .availablity-status {
        margin: 0 0 20px 0;
        text-align: center;
    }
</style>
<div class="main">
    <div class="containeravail">

        <div class="left-content">
            <form action="" method="post" class="availability-form">
                <button type="submit" name="available" class="available button-default">Available</button>

        </div>
        <div class="right-content">
            <button type="submit" name="not-available" class="not-available button-default">Busy</button>
            </form>
        </div>

    </div>

</div>