<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anasayfa</title>
</head>

<style>
    * {
        margin: 0;
        padding: 0;
    }

    body {

        width: 77%;
        margin: auto;
        margin-top: 5%;
        font-family: "Fuzzy Bubbles", cursive;
        font-size: 20px;
        line-height: 45px;
        color: wheat;
        background-color: slategray;
    }

    h1 {

        text-align: center;
    }

    #giris {

        position: absolute;
        position: fixed;
        left: 0;
        top: 0;
        right: 90%;
        background-color: black;
        opacity: 0.7;
    }

    #admin{

        position: absolute;
        position: fixed;
        right: 45%;
        top: 0;
        left: 42%;
        background-color: black;
        opacity: 0.7;
    }

    #admin ul li{

        display: inline;
        margin: 13%;
    }

    #admin ul li a{

        color: antiquewhite;
        text-decoration: none;
    }

    #admin a:hover{

        color: tomato;
        transition: 0.5s;
    }

    #giris ul li {

        display: inline;
        margin: 13%;
    }

    #giris ul li a {

        color: antiquewhite;
        text-decoration: none;
    }

    #giris a:hover {

        color: tomato;
        transition: 0.5s;
    }

    #herkeseacik {

        position: absolute;
        position: fixed;
        right: 0;
        top: 0;
        left: 90%;
        background-color: black;
        opacity: 0.7;
    }

    #herkeseacik ul li {

        display: inline;
        margin: 13%;
    }

    #herkeseacik ul li a {

        color: antiquewhite;
        text-decoration: none;
    }

    #herkeseacik a:hover {

        color: tomato;
        transition: 0.5s;
    }

<?php

if(isset($_COOKIE['kullaniciadi']) && isset($_COOKIE['sifre'])){

        echo "<style>

        #giris{
    
            visibility:hidden;
        }
        
        </style>";

}


?>


</style>


<body>

    <nav id="giris">

        <ul>
            <li><a href="giris.php">Giriş Yap</a></li>
        </ul>

    </nav>

  <nav id="admin">

        <ul>

            <li>
                <a href="adminsayfa.php">Admin Özel</a>
            </li>
        </ul>

    </nav> 

    <nav id="herkeseacik">

        <ul>

            <li>
                <a href="misafir.php">Misafir</a>
            </li>
        </ul>

    </nav>



    <marquee scrollamount="10" direction="right">

        <h2>Anasayfa</h2>

    </marquee>


    <br>
    <hr>
    <br>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
        A ipsa nobis in temporibus ea animi doloribus, aperiam repellendus saepe excepturi nemo aliquam consectetur velit quos ad nulla fuga natus explicabo repellat sint expedita?
        Distinctio tenetur expedita ea fuga architecto delectus enim et suscipit exercitationem quam voluptas molestias, vero sequi voluptatum impedit soluta totam quidem animi? Explicabo possimus repellendus dolorem amet quis ratione pariatur dolor quisquam repellat exercitationem molestiae soluta, iusto fugiat id voluptates nobis est tempore autem facere doloribus deleniti nam? Totam quas dicta dolorum, assumenda fugiat modi expedita obcaecati reprehenderit libero tenetur earum rem deserunt saepe hic quo soluta quibusdam esse corrupti laborum possimus quod eligendi. Laborum praesentium ab cum, error nam veritatis qui quidem nesciunt dolor voluptas quo aliquid id voluptate libero ratione ipsa repellat nobis dolorem ipsam. Error earum iste eos nemo magnam sapiente a ducimus, ullam dolorem iusto doloribus at vitae et in nobis? Pariatur nesciunt ea molestias excepturi ab consequuntur optio voluptates, sequi quod dolor
        atque fuga obcaecati laborum error vel reiciendis maiores nobis.
        Molestias minima aliquid incidunt doloribus suscipit mollitia qui quod facilis.
        Quos a deleniti consequatur cumque ut maxime reiciendis quod quisquam animi tempore.
        Nihil aperiam magni dolorem sed delectus nesciunt dolor excepturi.</p>

</body>

</html>