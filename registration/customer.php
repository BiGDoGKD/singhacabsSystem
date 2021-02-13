<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Registration</title>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style1.css" />
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
    </style>

</head>



<body>
<div class="bg">
</div>
    <div class="content" style="position:absolute;width:100%;">
        <div class="container">
            <div class="box1">

            </div>
            <div class="box2">
                <div class="title-box">
                    <center>
                        <img src="./img/lion.svg" class="lion-logo" alt="">
                        <h1 class="title">Customer Registration</h1>
                    </center>
                </div>
            </div>
            <div class="box3">

            </div>

            <div class="box4">

                <div class="box4-right">
                    <form method="post" action="register.php" class="signin">
                        <div class="box-1">
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" id="username" name="uname" placeholder="Username" value="" onblur="checkAvailability()" minlength="5" required /><span></span>
                            </div>
                            <span id="user-availability-status"></span>

                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="password" name="password" placeholder="Password" value="" minlength="6" required /><span></span>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-signature"></i>
                                <input type="text" name="fName" placeholder="Firstname" value="" required /><span></span>
                            </div>

                            <div class="input-field">
                                <i class="fas fa-id-badge"></i>
                                <input type="text" id="nic" name="nic" placeholder="NIC" value="" onblur="idAvailability()" minlength="10" required /><span></span>
                            </div>
                            <span id="id-availability-status"></span>
                            <div class="input-field date-input-field">
                                <i class="fas fa-birthday-cake"></i>
                                <input type="date" name="DOB" placeholder="Date of Birth" value="" style="padding-right: 25px; margin-top: 0px; color: #808080;" required /><span></span>
                            </div>
                            <div class="input-field">
                                <i class="fas fa-city"></i>
                                <input type="text" name="city" placeholder="City" value="" /><span></span>
                            </div>
                        </div>

                        <!--Mobile View-->
                        <!-- <div class="box-2">
                            <div class="input-field">
                                <i class="fas fa-user"></i>
                                <input type="text" name="uname" placeholder="Username" value="" />
                            </div>

                            <div class="input-field">
                                <i class="fas fa-lock"></i>
                                <input type="text" name="uname" placeholder="Password" value="" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-signature"></i>
                                <input type="text" name="uname" placeholder="Firstname" value="" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-signature"></i>
                                <input type="text" name="uname" placeholder="Lastname" value="" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-id-badge"></i>
                                <input type="text" name="uname" placeholder="NIC" value="" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-birthday-cake"></i>
                                <input type="text" name="uname" placeholder="Date of Birth" value="" />
                            </div>
                            <div class="input-field">
                                <i class="fas fa-city"></i>
                                <input type="text" name="uname" placeholder="City" value="" />
                            </div>
                        </div> -->
                        <!--End of the Mobile View-->
                </div>
            </div>
            <div class="box5">
                <div class="box5-left">
                    <div class="box-1">
                        <div class="input-field">
                            <i class="fas fa-envelope"></i>
                            <input type="email" id="email" name="email" placeholder="Email" onBlur="emailAvailability()" required /><span></span>
                        </div>
                        <span id="email-availability-status"></span>
                        <div class="input-field">
                            <i class="fas fa-lock"></i>
                            <input type="password" name="password_conf" placeholder="Confirm Password" value="" minlength="6" required /><span></span>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-signature"></i>
                            <input type="text" name="lName" placeholder="Lastname" value="" required /><span></span>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-mobile-alt"></i>
                            <input type="text" name="mobile" placeholder="Mobile" value="" minlength="10" maxlength="10" required /><span></span>
                        </div>
                        <div class="input-field">
                            <i class="fas fa-hand-holding-water"></i>
                            <input type="text" name="B-group" placeholder="Blood Group" value="" /><span></span>
                        </div>
                        <div class="input-field select-input-field">
                            <i class="fas fa-map-marker-alt"></i>
                            <select name="state" id="" required>
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
            <div class="box6">

            </div>
            <div class="box7">
                <input type="submit" name="register" class="btn" value="Sign up" />
            </div>
            </form>

            <div class="box8">

            </div>
        </div>
    </div>
    <img class="reg-image" src="./img/registration.svg" alt="" style="position:absolute; left:70%; top:30%; z-index:-1;height:60%;">
    <script src="availability.js" defer type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" defer type="text/javascript"></script>
</body>


</html>