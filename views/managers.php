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
            $query = "SELECT user_name, role, email, Fname, Lname, NIC, DOB, BGroup, mobile, city, state FROM users_inf WHERE role = 'M'";
            // $query = "SELECT user_name, NIC, fName, lName, course FROM student_info";
            $result = mysqli_query($conString, $query);
            /* Output results as HTML table */
            echo "<div>";
            echo "<table>\n";
            /* Output field names as table header */
            echo "<caption><font >Managers</font></caption>
                    <tr>
                    <th>#</th>
                    <th>Username</th>
                    <th>Role</th>
                    <th>Email</th>
                    <th>Fname</th>
                    <th>Lname</th>
                    <th>NIC</th>
                    <th>DOB</th>
                    <th>BGroup</th>
                    <th>Mobile</th>
                    <th>City</th>
                    <th>State</th>
                  
                    </tr>";
            /* Output all records */
            $j = 1; 
            while ($myrow = mysqli_fetch_row($result)) {
                echo "<tr>";
                
                echo "<td>".$j;
                for ($f = 0; $f < mysqli_num_fields($result); $f++) {
                    echo "<td>&nbsp;" . htmlspecialchars($myrow[$f]);
                }
                $j=$j+$f/11;
            }
            echo "</table>\n";
            echo "</div>";
            ?>