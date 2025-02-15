<?php
$a = 4;
$b = 5;

# operator aritmatika standar
echo "Aritmatika <hr>";
echo "{$a} + {$b} = " . ($a + $b) . " <br>";
echo "{$a} - {$b} = " . ($a - $b) . " <br>";
echo "{$a} * {$b} = " . ($a * $b) . " <br>";
echo "{$a} / {$b} = " . ($a / $b) . " <br>";
echo "<br>";

# modulus
echo "Modulus <hr>";
echo "{$a} % {$b} = " . ($a % $b) . " <br>";
echo "{$b} % {$a} = " . ($b % $a) . " <br>";
echo "<br>";

# eksponensial
echo "Eksponensial <hr>";
echo "{$a} * {$b} = " . ($a * $b) . " <br>";
echo "{$b} * {$a} = " . ($b * $a) . " <br>";
echo "<hr>";

# negasi
echo "Negasi <br>";
echo "-a = " . (-$a) . " <br>";
echo "-b = " . (-$b) . " <br>";
echo "<hr>";

# operator penugasan
echo "Penugasan<br>";
$nilaiMatematika = 8;
$rataRata = (10 + 7 + $nilaiMatematika) / 3;

$namaDepan = "Favian";
$namaLengkap = "{$namaDepan} Aufa";

$a = 5;
$a += 10;
echo var_dump($a) . "<br>";

$a -= 20;
echo var_dump($a) . "<br>";

$a *= 100; 
echo var_dump($a) . "<br>";

$a /= 10;
echo var_dump($a) . "<br>";
echo "<hr>";

# operator perbandingan
echo "Perbandingan<br>";
$nilai = 90;
# membanding variabel
$lulus = $nilai > 80;

echo "{$nilai} > 80 = ";
var_dump($lulus);
echo "<br>";

# membandingkan langsung angka
echo "3 >= 3 = ";
var_dump(3 >= 3);
echo "<br>";

echo "3 < 6 = ";
var_dump(3 < 6);
echo "<br>";

echo "5 <= 3 = ";
var_dump(5 <= 3);
echo "<br>";

# anda juga bisa membandingkan antar 2 string
echo "'a' < 'b' = ";
var_dump('a' < 'b');
echo '<br>';

echo "'abc' < 'b' = ";
var_dump('abc' < 'b');
echo '<br>';