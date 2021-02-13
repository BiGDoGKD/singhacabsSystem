<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="./css/loader.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <style>

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            /* background-image: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%); */
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            min-height: 100vh;
        }

        .main {
            text-align: center;
            width: 90%;
            opacity: 0;
            display: none;
            transition: opacity 1s ease-in;
        }

        .btn:hover {
            opacity: 0.9;
        }

        /* LOADER  */
        .loader {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .loader>span {
            display: inline-block;
            background-color: #ffc107;
            width: 0px;
            height: 0px;
            border-radius: 50%;
            margin: 0 8px;
            transform: translate3d(0);
            animation: bounce 0.6s infinite alternate;
        }

        .loader>span:nth-child(3) {
            background-color: rgb(155, 114, 10);
            animation-delay: 0.2s;
        }

        .loader>span:nth-child(4) {
            animation-delay: 0.4s;
        }

        @keyframes bounce {
            to {
                width: 16px;
                height: 16px;
                transform: translate3d(0, -16px, 0);
            }
        }
    </style>
    <div class="loader">
    <img src="./img/lion.svg" alt="" style="width:200px; margin-bottom:20px;">
        <span></span>
        <span></span>
        <span></span>
    </div>