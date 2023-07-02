<?php
class MenghitungLuas {
    public function luas_persegi($sisi) {
        /* Metode untuk menghitung luas persegi */
        $luas = $sisi * $sisi;
        return $luas;
    }

    public function luas_persegi_panjang($panjang, $lebar) {
        /* Metode untuk menghitung luas persegi panjang */
        $luas = $panjang * $lebar;
        return $luas;
    }

    public function luas_lingkaran($jari_jari) {
        /* Metode untuk menghitung luas lingkaran */
        $luas = 3.14 * ($jari_jari ** 2);
        return $luas;
    }
}


$menghitung_luas = new MenghitungLuas();

// Menghitung luas persegi dengan sisi 5
$luas_persegi = $menghitung_luas->luas_persegi(5);
echo "Luas Persegi: " . $luas_persegi . "\n";

// Menghitung luas persegi panjang dengan panjang 4 dan lebar 6
$luas_persegi_panjang = $menghitung_luas->luas_persegi_panjang(4, 6);
echo "Luas Persegi Panjang: " . $luas_persegi_panjang . "\n";

// Menghitung luas lingkaran dengan jari-jari 3
$luas_lingkaran = $menghitung_luas->luas_lingkaran(3);
echo "Luas Lingkaran: " . $luas_lingkaran . "\n";
?>