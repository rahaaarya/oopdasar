<?php 
class Produk{
  public $judul = "judul", 
          $penulis = "penulis", 
          $penerbit = "penerbit", 
          $harga = 0;

  public function getLabel(){
    return "$this->penulis, $this->penerbit";
  }
}

// $produk1 = new Produk();
// $produk1->judul = "Blue Lock";
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Valorant";
// $produk2->tambahProperty = "tambah";
// var_dump($produk2);

$produk3 = new Produk();
$produk3->judul = "Call Of Duty";
$produk3->penulis = "Michael Schiffer";
$produk3->penerbit = "Infinity Ward";
$produk3->harga = 1000000;

$produk4 = new Produk();
$produk4->judul = "Logika Algoritma dan Pemrograman Dasar";
$produk4->penulis = "Rosa A. S.";
$produk4->penerbit = "MODULA";
$produk4->harga = 100000;

echo "Games :" . $produk3->getLabel();
echo "<br>";
echo "Buku :" . $produk4->getLabel();
; ?>
