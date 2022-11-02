<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üyelere Özel Sayfa</title>

</head>

<style>
        body {

            margin: 0;
            padding: 0;
            width: 77%;
            margin: auto;
            font-family: "Fuzzy Bubbles", cursive;
            font-size: 20px;
            line-height: 45px;
            background-color: cadetblue;
        }

        #kayanbuton {

            color: rebeccapurple;
            border-radius: 5px;
            cursor: pointer;
        }

        #kayanbuton:hover {

            background-color: brown;
            color: wheat;
        }

        h1 {
            
            text-align: center;
        }

        h2 {

            text-align: center;
            color: wheat;

        }
    </style>

<?php

if(!isset($_COOKIE['kullanici']) and !isset($_COOKIE['parola'])){


    exit("<h1>Burayı Sadece Üyeler Görebilir.</h1>");
}

if (isset($_POST['cikis'])) {

    echo "<h2>Çıkış Yapıldı, 3 Saniye İçerisinde Anasayfa'ya Yönlendirileceksiniz...</h2>";
    @setcookie("parola", "",time() - 50);
    @setcookie("kullaniciadi","",time() - 50);
    header("refresh: 3; url = index.php");
    
}


?>


<body>


    <marquee scrollamount="10" width="100%" direction="left">

        <form action="" method="POST">

            <input button type="submit" name="cikis" value="Çıkış" id="kayanbuton">

        </form>

    </marquee>


    <marquee scrollamount="10" direction="right">

        <h2>Admine Özel Sayfa</h2>

    </marquee>


    <hr>

    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quod illum laudantium nesciunt dolorum,
        earum quasi iure totam officia explicabo dolores possimus. Esse perspiciatis deserunt beatae, pariatur dolor itaque nulla.
        Quaerat dicta excepturi, quibusdam placeat, molestiae cumque magni eaque adipisci quisquam ex assumenda explicabo quis in impedit ipsam reiciendis unde exercitationem suscipit officia nulla sint aliquid quasi! Temporibus, illo laborum doloremque, sit suscipit consequuntur aut eius sed exercitationem eos veritatis voluptatibus nam fugit, velit maxime id quidem. Accusantium ipsum sunt expedita quisquam nobis aspernatur? Esse, aspernatur dignissimos omnis natus,
        illo quisquam id molestias iure doloremque iusto nesciunt minus nemo temporibus magnam? Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita accusantium est voluptates quibusdam repellat nobis illo non enim rerum ea rem quam sint animi harum debitis quae alias porro, error ipsum! Ipsam, corrupti repellendus velit cum fugit ullam beatae at incidunt perspiciatis, excepturi expedita corporis laudantium amet impedit tempore dolorem magnam atque ab alias recusandae qui nisi?</p>



</body>

</html>


<?php


?>