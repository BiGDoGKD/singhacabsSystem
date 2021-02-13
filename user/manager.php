<?php
session_start();
if (!isset($_SESSION["M"])) {
    header("Location: ../error.html");
    exit;
}
echo $_SESSION["M"];
?>
<?php require '../assests/user_header.php' ?>
<center>
    Manager,
    You are successfully logged In.
    <br><br>
    <a href="logout.php?logout">Log Out</a>
</center>
<?php require '../assests/footer.php' ?>