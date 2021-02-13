<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    .driver-card {
        display: flex;
        border: 2px solid #e9a811;
        /* background: #13181d; */
        color: white;
        /* max-width: 450px; */
        height: 60px;
        padding: 10px;
        border-radius: 10px;
        text-align: center;
        cursor: pointer;
        margin: 10px auto;
        max-height: 400px;
    }

    .driver-card:hover {
        animation-name: example;
        animation-duration: 1s;
    }

    .driver-block {
        width: 50%;
        position: relative;
        /* margin: 20px 0 0 0; */
        /* overflow-y: auto; */
        /* height: 90%; */
        padding: 20px 0 20px 0;
        margin: 0 auto 0 auto;
    }

    .driver-detail {
        margin: 0 0 0 10px;
        font-size: 1em;
        color: #acacac;
        font-family: 'Poppins', Sans-serif;
    }

    .input-set {
        /* width: 400px; */
        margin: 0 auto 0 auto;
        padding: 20px 0 20px 0;
    }

    .input-field {
        /* max-width: 500px; */
        width: 350px;
        /* position: relative; */
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
        /* width: 100%; */
    }
</style>

<form action="ridesave.php" method="get" style="
    display: flex;
    flex-direction: row-reverse;
    height: 100%;
    
">

    <div class="input-set">
    <h1 style="color:#acacac;font-size:2em;text-transform: uppercase; font-family: 'Poppins', Sans-serif;">FIND YOUR CAB</h1>
        <div class="input-field">
            <i class="fas fa-compass"></i>
            <input type="date" id="ride-date" name="ride-date" placeholder="Date" value="" required/>
        </div>
        <div class="input-field">
            <i class="fas fa-compass"></i>
            <input type="text" id="pickup" name="pickup" placeholder="Pick Up Location" value="" required />
        </div>
        <div class="input-field">
            <i class="fas fa-compass"></i>
            <input type="text" id="dropoff" name="dropoff" placeholder="Drop Off Location" value="" required />
        </div>
        <input class="btn" type="submit" name="submit" value="BOOK" style="width:100%">
    </div>
    <div class='driver-block'>
        <div style="
    overflow-y: auto;
    height: 100%;
    width: 90%;
">
            <?php
            if (!empty($_GET["submit"])) {
                if (!empty($_GET["radio"])) {
                    $type = $_GET["radio"];

                    include_once 'connection.php';
                    try {

                        $database = new Connection();
                        $db = $database->openConnection();
                        $sql = "SELECT users_inf.user_name, users_inf.Fname,users_inf.mobile,drivers.availability,vehicles.vehicleNo from users_inf INNER JOIN drivers on users_inf.user_name = drivers.user_name inner join vehicles on users_inf.user_name = vehicles.user_name WHERE vehicles.type = '$type' and drivers.availability > 0";

                        foreach ($db->query($sql) as $row) {
                            echo "<label class='radio'>";
                            echo "<div class='driver-card'>";
                            echo " <span class='driver-detail'>Driver: <br>" . $row['Fname'] . "</span>";
                            echo " <span class='driver-detail'>Mobile: <br>" . $row['mobile'] . "</span>";
                            if ($row['availability'] > 0) {
                                echo "<span class='driver-detail'>Availability <br><font color='green'> yes </font></span>";
                            } else {
                                echo "<span class='driver-detail'>Availability <br><font color='red'> no </font></span>";
                            }
                            echo " <span class='driver-detail'>Vehicle No: <br>" . $row['vehicleNo'] . "</span>";
                            echo "</div>";
                            echo "<input type='radio' name='ride-driver' value='" . $row['user_name'] . "'>";
                            echo "</label>";
                        }
                    } catch (PDOException $e) {
                        echo "Drivers Not Available for this option.";
                    }
                }
            }

            ?>
        </div>
    </div>
    
</form>