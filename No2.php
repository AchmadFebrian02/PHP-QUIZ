<?php
function convertTanggalKeTeks($tanggal)
{
    $bulan = array(
        1 => 'Januari',
        2 => 'Februari',
        3 => 'Maret',
        4 => 'April',
        5 => 'Mei',
        6 => 'Juni',
        7 => 'Juli',
        8 => 'Agustus',
        9 => 'September',
        10 => 'Oktober',
        11 => 'November',
        12 => 'Desember'
    );

    $tanggalArr = explode('-', $tanggal);
    $hari = (int)$tanggalArr[2];
    $bulanIndex = (int)$tanggalArr[1];
    $tahun = (int)$tanggalArr[0];

    $teksBulan = $bulan[$bulanIndex];
    $teksHari = '';

    if ($hari < 10) {
        $teksHari = '0' . $hari;
    } else {
        $teksHari = $hari;
    }

    $teksTahun = '';

    if ($tahun < 1000) {
        $teksTahun = '0' . $tahun;
    } else {
        $teksTahun = $tahun;
    }

    $teksTanggal = $teksHari . ' ' . $teksBulan . ' ' . $teksTahun;
    return $teksTanggal;
}

// Contoh penggunaan fungsi
$tanggal = '2023-07-01';
$teksTanggal = convertTanggalKeTeks($tanggal);
echo $teksTanggal; // Output: 01 Juli 2023
?>