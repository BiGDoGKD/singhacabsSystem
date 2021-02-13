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
if (isset($_GET["submit"])) {
    include("../dbconnection/usercon.php"); 
    require_once("../dbconnection/dbcon.php"); 
    $ride_id = $_GET["accepted_id"];
    $dist = (int)$_GET["distance"];
    $query2 = "UPDATE ride set ride.status = 'finished', ride.charge = (ride.charge*$dist) where ride_id = $ride_id";
    $query1 = "UPDATE drivers INNER JOIN ride on drivers.user_name = (select ride.user_name where ride_id = $ride_id) set drivers.availability = 1";
    $result2 = mysqli_query($conString, $query1);
    $result2 = mysqli_query($conString, $query2);
    $result1 = mysqli_query($conString, $query1);
    if (!$result2&&$result1) {
        $err = mysqli_error($conString);
        print $err;
        exit();
    }
}

include("../dbconnection/usercon.php");
require_once("../dbconnection/dbcon.php");
$query = "SELECT ride.ride_id,users_inf.Fname, users_inf.mobile, ride.ride_date, ride.pickup, ride.dropoff FROM ride inner join users_inf on ride.customer_name = users_inf.user_name where ride.status = 'accepted' and ride.user_name = '$driver'";
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
                    <th>Distance</th>
                    </tr>";

$j = 1;
while ($myrow = mysqli_fetch_row($result)) {
    echo "<tr>";

    echo "<td>" . $j;
    for ($f = 0; $f < mysqli_num_fields($result); $f++) {
        echo "<td>&nbsp;" . htmlspecialchars($myrow[$f]);
    }
    $j = $j + $f / 6;
    echo "<td><form method='get'><input type='text' name='distance'placeholder='enter distance' required></td>";
    echo "<td><input type='hidden' name='accepted_id' value=" . urlencode($myrow[0]) ."></td>";
    echo "<td><input type='submit' name ='submit' value='finish' onClick='return finish_test()' '></form>";
}
echo "</table>\n";
echo "</div>";
?>
<script type="text/javascript" defer>

    function finish_test() {
        return confirm("Confirm:");
    }
</script>