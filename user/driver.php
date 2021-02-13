<?php
session_start();
if (!isset($_SESSION["D"])) {
    header("Location: ../error.html");
    exit;
}
?>
<?php require '../assests/user_header.php' ?>
<center>
    <div class="container">
        Driver, <?php
                    echo $_SESSION["D"];
                    ?>
        You are successfully logged In.
        <br><br>
        <a href="logout.php?logout">Log Out</a>
    </div>
</center>
<?php require '../assests/footer.php' ?>