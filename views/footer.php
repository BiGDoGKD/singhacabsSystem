<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");

    .footer-menu {
        height: 100%;
    }

    .top {
        display: grid;
        grid-template-columns: 1fr 1fr;
        background: #13181d;
        height: 60%;
        /* padding: 20px 0 20px 0; */
    }

    .left {
        margin: auto;
    }

    .right {
        margin: auto;
    }

    .bottom {
        display: grid;
        grid-template-columns: 1fr 1fr 1fr;
        background: #0e151b;
        height: 40%;
    }

    .footer-menu-text {
        font-size: 1em;
        font-family: "Poppins", sans-serif;
    }

    .footer-menu-link {

        font-size: 1em;
        text-decoration: none;
        font-family: "Poppins", sans-serif;
    }

    .footer-menu-link:hover {
        color: #e9a811;
        font-size: 1em;
        text-decoration: none;
    }

    .footer-menu-item {
        margin: 3px 0 0 0;
    }

    .footer-menu-item1 {
        margin: 5px 0 0 0;
    }

    .dark-white {
        color: #6f7274;
    }

    .white {
        color: white;
    }

    .orange {
        color: #e9a811;
    }

    .socialMedia {
        display: flex;
        float: left;
    }

    .social-icon {
        height: 30px;
        width: auto;
        margin: 0 0 0 10px;
        z-index: 1;
    }

    .box2 {
        justify-self: center;
        padding: 40px 0 0 0;
    }

    .box1 {
        justify-self: center;
        padding: 30px 0 0 0;
    }
    .box3 {
        padding: 15px 0 0 20px;
    }

    .social-item {
        margin: 0 0 0 30px;
    }
</style>
<div class="footer-menu">
    <div class="top">
        <div class="left">
            <div class="footer-menu-item"><span class="footer-menu-text white">ABOUT</span></div>
            <div class="footer-menu-item"><a href="./about.php" target="_blank" class="footer-menu-link dark-white">About Singha</a></div>
            <div class="footer-menu-item"><a href="./faq.php" target="_blank" class="footer-menu-link dark-white">Frequently Asked Questions</a></div>
            <div class="footer-menu-item"><a href="../registration/driver.php" target="_blank" class="footer-menu-link dark-white">Become a Singha Driver</a></div>
            <div class="footer-menu-item"><a href="" target="_blank" class="footer-menu-link dark-white">Contact Us</a></div>
        </div>
        <div class="right">
            <div class="footer-menu-item"><span class="footer-menu-text white">ADDRESS</span></div>
            <div class="footer-menu-item"><span class="footer-menu-text dark-white">UCSC Building Complex,</span></div>
            <div class="footer-menu-item"><span class="footer-menu-text dark-white">35 Reid Ave,</span></div>
            <div class="footer-menu-item"><span class="footer-menu-text dark-white"> Colombo 00700</span></div>
        </div>

    </div>
    <div class="bottom">
        <div class="box1">
            <img src="./img/lion.svg" alt="" style="width: 100px;">
        </div>
        <div class="box2">
            <div class="socialMedia">
                <div class="social-item"><a href="https://www.facebook.com/" target="_blank"> <img src="./icons/fb.svg" class="social-icon" alt=""> </a></div>
                <div class="social-item"><a href="https://www.instagram.com/" target="_blank"> <img src="./icons/insta.svg" class="social-icon" alt=""> </a></div>
                <div class="social-item"><a href="https://www.twitter.com/" target="_blank"><img src="./icons/twitter.svg" class="social-icon" alt=""> </a></div>
                <div class="social-item"><a href="https://wa.me/+94779897506" target="_blank"><img src="./icons/whtsp.svg" class="social-icon" alt=""> </a></div>
            </div>
        </div>
        <div class="box3">
            <div class="footer-menu-item1"><span class="footer-menu-text dark-white">HOT LINE</span><span class="footer-menu-text orange"> 8888</span></div>
            <div class="footer-menu-item1"><span class="footer-menu-text dark-white">EMAIL</span><span class="footer-menu-text orange"> contact@singha.tk</span></div>
            <div class="footer-menu-item1"><span class="footer-menu-text dark-white">PHONE</span><span class="footer-menu-text orange"> +94 778 813 384</span></div>
        </div>
    </div>
</div>