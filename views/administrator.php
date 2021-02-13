<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!isset($_SESSION["A"])) {
    header("Location: ../error.html");
    exit;
}
$uname = $_SESSION["A"];
?>
<?php
$temp = 0;

if ($temp != 2) {
    include("./dbconnection/usercon.php");
    require_once("./dbconnection/dbcon.php");
}
define('adminaccess',true);
?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrator</title>
    <link rel="stylesheet" href="userstyles.css" />
    <link rel="stylesheet" href="tablestyles.css" />
</head>

<body>
    <style>
        body {
            font-family: "Lato", sans-serif;
            transition: background-color .5s;
        }

        .sidenav {
            height: 100%;
            width: 0;
            position: fixed;
            z-index: 2;
            top: 0;
            left: 0;
            background-color: #111;
            overflow-x: hidden;
            transition: 0.5s;
            padding-top: 60px;
            text-align: center;
        }

        .sidenav a {
            padding: 8px 8px 8px 8px;
            text-decoration: none;
            font-size: 25px;
            color: #818181;
            display: block;
            transition: 0.3s;
        }

        .sidenav a:hover {
            color: #f1f1f1;
        }

        .sidenav .closebtn {
            position: absolute;
            top: 0;
            right: 25px;
            font-size: 36px;
            margin-left: 50px;
        }

        .profile-card {
            border: solid 1px #818181;
            border-radius: 45px;
            width: 200px;
            height: 250px;
            margin: auto auto 50px auto;
        }

        .profile-card>img {
            width: 75px;
            margin: 20px 0 0 0;
        }

        .role {
            margin: 15px 0 15px 0;
            font-size: 1.3em;
            color: #818181;
        }

        .username {
            color: #818181;
            font-size: 1em;
        }

        .logout_s {
            margin: 15px 0 0 0;
            color: #fff;
            border: 0px solid;
            border-radius: 15px;
            padding: 8px 15px 8px 15px;
            background: #e7a300;
            cursor: pointer;
        }

      

        @media screen and (max-height: 450px) {
            .sidenav {
                padding-top: 15px;
            }

            .sidenav a {
                font-size: 18px;
            }
        }
    </style>
    <div class="container">
        <div class="top-menu">
            <div class="account" onclick="openNav()">
                <img src="./img/profile.svg" style="height:50px;" alt="">
                <span class="menu-title" style="font-size:1.5em;margin:10px 0 0 20px;color:#6f7274;"> Account</span>
            </div>
        </div>
        <div class="content">
            <div class="side-menu">
                <div id="mySidenav" class="sidenav">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                    <div class="profile-card">
                        <img src="./img/profile.svg" alt="">
                        <h2 class="role">Administrator</h2>
                        <span class="username"><?php echo $_SESSION["A"];?></span><br />
                        <!-- <a href="#" style="font-size: 1em;"><span class="logout">Logout</span></a> -->
                        <button class="logout_s" onclick="location.href='logout.php?logout'">Logout</button>
                    </div>
                    <a href="#" onclick="accountsView()">User Accounts</a>
                    <a href="#" onclick="managersView()">Managers</a>
                    <a href="#" onclick="createMView()">Create Manager</a>
                    <a href="#" onclick="driversView()">Drivers</a>
                    <a href="#" onclick="ridesView()">Rides</a>
                    <a href="#" onclick="vehiclesView()">Vehicles</a>
                    <a href="#" onclick="vehicletypesView()">Vehicle Types</a>
                    <a href="#" onclick="settingsView()">Account Settings</a>
                    

                </div>
            </div>
            <div id="accounts-view">
                <?php include 'accounts.php' ?>
            </div>
            <div id="vehicles-view" style="display: none;">
                <?php include 'vehicles.php' ?>
            </div>
            <div id="drivers-view" style="display: none;">
                <?php include 'drivers.php' ?>
            </div>
            <div id="managers-view" style="display: none;">
                <?php include 'managers.php' ?>
            </div>
            <div id="createM-view" style="display: none;">
                <?php include 'createmanager.php' ?>
            </div>
            <div id="vehicletypes-view" style="display: none;">
                <?php include 'vehicletypes.php' ?>
            </div>
            <div id="rides-view" style="display: none;">
                <?php include 'rides.php' ?>
            </div>
            <div id="settings-view" style="display: none;">
                <?php include 'editcurrentuser.php' ?>
            </div>

        </div>
        <div class="footer1">
            <div id="footer">
                <?php include 'footer.php' ?>
            </div>
        </div>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "400px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft = "0";
            document.body.style.backgroundColor = "white";
        }

        function vehiclesView() {
            document.getElementById("accounts-view").style.display = "none";
            document.getElementById("vehicles-view").style.display = "block";
            document.getElementById("drivers-view").style.display = "none";
            document.getElementById("managers-view").style.display = "none";
            document.getElementById("vehicletypes-view").style.display = "none";
            document.getElementById("rides-view").style.display = "none";
            document.getElementById("settings-view").style.display = "none";
            document.getElementById("createM-view").style.display = "none";
        }

        function accountsView() {
            document.getElementById("accounts-view").style.display = "block";
            document.getElementById("vehicles-view").style.display = "none";
            document.getElementById("drivers-view").style.display = "none";
            document.getElementById("managers-view").style.display = "none";
            document.getElementById("vehicletypes-view").style.display = "none";
            document.getElementById("rides-view").style.display = "none";
            document.getElementById("settings-view").style.display = "none";
            document.getElementById("createM-view").style.display = "none";
        }

        function driversView() {
            document.getElementById("accounts-view").style.display = "none";
            document.getElementById("vehicles-view").style.display = "none";
            document.getElementById("drivers-view").style.display = "block";
            document.getElementById("managers-view").style.display = "none";
            document.getElementById("vehicletypes-view").style.display = "none";
            document.getElementById("rides-view").style.display = "none";
            document.getElementById("settings-view").style.display = "none";
            document.getElementById("createM-view").style.display = "none";
        }

        function managersView() {
            document.getElementById("accounts-view").style.display = "none";
            document.getElementById("vehicles-view").style.display = "none";
            document.getElementById("drivers-view").style.display = "none";
            document.getElementById("managers-view").style.display = "block";
            document.getElementById("vehicletypes-view").style.display = "none";
            document.getElementById("rides-view").style.display = "none";
            document.getElementById("settings-view").style.display = "none";
            document.getElementById("createM-view").style.display = "none";
        }

        function vehicletypesView() {
            document.getElementById("accounts-view").style.display = "none";
            document.getElementById("vehicles-view").style.display = "none";
            document.getElementById("drivers-view").style.display = "none";
            document.getElementById("managers-view").style.display = "none";
            document.getElementById("vehicletypes-view").style.display = "block";
            document.getElementById("rides-view").style.display = "none";
            document.getElementById("settings-view").style.display = "none";
            document.getElementById("createM-view").style.display = "none";
        }

        function ridesView() {
            document.getElementById("accounts-view").style.display = "none";
            document.getElementById("vehicles-view").style.display = "none";
            document.getElementById("drivers-view").style.display = "none";
            document.getElementById("managers-view").style.display = "none";
            document.getElementById("vehicletypes-view").style.display = "none";
            document.getElementById("rides-view").style.display = "block";
            document.getElementById("settings-view").style.display = "none";
            document.getElementById("createM-view").style.display = "none";
        }

        function settingsView() {
            document.getElementById("accounts-view").style.display = "none";
            document.getElementById("vehicles-view").style.display = "none";
            document.getElementById("drivers-view").style.display = "none";
            document.getElementById("managers-view").style.display = "none";
            document.getElementById("vehicletypes-view").style.display = "none";
            document.getElementById("rides-view").style.display = "none";
            document.getElementById("settings-view").style.display = "block";
            document.getElementById("createM-view").style.display = "none";
        }

        function createMView() {
            document.getElementById("accounts-view").style.display = "none";
            document.getElementById("vehicles-view").style.display = "none";
            document.getElementById("drivers-view").style.display = "none";
            document.getElementById("managers-view").style.display = "none";
            document.getElementById("vehicletypes-view").style.display = "none";
            document.getElementById("rides-view").style.display = "none";
            document.getElementById("settings-view").style.display = "none";
            document.getElementById("createM-view").style.display = "block";
        }
    </script>
</body>

</html>