<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!isset($_SESSION["M"])) {
    header("Location: ../../error.html");
    exit;
}
?>

<?php

include("../dbconnection/usercon.php");
require_once("../dbconnection/dbcon.php");

$row1 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from drivers"));
$drivers = $row1[0];

$row2 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from drivers"));
$totaldrivers = $row2[0];

$row3 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from drivers where availability >0"));
$availabledrivers = $row3[0];

$row4 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from drivers where availability = 0"));
$busydrivers = $row4[0];

$row5 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from users_inf where role = 'C'"));
$customers = $row5[0];

$row6 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(distinct ride.customer_name) from ride"));
$activecustomers = $row6[0];

$inactivecustomers = $customers-$activecustomers;

$row8 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from ride"));
$rides = $row8[0];

$row9 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from ride where status ='pending'"));
$pendingrides = $row9[0];

$row10 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from ride where status ='accepted'"));
$acceptedrides = $row10[0];

$row11 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from ride where status ='finished'"));
$finishedrides = $row11[0];

$row12 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from vehicles where type = 'micro' or type = 'sedan' or type = 'cuv'"));
$cars = $row12[0];

$row13 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from vehicles where type = 'micro'"));
$micro = $row13[0];

$row14 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from vehicles where type = 'sedan'"));
$sedan = $row14[0];

$row15 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from vehicles where type = 'cuv'"));
$cuv = $row15[0];

$row20 = mysqli_fetch_array(mysqli_query($conString, "SELECT round(SUM(ride.charge)*10/100) from ride where ride.status='finished'"));
$profit = $row20[0];

$totaltr = $rides;
$row16 = mysqli_fetch_array(mysqli_query($conString, "SELECT round(SUM(ride.charge)*10/100) from ride"));
$pendingtr = $row16[0];

$finishedtr = $finishedrides;

$row19 = mysqli_fetch_array(mysqli_query($conString, "SELECT SUM(ride.charge) from ride where ride.status='finished'"));
$revenue = $row19[0];



$row21 = mysqli_fetch_array(mysqli_query($conString, "SELECT SUM(ride.charge) from ride"));
$pendingpr = $row21[0];

$row22 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from ride where status != 'finished'"));
$paidpr = $row22[0];

$transactions = $profit;

$row24 = mysqli_fetch_array(mysqli_query($conString, "SELECT COUNT(*) from users_inf where role = 'C'"));
$totalcustomers = $row24[0];
?>

<style>
    .report-container {
        display: block;
        width: 80%;
        /* background: #eee; */
        height: 100%;
        border-radius: 25px;
        margin: auto;

        text-transform: uppercase;
    }

    .top-report-box {
        display: flex;
        width: 100%;
        margin: auto;
        justify-content: center;
    }

    .bottom-report-box {
        display: flex;
        width: 100%;
        justify-content: center;
    }

    .report-box {
        border: 0px solid #acacac;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        grid-template-rows: 1fr 1fr 1fr;
        margin: 10px;
        height: 150px;
        padding: 10px;
        width: 300px;
        border-radius: 10px;
        background: rgba(255, 255, 255, 0.4);
        box-shadow: 0 2px 15px rgba(64, 64, 64, .5);
    }

    .topchild {
        grid-column: 1/4;
        justify-self: center;
        color: #5a5a5a;

    }

    .child-title {
        margin: 15px 0 0 0;
    }

    .child-value {
        margin: 0 0 0 0;
        font-size: 2.5em;
        color: #3b3636;
    }

    .midchild {
        grid-column: 1/4;
        justify-self: center;
        color: #5a5a5a;
    }

    .bottomchild1 {
        margin: auto;
        text-align: center;

    }

    .bottomchild2 {
        margin: auto;
        text-align: center;
    }

    .bottomchild3 {
        margin: auto;
        text-align: center;
    }

    .small-child-title {
        font-size: 0.75em;
        margin: 0 0 0 0;
    }

    .small-child-value {
        font-size: 0.75em;
        margin: 0 0 0 0;
        font-weight: bold;
    }
</style>
<div class="report-container">
    <div class="top-report-box">
        <div class="block1 report-box">
            <div class="topchild">
                <h2 class="child-title">Drivers</h2>
            </div>
            <div class="midchild">
                <h2 class="child-value"><?php echo $drivers ?></h2>
            </div>
            <div class="bottomchild1">
                <span class="small-child-title">total</span><br />
                <span class="small-child-value"><?php echo $drivers ?></span>
            </div>
            <div class="bottomchild2">
                <span class="small-child-title">available</span><br />
                <span class="small-child-value"><?php echo $availabledrivers ?></span>
            </div>
            <div class="bottomchild3">
                <span class="small-child-title">busy</span><br />
                <span class="small-child-value"><?php echo $busydrivers ?></span>
            </div>
        </div>
        <div class="block1 report-box">
            <div class="topchild">
                <h2 class="child-title">Customers</h2>
            </div>
            <div class="midchild">
                <h2 class="child-value"><?php echo $customers ?></h2>
            </div>
            <div class="bottomchild1">
                <span class="small-child-title">total</span><br />
                <span class="small-child-value"><?php echo $totalcustomers ?></span>
            </div>
            <div class="bottomchild2">
                <span class="small-child-title">active</span><br />
                <span class="small-child-value"><?php echo $activecustomers ?></span>
            </div>
            <div class="bottomchild3">
                <span class="small-child-title">inactive</span><br />
                <span class="small-child-value"><?php echo $inactivecustomers ?></span>
            </div>
        </div>
        <div class="block1 report-box">
            <div class="topchild">
                <h2 class="child-title">rides</h2>
            </div>
            <div class="midchild">
                <h2 class="child-value"><?php echo $rides ?></h2>
            </div>
            <div class="bottomchild1">
                <span class="small-child-title">pending</span><br />
                <span class="small-child-value"><?php echo $pendingrides ?></span>
            </div>
            <div class="bottomchild2">
                <span class="small-child-title">accepted</span><br />
                <span class="small-child-value"><?php echo $acceptedrides ?></span>
            </div>
            <div class="bottomchild3">
                <span class="small-child-title">finished</span><br />
                <span class="small-child-value"><?php echo $finishedrides ?></span>
            </div>
        </div>


    </div>
    <div class="bottom-report-box">
        <div class="block1 report-box">
            <div class="topchild">
                <h2 class="child-title">cars</h2>
            </div>
            <div class="midchild">
                <h2 class="child-value"><?php echo $cars ?></h2>
            </div>
            <div class="bottomchild1">
                <span class="small-child-title">micro</span><br />
                <span class="small-child-value"><?php echo $micro ?></span>
            </div>
            <div class="bottomchild2">
                <span class="small-child-title">sedan</span><br />
                <span class="small-child-value"><?php echo $sedan ?></span>
            </div>
            <div class="bottomchild3">
                <span class="small-child-title">cuv</span><br />
                <span class="small-child-value"><?php echo $cuv ?></span>
            </div>
        </div>
        <div class="block1 report-box">
            <div class="topchild">
                <h2 class="child-title">profit</h2>
            </div>
            <div class="midchild">
                <h2 class="child-value"><?php echo $transactions ?></h2>
            </div>
            <div class="bottomchild1">
                <span class="small-child-title">transactions</span><br />
                <span class="small-child-value"><?php echo $totaltr ?></span>
            </div>
            <div class="bottomchild2">
                <span class="small-child-title">estimated</span><br />
                <span class="small-child-value"><?php echo $pendingtr ?></span>
            </div>
            <div class="bottomchild3">
                <span class="small-child-title">finished</span><br />
                <span class="small-child-value"><?php echo $finishedtr ?></span>
            </div>
        </div>
        <div class="block1 report-box">
            <div class="topchild">
                <h2 class="child-title">Revenue</h2>
            </div>
            <div class="midchild">
                <h2 class="child-value"><?php echo $revenue ?></h2>
            </div>
            <div class="bottomchild1">
                <span class="small-child-title">profit</span><br />
                <span class="small-child-value"><?php echo $profit ?></span>
            </div>
            <div class="bottomchild2">
                <span class="small-child-title">estimated</span><br />
                <span class="small-child-value"><?php echo $pendingpr ?></span>
            </div>
            <div class="bottomchild3">
                <span class="small-child-title">pending</span><br />
                <span class="small-child-value"><?php echo $paidpr ?></span>
            </div>
        </div>


    </div>
</div>