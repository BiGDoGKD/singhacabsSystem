<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!isset($_SESSION["A"])) {
    header("Location: ../error.html");
    exit;
}
$uname = $_SESSION["A"];
?>
<html lang="en">
<style>
    .status-available {
        color: #2FC332;
        font-size: 0.85rem;
        display: block;
        margin: -5px 0 5px 0;

    }

    .status-not-available {
        color: #D60202;
        font-size: 0.85rem;
        display: block;
        margin: -5px 0 5px 0;

    }
</style>
<style>
    input+span {
        position: relative;
    }

    input+span::before {
        position: absolute;
        right: -20px;
        top: 5px;
    }

    /* input:valid{
            border: 2px solid green;
        } */

    input:invalid+span::before {
        content: '✖';
        color: red;
    }

    input:valid+span::before {
        content: '✓';
        color: green;
    }

    .container-m {
        display: grid;
        margin: auto;
        padding: 20px;
        width: 60%;
        box-shadow: 0 2px 15px rgba(64, 64, 64, .4);
        background:rgba(230,230,230,0.75);
        border-radius: 30px;
        grid-template-columns: 1fr 1fr;
        grid-column-gap: 70px;
    }

    .box4 {
        justify-self: end;
    }

    .box7 {
        justify-self: center;
        grid-column: 1/3;
    }
</style>

<h2 style="color: #6f7274;
    font-size: 2em;
    margin: 0 0 20px 38%;
    font-family: 'Open Sans', Sans-serif;
    text-transform: uppercase;">Create Manager Account</h2>
<div class="container-m">

    <div class="box4">

        <div class="box4-right">
            <form method="post" action="mregister.php" class="signin">
                <div class="box-1">
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input style="width: 400px;" type="text" id="username" name="uname" placeholder="Username" value="" onblur="checkAvailability()" minlength="5" required /><span></span>
                    </div>
                    <span id="user-availability-status"></span>

                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input style="width: 400px;" type="password" name="password" placeholder="Password" value="" minlength="6" required /><span></span>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-signature"></i>
                        <input style="width: 400px;" type="text" name="fName" placeholder="Firstname" value="" required /><span></span>
                    </div>

                    <div class="input-field">
                        <i class="fas fa-id-badge"></i>
                        <input style="width: 400px;" type="text" id="nic" name="nic" placeholder="NIC" value="" onblur="idAvailability()" minlength="10" required /><span></span>
                    </div>
                    <span id="id-availability-status"></span>
                    <div class="input-field date-input-field">
                        <i class="fas fa-birthday-cake"></i>
                        <input style="width: 400px;" type="date" name="DOB" placeholder="Date of Birth" value="" style="padding-right: 25px; margin-top: 0px; color: #808080;" required /><span></span>
                    </div>
                    <div class="input-field">
                        <i class="fas fa-city"></i>
                        <input style="width: 400px;" type="text" name="city" placeholder="City" value="" /><span></span>
                    </div>
                </div>
        </div>
    </div>
    <div class="box5">
        <div class="box5-left">
            <div class="box-1">
                <div class="input-field">
                    <i class="fas fa-envelope"></i>
                    <input style="width: 400px;" type="email" id="email" name="email" placeholder="Email" onBlur="emailAvailability()" required /><span></span>
                </div>
                <span id="email-availability-status"></span>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input style="width: 400px;" type="password" name="password_conf" placeholder="Confirm Password" value="" minlength="6" required /><span></span>
                </div>
                <div class="input-field">
                    <i class="fas fa-signature"></i>
                    <input style="width: 400px;" type="text" name="lName" placeholder="Lastname" value="" required /><span></span>
                </div>
                <div class="input-field">
                    <i class="fas fa-mobile-alt"></i>
                    <input style="width: 400px;" type="text" name="mobile" placeholder="Mobile" value="" minlength="10" maxlength="10" required /><span></span>
                </div>
                <div class="input-field">
                    <i class="fas fa-hand-holding-water"></i>
                    <input style="width: 400px;" type="text" name="B-group" placeholder="Blood Group" value="" /><span></span>
                </div>
                <div style="width: 341px;height: 46px;margin: 16px 0 0 0;" class="input-field select-input-field">
                    <i class="fas fa-map-marker-alt"></i>
                    <select style="width: 330px;" name="state" id="" required>
                        <option value="not-selected">State</option>
                        <option value="Ampara">Ampara</option>
                        <option value="Anuradhapura">Anuradhapura</option>
                        <option value="Badulla">Badulla</option>
                        <option value="Batticaloa">Batticaloa</option>
                        <option value="Colombo">Colombo</option>
                        <option value="Galle">Galle</option>
                        <option value="Gampaha">Gampaha</option>
                        <option value="Hambantota">Hambantota</option>
                        <option value="Kalutara">Kalutara</option>
                        <option value="Kandy">Kandy</option>
                        <option value="Kegalle">Kegalle</option>
                        <option value="Kilinochchi">Kilinochchi</option>
                        <option value="Kurunegala">Kurunegala</option>
                        <option value="Mannar">Mannar</option>
                        <option value="Matale">Matale</option>
                        <option value="Matara">Matara</option>
                        <option value="Moneragala">Moneragala</option>
                        <option value="Mullaitivu">Mullaitivu</option>
                        <option value="Nuwara Eliya">Nuwara Eliya</option>
                        <option value="Polonnaruwa">Polonnaruwa</option>
                        <option value="Puttalam">Puttalam</option>
                        <option value="Ratnapura">Ratnapura</option>
                        <option value="Trincomalee">Trincomalee</option>
                        <option value="Vavuniya">Vavuniya</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <div class="box7">
        <input type="submit" name="register" class="btn" style="
    background: #eb9903;" value="Sign up" />
    </div>
    </form>
</div>
<script src="availability.js" defer type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" defer type="text/javascript"></script>