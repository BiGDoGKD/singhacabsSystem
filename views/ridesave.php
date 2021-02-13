<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!isset($_SESSION["C"])) {
    header("Location: ../error.html");
    exit;
}
?>
<html>

<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

        * {
            margin: 0;
        }

        body {
            margin: 0;
            background: linear-gradient(283deg, rgba(255, 175, 27, 1) 20%, rgba(255, 239, 82, 1) 100%);
        }

        .container {
            position: relative;
            height: 100%;
        }

        .error-msg {
            background: rgba(255, 175, 27, 1);
            width: auto;
            border: 5px solid #236b23;
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .error {
            display: block;
            margin: auto;
            font-family: "Poppins", sans-serif;
            text-transform: uppercase;
            font-size: 2em;
            color: #236b23;
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
            cursor: pointer;
            transition: 0.5s;
            margin: 10px 0 0 0;
        }

        @media only screen and (max-width: 600px) {
            .error {
                font-size: 1.5em;
            }

            .error-msg {
                width: 60%;
                height: auto;
            }
        }
    </style>
    <center>
    <div class="container">
        <div class="error-msg">
<?php
if (!empty($_GET["submit"])) {
    $time1 = strtotime($_GET['ride-date']);
    $date = date('Y-m-d', $time1);
    $pickup = $_GET["pickup"];
    $dropoff = $_GET["dropoff"];
    $user_name = $_GET["ride-driver"];
    $customer_name = $_SESSION["C"];
    $pending = 'pending';
    
    
    
include_once 'connection.php';

$sql = "UPDATE `drivers` SET `availability`= 0  WHERE `user_name` = '$user_name'";
$sql2 = "SELECT vehicletype.fee from vehicletype inner join vehicles on vehicles.type = vehicletype.type where vehicles.user_name = '$user_name'";

try
{
    $database = new Connection();
    $db = $database->openConnection();
    $sql1 = "SELECT vehicleNo from vehicles where user_name = '$user_name'";
    foreach ($db->query($sql1) as $row);
    $vehicleNo = $row['vehicleNo'];
    foreach ($db->query($sql2) as $row1);
    $charge = $row1['fee'];
    // inserting data into create table using prepare statement to prevent from sql injections
    $affectedrows  = $db->exec($sql);
    $stm = $db->prepare("INSERT INTO ride (ride_date,charge,pickup,dropoff,user_name,vehicleNo,customer_name,status) VALUES ( :ride_date, :charge, :pickup, :dropoff, :user_name, :vehicleNo, :customer_name, :status)") ;
    // inserting a record
    $stm->execute(array(':ride_date' => $date , ':charge' => $charge, ':pickup' => $pickup , ':dropoff' => $dropoff , ':user_name' => $user_name, ':vehicleNo' => $vehicleNo, ':customer_name' => $customer_name, ':status' => $pending));
    echo "<h1 class='error'>Ride Created Successfully!<br> Wait till the Driver Accept</h1>";
    header( "refresh:2;url=customer.php" );
}
catch (PDOException $e)
{
    echo "There is some problem in connection: " . $e->getMessage();
}
}
?>
    </div>

</div>
   <center> 

</body>

</html>