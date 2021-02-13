<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
    body{
        font-family: "Poppins", sans-serif;
    }
    .container{
        display:grid;
        height:100%;
    }
    .header{
       height:100%;
        
        text-align: center;
    }
    .content{
        text-align: center;
        height:100%;
        width: 70%;
        margin: auto;
        padding: 40px;
        color:#444444;
    }
    .footer{
        height: 350px;
    }
    .lion-logo{
        margin: auto;
        margin: 20px 0 0 0 ;
        height:100px;
        width:auto;
    }
    .desc{
        font-size: 1.5em;
    }

    .title{
        font-size: 3em;
    }
</style>

<body>
    <div class="container">
        <div class="header">
            <img class="lion-logo" src="../img/lion.svg" alt="">
        </div>
        <div class="content">
            <h1 class="title">About</h1>
            <p class='desc'>
            Singhacab is an exclusive ‘Transport’ operator since 2015 plying cabs for hire. Singhacab, the best
            choice; make your trip comfortable. Our branded cabs and professional drivers available for hire in
            Pearl of Indian Ocean “Sri Lanka”.</p>
            <p class='desc'>
            We offer quick and easy pick-up, drop, stay relax and forget about queuing for taxis from the airport,
            train stations and ports. We are sure that your trip will be memorable with , Singhacab a reliable
            travel gateway on the Island. The best local transport company for your journey. Our help desk gives
            you 24/7 customer care with on-time support, rely on us for hassle-free service .Our responsibility is to
            ensure that you receive a comfortable, safe and friendly ride to your destinations.</p>
            <p class='desc'>
            Singhacabs continues to maintain its image and reputation as the specialists in online cab
            service in Sri Lanka besides being the leading cab service company in the island as well.</p>
        </div>

        <div class="footer">
            <?php include './footer.php'?>
        </div>
    </div>
</body>

</html>