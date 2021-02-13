<?php
session_start();
if (!isset($_SESSION["C"])) {
    header("Location: ../error.html");
    exit;
}

?>
<?php require '../assests/user_header.php' ?>
<center>
    <div class="container">
    Customer, <?php
    echo $_SESSION["C"];
    ?>
    You are successfully logged In.
    <br><br>
    <a href="logout.php?logout">Log Out</a>
    </div>
</center>
<?php require '../assests/footer.php' ?>