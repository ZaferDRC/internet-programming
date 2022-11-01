<?php

$sehirler = array("Istanbul","Ankara","Kütahya");

echo "<h3>For Döngüsü İle</h3>";

for($i = 0; $i<count($sehirler); $i++) {

    echo $sehirler[$i];
    echo "<br>";

}

echo "<hr/>";
echo "<br>";

echo "<h3>Foreach Döngüsü İle</h3>";

foreach($sehirler as $deger)
{
    
    echo "Değer: $deger <br/>";

}

echo "<hr/>";
echo "<br>";

$j = 0;

echo "<h3>While Döngüsü İle</h3>";

while($j<count($sehirler))
{

    echo $sehirler[$j],"<br>";
    $j++;

}

echo "<hr/>";
echo "<br/>";

$k = 0;

echo "<h3>Do While Döngüsü İle</h3>";

do
{

echo $sehirler[$k];
echo "<br/>";
$k++;

}while($k<count($sehirler));
   
?>