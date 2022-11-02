<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Giriş Formu</title>
</head>

<?php

session_start();

if (isset($_POST['kullaniciadi']) and isset($_POST['sifre'])) {

    require 'veriler.php';


    foreach($kullanicilar as $kullanici){

        if($_POST['kullaniciadi'] == $kullanici['kullaniciadi'] and $_POST['sifre'] == $kullanici['sifre']){

            $_SESSION['kullanici'] = $kullanici['kullaniciadi'];
            echo "<h2 id = 'h2eko1'>Hoş geldin $_POST[kullaniciadi], 3 Saniye İçerisinde Özel Sayfaya Yönlendiriliyorsun..</h2>";
            header("Refresh: 3; url = uyeozelsayfa.php");
            break;

        }

        else{

            echo "<h2 id = 'h2eko2'> Kullanıcı Adı Veya Şifre Yanlış.!</h2>";
            break;
        }


    }
           

}

?>

<style>
    body {
        margin: 0;
        padding: 0;
        background-color: steelblue;
    }

    .form {

        width: 300px;
        padding: 20px;
        text-align: center;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        overflow: hidden;
        background-color: darkslategrey;
    }

    #h2eko1 {

        text-align: center;
        color: wheat;
        left: 50%;
        right: 50%;
    }

    #h2eko2 {

        text-align: center;
        color: wheat;
    }

    .form h1 {

        margin-bottom: 50px;
        color: wheat;

    }

    .form input {

        display: block;
        width: 100%;
        text-align: center;
        padding: 0 9px;
        height: 44px;
        box-sizing: border-box;
        border: none;
        margin-top: 20px;
        border-radius: 10px;
    }


    #btn {

        margin-top: 60px;
        margin-bottom: 20px;
        background-color: cornflowerblue;
    }

    #btn:hover {

        background-color: white;
        transition: 0.5s;
        transform: scale(0.90);
        cursor: pointer;
    }

    .form a {

        font-size: 18px;
        margin: 20px;
        padding: 20px;
        text-decoration: none;
        color: wheat;
    }

    a:hover {

        color: white;
        transition: 0.5s;
        transform: scale(0.90);
        cursor: pointer;
    }
</style>

<body>

    <div class="form">

        <form action="" method="post">
            <h1>Giriş Yap</h1>
            <input type="text" name="kullaniciadi" placeholder="Kullanıcı Ad" required>
            <input type="password" name="sifre" placeholder="Şifre" required>
            <input button type="submit" name="girisyap" value="Giriş Yap" id="btn">
            <a href="kayitol.php">Hesabın yok mu ? Tıkla.</a>

        </form>
    </div>

</body>

</html>
