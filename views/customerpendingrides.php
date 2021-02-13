<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!isset($_SESSION["C"])) {
    header("Location: ../error.html");
    exit;
}
?>
<?php
            $customer_name = $_SESSION["C"];

            include("./dbconnection/usercon.php");
            require_once("./dbconnection/dbcon.php");
            // $query = "SELECT user_name, role, email, Fname, Lname, NIC, DOB, BGroup, mobile, city, state FROM users_inf WHERE role = 'D'";
            // $query = "SELECT user_name, NIC, fName, lName, course FROM student_info";
            $query = "SELECT ride_id, ride_date, pickup, dropoff, users_inf.Fname, vehicleNo, status FROM ride inner join users_inf on ride.user_name = users_inf.user_name where ride.customer_name = '$customer_name'";
            $result = mysqli_query($conString, $query);
            /* Output results as HTML table */
            echo "<div>";
            echo "<table>\n";
            /* Output field names as table header */
            echo "<caption><font >Ride Details</font></caption>
                    <tr>
                    <th>#</th>
                    <th>Ride ID</th>
                    <th>Ride Date</th>
                    <th>Pickup Location</th>
                    <th>Dropoff Location</th>
                    <th>Driver</th>
                    <th>VehicleNo</th>
                    <th>Status</th>
                    </tr>";
            /* Output all records */
            $j = 1; 
            while ($myrow = mysqli_fetch_row($result)) {
                echo "<tr>";
                
                echo "<td>".$j;
                for ($f = 0; $f < mysqli_num_fields($result)-1; $f++) {
                    echo "<td>&nbsp;" . htmlspecialchars($myrow[$f]);
                }
                if($myrow[6]=='finished'){
                    echo "<td><span style='color:green;'>finished</span>";
                }else if($myrow[6] == 'accepted'){
                    echo "<td><span style='color:orange;'>accepted</span>";
                }else if($myrow[6] == 'pending'){
                    echo "<td><span style='color:red;'>pending</span>";
                }else{
                    echo "<td><span style='color:blue;'>unknown</span>";
                }
                $j=$j+$f/6;
            }
            echo "</table>\n";
            echo "</div>";
            ?>