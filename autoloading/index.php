<?php  

// oopdasar/autoloading/index.php
require_once 'App/init.php';

$produk1 = new Buku("Logika Algoritma dan Pemrograman Dasar", "Rosa A. S.", "MODULA", 180000, 500);
$produk2 = new Game("Call Of Duty", "Michael Schiffer", "Infinity Ward", 120000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";
new Coba();