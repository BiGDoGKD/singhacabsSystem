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
            $query = "SELECT * FROM drivers";
            $result = mysqli_query($conString, $query);
            /* Output results as HTML table */
            echo "<div>";
            echo "<table>\n";
            /* Output field names as table header */
            echo "<caption><font >Drivers</font></caption>
                    <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>License No</th>
                    <th>License Expiry Date</th>
                    <th>Availability</th>
                    </tr>";
            /* Output all records */
            $j = 1; 
            while ($myrow = mysqli_fetch_row($result)) {
                echo "<tr>";
                
                echo "<td>".$j;
                for ($f = 0; $f < mysqli_num_fields($result)-1; $f++) {
                    echo "<td>&nbsp;" . htmlspecialchars($myrow[$f]);
                }
                if($myrow[3]>0){
                    echo "<td><span style='color:green;'>yes</span>";
                }else{
                    echo "<td><span style='color:red;'>no</span>";
                }
                $j=$j+$f/3;
            }
            echo "</table>\n";
            echo "</div>";
            ?>