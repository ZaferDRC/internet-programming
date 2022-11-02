<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Üye Giriş Formu</title>
</head>

<?php


if (isset($_POST['kullaniciadi']) && isset($_POST['sifre'])) {

    require 'veriler.php';

    foreach ($kullanicilar as $kullanici) {

        if ($_POST['kullaniciadi'] == $kullanici['kullaniciadi'] and $_POST['sifre'] == $kullanici['sifre']) {

            echo "<h2>Hoş geldin $_POST[kullaniciadi], 3 Saniye İçerisinde Anasayfaya Yönlendiriliyorsun</h2>";
            header("Refresh: 3; url = index.php");

            if (isset($_POST['hatirla'])) {

                header("Refresh: 3; url = index.php");
                setcookie("kullaniciadi", $kullanici['kullaniciadi'], time() + 50);
                setcookie("parola", $kullanici['sifre'], time() + 50);
                
            }

            break;
        }

        else {

            echo "<h2>Yanlış kullanıcı adı veya parola girdiniz</h2>";
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

    h2 {

        text-align: center;
        color: wheat;
    }


    .form h1 {

        margin-bottom: 50px;
        color: wheat;

    }

    #kullaniciad {

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

    #kullanicisifre {

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

        display: block;
        width: 100%;
        text-align: center;
        padding: 0 9px;
        height: 44px;
        box-sizing: border-box;
        border: none;
        margin-top: 60px;
        margin-bottom: 20px;
        border-radius: 10px;
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
            <input type="text" name="kullaniciadi" placeholder="Kullanıcı Ad" required id="kullaniciad">
            <input type="password" name="sifre" placeholder="Şifre" required id="kullanicisifre">
            <input button type="submit" name="girisyap" value="Giriş Yap" id="btn">
           <label for="hatirla"><input type="checkbox" name="hatirla" id="hatirla">Beni Hatırla</label> 
        </form>
    </div>



</body>

</html>

<?php



?>