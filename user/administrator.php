<?php
session_start();
if (!isset($_SESSION["A"])) {
    header("Location: ../error.html");
    exit;
}
echo $_SESSION["A"];
?>
<?php require '../assests/user_header.php' ?>
<center>
    Admin,
    You are successfully logged In.
    <br><br>
    <a href="logout.php?logout">Log Out</a>
</center>
<?php require '../assests/footer.php' ?>