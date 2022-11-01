<?php

$sayi1 = $_POST['sayi1'];
$sayi2 = $_POST['sayi2'];
$secim = $_POST['secim'];
$sonuc = 0;

if(isset($_POST['Hesapla'])) 

{

    if($secim=='Topla')
        $sonuc = $sayi1 + $sayi2;

    else if($secim=='Cıkar')
        $sonuc = $sayi1 - $sayi2;

    else if($secim=='Carp')
        $sonuc = $sayi1 * $sayi2;

    else if($secim=='Bol')
        $sonuc = $sayi1 / $sayi2;

}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dortİslem</title>
</head>
<body>

    <form method = "post" action=""> 

    <input type="text" name="sayi1" value="<?=$sayi1?>">
    <input type="text" name="sayi2" value="<?=$sayi2?>">
    <input button type="submit" name="Hesapla" value="Hesapla"></button>

     <select name="secim">

        <option value="Topla">Toplama</option>
        <option value="Cıkar">Çıkarma</option>
        <option value="Carp">Çarpma</option>
        <option value="Bol">Bolme</option>

    </select>

    </form>

    <h3>Sonuc : <?=$sonuc?></h3>
    
</body>
</html>