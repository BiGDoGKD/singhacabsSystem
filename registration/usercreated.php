<html>

<body>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

        * {
            margin: 0;
        }

        body {
            margin: 0;
            background: linear-gradient(283deg, rgba(255, 175, 27, 1) 20%, rgba(255, 239, 82, 1) 100%);
        }

        .container {
            position: relative;
            height: 100%;
        }

        .error-msg {
            background: rgba(255, 175, 27, 1);
            width: auto;
            border: 5px solid #236b23;
            border-radius: 30px;
            padding: 50px;
            box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }

        .error {
            display: block;
            margin: auto;
            font-family: "Poppins", sans-serif;
            text-transform: uppercase;
            font-size: 2em;
            color: #236b23;
        }

        .btn {
            width: 150px;
            background-color: #ffc107;
            border: none;
            outline: none;
            height: 49px;
            border-radius: 49px;
            color: #fff;
            text-transform: uppercase;
            font-weight: 600;
            cursor: pointer;
            transition: 0.5s;
            margin: 10px 0 0 0;
        }

        @media only screen and (max-width: 600px) {
            .error {
                font-size: 1.5em;
            }

            .error-msg {
                width: 60%;
                height: auto;
            }
        }
    </style>
    <center>
    <div class="container">
        <div class="error-msg">
            <h1 class="error">Account created successfully!</h1>
            <input type="submit" onclick="location.href='../index.php'" name="Login" value="Login" class="btn solid" />
        </div>

    </div>
       <center> 
        <?php
        header("Refresh:2; url=../index.php");
        ?>
</body>

</html>