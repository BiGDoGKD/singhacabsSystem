<?php
session_start();
$mess = "";
?>

<?php require './assests/header.php' ?>

<script src="https://code.jquery.com/jquery-2.1.1.min.js" defer type="text/javascript"></script>
<script defer>
  function checkAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
      url: "check_availability.php",
      data: 'username=' + $("#username").val(),
      type: "POST",
      success: function(data) {
        $("#user-availability-status").html(data);
        $("#loaderIcon").hide();
      },
      error: function() {}
    });
  }

  function emailAvailability() {
    $("#loaderIcon").show();
    jQuery.ajax({
      url: "email_availability.php",
      data: 'email=' + $("#email").val(),
      type: "POST",
      success: function(data) {
        $("#email-availability-status").html(data);
        $("#loaderIcon").hide();
      },
      error: function() {}
    });
  }
</script>

<div class="container">

  <div class="forms-container">

    <div class="signin-signup">
      <form name="signin" method="post" action="./assests/login.php" class="sign-in-form">
        <img src="./img/lion.svg" alt="" style="width:300px; margin-bottom:20px;">
        <h2 class="title">Sign in</h2>

        <?php
        echo $mess;
        ?>
        <?php
        if (@$_GET['empty'] == true) {
        ?>
          <style>
            .input-field {
              border: 1px solid red;
            }
          </style>
        <?php
        }
        ?>
        <?php
        if (@$_GET['invalid'] == true) {
        ?>
          <div class="input-field">
          </div>
        <?php
        }
        ?>

        <div class="input-field">
          <i class="fas fa-user"></i>
          <input type="text" name="uname" placeholder="Username" value="" />
        </div>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Password" value="" />
        </div>
        <input type="submit" name="Login" value="Login" class="btn solid" />

        <p class="social-text">Not have an account? <span id="anchor" style="color:blue;cursor:pointer;">register</span></p>
      </form>
      <style>
        .user-card-2 {
          border: 1px solid #eee;
          height: 250px;
          width: 200px;
          padding: 40px 10px 10px 10px;
          margin: 10px;
          border-radius: 30px;
          background: #dcdcdc;
          cursor: pointer;
        }


        .user-img {
          height: 100px;
          width: auto;
          display: block;
          margin: auto;
        }

        .user-card-2 h3 {
          font-size: 1.5em;
          color: #acacac;
          margin: 20px 0 0 0;
        }
      </style>
      <form action="" class="sign-up-form">
        <img src="./img/lion.svg" alt="" style="width:200px; margin-bottom:20px;">
        <h2 class="title">Join with us today</h2>
        <div class="user-card" style="display: flex;">
        <a href="./registration/customer.php" style="text-decoration:none;">
          <div class="user-card-2">
            <img src="./img/user.svg" alt="" class="user-img">
            <center>
              <h3>CUSTOMER</h3>
            </center>

          </div>
          </a>
          <a href="./registration/driver.php" style="text-decoration:none;">
          <div class="user-card-2">
            <img src="./img/user.svg" alt="" class="user-img">
            <center>
              <h3>DRIVER</h3>
            </center>
          </div>
      </a>
        </div>
      </form>
      <!-- <form method="post" action="" id="register_form" class="sign-up-form">
        <img src="./img/lion.svg" alt="" style="width:200px; margin-bottom:20px;">
        <h2 class="title">Sign up</h2>
        <div class="input-field select-input-field">
          <i class="fas fa-user"></i>
          <select name="user" id="">
            <option value="manager">Member</option>
            <option value="receptionist">Driver</option>
          </select>
        </div>
        <div class="input-field">
          <i class="fas fa-user"></i>
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
          <input type="text" id="username" name="username" placeholder="Username" onBlur="checkAvailability()" />
        </div>
        <span id="user-availability-status"></span>

        <div class="input-field">
          <i class="fas fa-envelope"></i>
          <input type="email" id="email" name="email" placeholder="Email" onBlur="emailAvailability()" />
        </div>
        <span id="email-availability-status"></span>
        <div class="input-field">
          <i class="fas fa-lock"></i>
          <input type="password" name="password" placeholder="Password" />
        </div>
        <input type="submit" name="register" class="btn" value="Next" />
      </form> -->


    </div>
  </div>

  <div class="panels-container">
    <div class="panel left-panel">
      <div class="content">
        <h3>BECOME A SINGHA MEMBER/DRIVER</h3>
        <p>
          WE WILL TAKE YOU WHEREEVER YOU NEED,
          CONNECT WITH US TODAY
        </p>
        <button class="btn transparent" id="sign-up-btn">
          Sign up
        </button>
        <a href="help.php">
          <button class="btn transparent" style="margin-left:4px;">
            Need help?
          </button>
        </a>
      </div>
      <img src="img/town.svg" class="image" alt="" />
    </div>
    <div class="panel right-panel">
      <div class="content">
        <h3>ALREADY A MEMBER?</h3>
        <p>
          SIGN IN AND START RIDING.
        </p>
        <button class="btn transparent" id="sign-in-btn">
          Sign in
        </button>
      </div>
      <img src="img/citydriver.svg" class="image" alt="" />
    </div>
  </div>
  
  <?php require './assests/footer.php' ?>