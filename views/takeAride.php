<?php
error_reporting(E_ALL & ~E_NOTICE);
session_start();
if (!isset($_SESSION["C"])) {
    header("Location: ../error.html");
    exit;
}
?>
<script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    .input-field input {
        width: 100%;
        outline: none;
        line-height: 1;
        font-weight: 600;
        font-size: 1.1rem;
        color: #333;
        background-color: #eee;
        margin: 8px 0;
        height: 45px;
        border: 0px;
        border-radius: 55px;
        position: relative;
        padding: 0 0 0 60px;
    }

    .input-field i {
        text-align: center;
        line-height: 55px;
        color: #acacac;
        transition: 0.5s;
        font-size: 1.1rem;
        position: absolute;
        left: 10px;
        top: 47%;
        transform: translateY(-50%);
        z-index: 1;
        margin-left: 15px;
        margin-top: -6px;
    }

    .input-field {
        max-width: 500px;
        width: 100%;
        position: relative;
    }


    .ride-content {
        display: flex;
        /* grid-template-columns: 1fr 1fr; */
        text-align: center;
        width: 90%;
        background: #13181d;
        border-radius: 45px;
        padding: 10px 40px 10px 40px;
        margin: auto;
        height: 400px;
    }

    .ride-right {
        /* background: #eee; */
        border-radius: 45px;
        /* max-height: 450px; */
        width: 70%;
    }

    .form-image {
        height: 60px;
        margin: 0 0 0 30px;
    }

    .cartypes {
        display: grid;
        grid-template-columns: 1fr 1fr;
        width: 70%;
        margin: auto;
    }

    .input-set {
        width: 500px;
        margin: auto;
    }

    .fare-box {
        display: grid;
        text-align: center;
        width: 130px;
        margin: 0 0 0 20px;
        padding: 5px;
    }

    .cab-type {
        color: #acacac;
        margin: -10px 0 0 0;
    }

    .radio {
        display: block;
        position: relative;
        cursor: pointer;
        font-size: 18px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }


    .radio input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    .radio:hover .fare-box {
        border: 1px solid #acacac;
    }

    .btn {
        width: 100%;
        background-color: #ffc107;
        border: none;
        outline: none;
        height: 49px;
        border-radius: 49px;
        color: #fff;
        text-transform: uppercase;
        font-weight: 600;
        margin: 10px 0 0 0;
        cursor: pointer;
        transition: 0.5s;
    }

    .btn:hover {
        background-color: #ffc107;
    }
</style>

<div class="ride-content">

    <div class="ride-left" style="
    width: 30%;
    margin: 0 auto 0 auto;
    padding: 20px;
">
       
        <form action="" method="get">
            <!-- <div class="input-set">
                <div class="input-field">
                    <i class="fas fa-compass"></i>
                    <input type="text" id="pickup" name="pickup" placeholder="Date" value=""  />
                </div>
                <div class="input-field">
                    <i class="fas fa-compass"></i>
                    <input type="text" id="pickup" name="pickup" placeholder="Pick Up Location" value=""  />
                </div>
                <div class="input-field">
                    <i class="fas fa-compass"></i>
                    <input type="text" id="dropoff" name="dropoff" placeholder="Drop Off Location" value=""  />
                </div>
            </div> -->

            <br>
            <div class="cartypes">
                <label class="radio">
                    <div class="fare-box" id="box1"> <img class="form-image" src="./img/micro.svg" alt=""> <span class="cab-type">Micro<br>LKR 60.00 per KM</span></div>
                    <input type="radio" checked="checked" name="radio" value="micro" onclick="border(1)">
                </label>
                <label class="radio">
                    <div class="fare-box" id="box2"> <img class="form-image" src="./img/sedan.svg" alt=""><span class="cab-type">Sedan<br>LKR 80.00 per KM</span></div>
                    <input type="radio" name="radio" value="sedan" onclick="border(2)">
                </label>
                <label class="radio">
                    <div class="fare-box" id="box3"> <img class="form-image" src="./img/cuv.svg" alt=""><span class="cab-type">CUV<br>LKR 100.00 per KM</span></div>
                    <input type="radio" name="radio" value="cuv" onclick="border(3)">
                </label>
                <label class="radio">
                    <div class="fare-box" id="box4"> <img class="form-image" src="./img/van.svg" alt=""><span class="cab-type">VAN<br>LKR 150.00 per KM</span></div>
                    <input type="radio" name="radio" value="van" onclick="border(4)">
                </label>
            </div>
            <input class="btn" type="submit" name="submit" value="Search" style="width:70%; margin: 8% 0 0 0">
        </form>
    </div>
    <div class="ride-right">
        <?php include 'drivercards.php' ?>
    </div>

</div>
<script defer>
    function border(x) {
        if (x == 1) {
            document.getElementById('box1').style.border = "1px solid #acacac";
            document.getElementById('box2').style.border = "0px solid #acacac";
            document.getElementById('box3').style.border = "0px solid #acacac";
            document.getElementById('box4').style.border = "0px solid #acacac";
        } else if (x == 2) {
            document.getElementById('box1').style.border = "0px solid #acacac";
            document.getElementById('box2').style.border = "1px solid #acacac";
            document.getElementById('box3').style.border = "0px solid #acacac";
            document.getElementById('box4').style.border = "0px solid #acacac";
        } else if (x == 3) {
            document.getElementById('box1').style.border = "0px solid #acacac";
            document.getElementById('box2').style.border = "0px solid #acacac";
            document.getElementById('box3').style.border = "1px solid #acacac";
            document.getElementById('box4').style.border = "0px solid #acacac";
        } else if (x == 4) {
            document.getElementById('box1').style.border = "0px solid #acacac";
            document.getElementById('box2').style.border = "0px solid #acacac";
            document.getElementById('box3').style.border = "0px solid #acacac";
            document.getElementById('box4').style.border = "1px solid #acacac";
        }
    }
</script>
