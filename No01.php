<?php
$saldo = 1572250;  // Saldo awal
$pecahan = [100000, 50000, 20000, 5000, 100, 50];  // Daftar pecahan yang berlaku
$jumlah_pecahan = [0, 0, 0, 0, 0, 0];  // Inisialisasi jumlah masing-masing pecahan

for ($i = 0; $i < count($pecahan); $i++) {
    $jumlah_pecahan[$i] = intdiv($saldo, $pecahan[$i]);  // Menghitung jumlah pecahan yang bisa ditarik
    $saldo %= $pecahan[$i];  // Mengupdate saldo yang tersisa setelah menarik pecahan tersebut
}

// Menampilkan hasil
for ($i = 0; $i < count($pecahan); $i++) {
    echo "Jumlah pecahan Rp." . $pecahan[$i] . ": " . $jumlah_pecahan[$i] . "\n";
}
?>
