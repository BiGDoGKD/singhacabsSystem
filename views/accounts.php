<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!isset($_SESSION["A"])) {
    header("Location: ../error.html");
    exit;
}
?>
<?php

if (isset($_GET["uname_d"])) {
    include("./dbconnection/usercon.php"); 
    require_once("./dbconnection/dbcon.php"); 
    $user_name = $_GET["uname_d"];
    $query2 = "DELETE  FROM users_inf WHERE user_name = '$user_name'";
    $result2 = mysqli_query($conString, $query2);
    if (!$result2) {
        $err = mysqli_error($conString);
        print $err;
        exit();
    }
    $mess = "<font color='blue'><b>Information has been deleted.</b></font>";
}

include("./dbconnection/usercon.php");
require_once("./dbconnection/dbcon.php");
$query = "SELECT user_name, role, email, Fname, Lname, NIC, DOB, BGroup, mobile, city, state FROM users_inf";
// $query = "SELECT user_name, NIC, fName, lName, course FROM student_info";
$result = mysqli_query($conString, $query);
/* Output results as HTML table */
echo "<div>";
echo "<table class='table-show'>\n";
/* Output field names as table header */
echo "<caption><font>User Accounts</font></caption>
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
                    <th>edit</th>
                    <th>delete</th>
                    </tr>";
/* Output all records */
$j = 1;
while ($myrow = mysqli_fetch_row($result)) {
    echo "<tr>";

    echo "<td>" . $j;
    for ($f = 0; $f < mysqli_num_fields($result); $f++) {
        echo "<td>&nbsp;" . htmlspecialchars($myrow[$f]);
    }
    $j = $j + $f / 11;
    echo "<td><a target='_blank' href='./editcurrentuser.php?username=" . urlencode($myrow[0]) . "'>edit</a>";
    echo "<td><a onClick='return delete_test()' href='?uname_d=" . urlencode($myrow[0]) . "'>delete</a>";
}
echo "</table>\n";
echo "</div>";
?>
<script type="text/javascript" defer>
    function delete_test() {
        return confirm("Do you want to delete these information");
    }
</script>