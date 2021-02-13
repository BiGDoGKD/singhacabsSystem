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

if (isset($_GET["ride_id"])) {
    include("../dbconnection/usercon.php"); 
    require_once("../dbconnection/dbcon.php"); 
    $ride_id = $_GET["ride_id"];
    $query2 = "UPDATE ride set ride.status = 'accepted' where ride_id = $ride_id";
    $result2 = mysqli_query($conString, $query2);
    if (!$result2) {
        $err = mysqli_error($conString);
        print $err;
        exit();
    }
}

include("../dbconnection/usercon.php");
require_once("../dbconnection/dbcon.php");
$query = "SELECT ride.ride_id,users_inf.Fname, users_inf.mobile, ride.ride_date, ride.pickup, ride.dropoff FROM ride inner join users_inf on ride.customer_name = users_inf.user_name where ride.status = 'pending' and ride.user_name = '$driver'";
$result = mysqli_query($conString, $query);

echo "<div>";
echo "<table class='table-show'>\n";

echo "
                    <tr>
                    <th>#</th>
                    <th>Ride ID</th>
                    <th>Customer</th>
                    <th>Mobile</th>
                    <th>Ride Date</th>
                    <th>Pickup Loc.</th>
                    <th>Dropoff Loc.</th>
                    </tr>";

$j = 1;
while ($myrow = mysqli_fetch_row($result)) {
    echo "<tr>";

    echo "<td>" . $j;
    for ($f = 0; $f < mysqli_num_fields($result); $f++) {
        echo "<td>&nbsp;" . htmlspecialchars($myrow[$f]);
    }
    $j = $j + $f / 6;
    echo "<td><button><a onClick='return accept_test()' href='?ride_id=" . urlencode($myrow[0]) . "'>accept</a></button>";
}
echo "</table>\n";
echo "</div>";
?>
<script type="text/javascript" defer>
    function accept_test() {
        return confirm("Confirm:");
    }
</script>