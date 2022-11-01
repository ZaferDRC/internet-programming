<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İş Başvuru Formu</title>
</head>

<?php

$baglandb = mysqli_connect("localhost", "root", "toor", "uyekayit");

if (isset($_POST["basvur"])) {

    $ad = $_POST["ad"];
    $soyad = $_POST["soyad"];
    $dogumtarih = $_POST["dogumtarih"];
    $tel = $_POST["tel"];
    $mail = $_POST["mail"];
    $ozgecmis = $_POST["ozgecmis"];

    $sql = "INSERT INTO basvuru (ad,soyad,tel,dogumtarih,mail,ozgecmis) VALUES('".$ad."','".$soyad."','".$tel."','".$dogumtarih."','".$mail."','".$ozgecmis."')";
    $sonuc = mysqli_query($baglandb, $sql);
    echo "<script> alert('Başvurunuz Alınmıştır.!') </script>";
    header("Refresh: 3; url = index.php");

}

?>

<style>
    
    body {
        margin: 0;
        padding: 0;
        background-color: wheat;
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
        background-color: midnightblue;
    }

    .form h1 {

        margin-top: 50px;
        color: green;

    }


    .form input {

        display: block;
        width: 100%;
        text-align: center;
        box-sizing: border-box;
        height: 44px;
        border: none;
        margin-top: 20px;
        border-radius: 10px;
    }


    #buton {

        margin-top: 40px;
        background-color: cornflowerblue;
        color: white;
        font-size: 16px;
    }

    #buton:hover {

        background-color: white;
        transition: 0.5s;
        transform: scale(0.90);
        cursor: pointer;
    }


    #temizle {

        background-color: cornflowerblue;
        color: red;
        font-size: 16px;

    }

    #temizle:hover {

        background-color: white;
        transition: 0.5s;
        transform: scale(0.90);
        cursor: pointer;
    }

    #ozgecmis{

        margin-top: 40px;
    }
</style>

<body>

    <div class="form">

        <form action="" method="post">
            <h1>İş Başvuru Formu</h1>
            <input type="text" name="ad" maxlength="15" placeholder="Adınız" required>
            <input type="text" name="soyad" maxlength = "10"placeholder="Soyadınız" required>
            <input type="date" name="dogumtarih" placeholder="Doğum Tarihiniz" required>
            <input type="tel" name="tel" maxlength = "10" placeholder="Telefon Numaranız" required>
            <input type="email" name="mail" maxlength = "20" placeholder="Mailiniz" required>
            <textarea name="ozgecmis" id="ozgecmis" cols="30" rows="10" >Kendinizden Bahsedin.</textarea>
            <input button type="submit" name="basvur" value="Başvur" id="buton">
            <input type="reset" value="Temizle" id="temizle">
        </form>
    </div>



</body>

</html>
