<?php require './assests/header.php' ?>
<div class="container">
    <div class="forms-container">

        <div class="signin-signup">
            <form action="#" class="sign-in-form">
                <div class="help-form">
                    <img src="./img/lion.svg" alt="" style="width:300px; margin-bottom:20px;" class="singha-logo">
                    <h2 class="title">Singha cabs system</h2>
                    <div class="video-container" style="height: 360px;width: 640px;">
                        <video controls autoplay loop width="640px" height="360px">
                            <source src="./video/singha.mp4"  type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            </form>

            <form action="#" class="sign-up-form">
                <style>
                    .title-heading {
                        font-size: 1.2em;
                        font-weight: bold;
                        text-align: left;
                    }

                    .faq {
                        text-align: left;
                    }
                </style>
                <div class="help-form">
                    <div class="faq">
                        <h2 class="title">What is Sinha cab:</h2>
                        <p class="description">
                            Sinha cab is an online cab service system powered by group17.
                            Not like other services, we can pick you everywhere and drop you anywhere.</p><br />
                        <span class="title-heading">1. How do I book a cab? </span>
                        <p class="description">
                            You can book using our website. If you have a smart device, then you can book us at any time.</p>


                        <span class="title-heading">
                            2. why should we choose Sinha cab? </span>
                        <p class="description">
                            You should because we are the cheapest and fastest taxi service in Sri Lanka. You can book us 24/7. There are so many drivers registered with us today. Therefore you can get a taxi within few seconds.
                        </p>
                        <span class="title-heading">
                            3.what are the prices? </span>
                        <p class="description">
                            We have a mid-range price range. If you are new to our system, we give you a 15% discount for your first trip.
                            Other than that there is a premium offers a range for some selected customers who book us more.
                        </p>
                        <span class="title-heading">
                            4. what are the vehicles we can book? </span>
                        <p class="description">
                            We have cars and vans. We are trying to introduce new vehicle types in the future.
                        </p>
                        <span class="title-heading">
                            5. Is this safe? </span>
                        <p class="description">
                            Don't be afraid. We are interviewing every driver.
                            If there was any unnecessary thing during the ride, you can complain at any time. We guarantee your safety.
                        </p>
                        <span class="title-heading">
                            6. how can I pay? </span>
                        <p class="description">
                            You can pay for the driver. We're only giving an agent service.
                        </p>
                        <span class="title-heading">
                            7. how to update my profile? </span>
                        <p class="description">
                            You can signup for the account and click on your photo. Then your settings menu will popup.
                        </p>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="panels-container">
        <div class="panel left-panel">
            <div class="content">
                <h3>HELP</h3>
                <p>
                    HAVE A QUESTION?
                </p>
                <button class="btn transparent" id="sign-up-btn" style="width: 300px !important;">
                    Frequently Asked Questions
                </button>
                <a href="index.php">
                    <button class="btn transparent" id="" style="margin-left:4px;">
                        Sign in
                    </button>
                </a>
            </div>
            <img src="img/help.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
            <div class="content">
                <h3>NOW YOU CAN START RIDING</h3>
                <p>
                    START YOUR TOUR NOW
                </p>
                <button class="btn transparent" id="sign-in-btn">
                    Go back
                </button>
                <a href="index.php">
                    <button class="btn transparent" id="sign-in-btn">
                        Get start
                    </button>
                </a>
            </div>
            <img src="img/faq.svg" class="image" alt="" />
        </div>
    </div>
</div>

<?php require './assests/footer.php' ?>