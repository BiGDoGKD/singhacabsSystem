<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!isset($_SESSION["A"])) {
    header("Location: ../error.html");
    exit;
}
?>
<?php

            include("./dbconnection/usercon.php");
            require_once("./dbconnection/dbcon.php");
            // $query = "SELECT user_name, role, email, Fname, Lname, NIC, DOB, BGroup, mobile, city, state FROM users_inf WHERE role = 'D'";
            // $query = "SELECT user_name, NIC, fName, lName, course FROM student_info";
            $query = "SELECT * FROM ride";
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
                    <th>Charge</th>
                    <th>Pickup Location</th>
                    <th>Dropoff Location</th>
                    <th>Username</th>
                    <th>VehicleNo</th>
                    <th>Customer</th>
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
                if($myrow[8]=='finished'){
                    echo "<td><span style='color:green;'>finished</span>";
                }else if($myrow[8] == 'accepted'){
                    echo "<td><span style='color:orange;'>accepted</span>";
                }else if($myrow[8] == 'pending'){
                    echo "<td><span style='color:red;'>pending</span>";
                }else{
                    echo "<td><span style='color:blue;'>unknown</span>";
                }
                $j=$j+$f/8;
            }
            echo "</table>\n";
            echo "</div>";
            ?>