<?php
function Prime($nomor) {
    if ($nomor <= 1) return false;
    for ($i = 2; $i <= sqrt($nomor); $i++) {
        if ($nomor % $i == 0) return false;
    }
    return true;
}

echo "Bilangan Prima antara 0 dan 50:<br>";
for ($i = 0; $i <= 50; $i++) {
    if (Prime($i)) {
        echo $i . "<br>";
    }
}