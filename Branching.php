<?php
/* Aturan Soal
81-100 = A 4
78-80.99 = A- 3.7
75-77.99 = B+ 3.3
70-74.99 = B 3
65-69.99 = B- 2.7
60-64.99 = C+ 2.3
55-59.99 = C 2
40-54.99 = D 1
0-39.99 = E 0
*/
$nilai = 80;
if ($nilai >= 81 AND $nilai <= 100) {
    echo "Nilai Anda $nilai, mendapat grade <b>A</b> bobot <b>4</b>.";
} elseif ($nilai >= 78 AND $nilai < 81) {
    echo "Nilai Anda $nilai, mendapat grade <b>A-</b> bobot <b>3.7</b>.";
} elseif ($nilai >= 75 AND $nilai < 78) {
    echo "Nilai Anda $nilai, mendapat grade <b>B+</b> bobot <b>3.3</b>.";
} elseif ($nilai >= 70 AND $nilai < 75) {
    echo "Nilai Anda $nilai, mendapat grade <b>B</b> bobot <b>3</b>.";
} elseif ($nilai >= 65 AND $nilai < 70) {
    echo "Nilai Anda $nilai, mendapat grade <b>B-</b> bobot <b>2.7</b>.";
} elseif ($nilai >= 60 AND $nilai < 65) {
    echo "Nilai Anda $nilai, mendapat grade <b>C+</b> bobot <b>2.3</b>.";
} elseif ($nilai >= 55 AND $nilai < 60) {
    echo "Nilai Anda $nilai, mendapat grade <b>C</b> bobot <b>2</b>.";
} elseif ($nilai >= 40 AND $nilai < 55) {
    echo "Nilai Anda $nilai, mendapat grade <b>D</b> bobot <b>1</b>.";
} elseif ($nilai >= 0 AND $nilai < 40) {
    echo "Nilai Anda $nilai, mendapat grade <b>E</b> bobot <b>0</b>.";
} else {
    echo "Nilai Tidak Ada Untuk Nilai $nilai.";
}