<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    body {
        font-family: "Poppins", sans-serif;
    }

    .container {
        display: grid;
        height: 100%;
    }

    .header {
        height: 100%;

        text-align: center;
    }

    .content {
        text-align: center;
        height: 100%;
        width: 70%;
        margin: auto;
        padding: 40px;
        color: #444444;
    }

    .footer {
        height: 350px;
    }

    .lion-logo {
        margin: auto;
        margin: 20px 0 0 0;
        height: 100px;
        width: auto;
    }

    .desc {
        font-size: 1.2em;
    }
    .topic{
        font-size:1.5em;
        font-weight:bold;
    }

    .title {
        font-size: 3em;
    }
</style>

<body>
    <div class="container">
        <div class="header">
            <img class="lion-logo" src="../img/lion.svg" alt="">
        </div>
        <div class="content">
            <h1 class="title"> Frequently Asked Questions: </h1>


            <span class="topic">1. How do I book a cab?</span>
            <p class="desc">You can book using our website. If you have a smart device, then you can book us at any time.</p>
            </p>
            <span class="topic">2. why should we choose Sinha cab?</span>
            <p class="desc">You should because we are the cheapest and fastest taxi service in Sri Lanka. You can book us 24/7. There are so many drivers registered with us today. Therefore you can get a taxi within few seconds.
            </p>
            <span class="topic">3.what are the prices?</span>
            <p class="desc">We have a mid-range price range. If you are new to our system, we give you a 15% discount for your first trip. Other than that there is a premium offers a range for some selected customers who book us more.
            </p>
            <span class="topic">4. what are the vehicles we can book?</span>
            <p class="desc">We have cars and vans. We are trying to introduce new vehicle types in the future.
            </p>
            <span class="topic"> 5. Is this safe?</span>
            <p class="desc">Don't be afraid. We are interviewing every driver. If there was any unnecessary thing during the ride, you can complain at any time. We guarantee your safety.
            </p>
            <span class="topic">6. how can I pay?</span>
            <p class="desc">You can pay for the driver. We're only giving an agent service.
            </p>
            <span class="topic">7. how to update my profile?</span>
            <p class="desc">You can signup for the account and click on your photo. Then your settings menu will popup.
            </p>
        </div>

        <div class="footer">
            <?php include './footer.php' ?>
        </div>
    </div>
</body>

</html>