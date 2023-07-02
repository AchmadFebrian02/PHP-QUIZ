<?php
function cekKelipatanTiga($n) {
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0) {
            echo "Kelipatan tiga\n";
        } else {
            echo $i . "\n";
        }
    }
}

// Contoh penggunaan
$n = 10;
cekKelipatanTiga($n);
?>