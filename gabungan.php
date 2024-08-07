<?php
function hitungDiskon($harga, $diskon)
{
    $totalDiskon = $harga * ($diskon / 100);
    $hargaSetelahDiskon = $harga - $totalDiskon;
    return $hargaSetelahDiskon;
}

$hargaBarang = 500000;
$diskon = 20;

if ($diskon > 0) {
    $hargaAkhir = hitungDiskon($hargaBarang, $diskon);
    echo "Harga setelah diskon: Rp " . $hargaAkhir;
} else {
    echo "Tidak ada diskon yang berlaku. Harga tetap: Rp " . $hargaBarang;
}

$hargaBarangLain = 250000;
$totalHarga = $hargaBarang + $hargaBarangLain;

echo "<br> Total harga untuk dua barang: Rp " . $totalHarga;
?>