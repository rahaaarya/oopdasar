<?php 

class Produk{
  public  $judul , 
          $penulis, 
          $penerbit, 
          $harga;

  public function __construct($judul = "judul", $penulis="penulis", $penerbit="penerbit", $harga=0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel(){
    return "$this->penulis, $this->penerbit";
  }
  
}

class CetakInfoProduk{
  public function cetak(Produk $produk){
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}


$produk1 = new Produk("Call Of Duty", "Michael Schiffer", "Infinity Ward", 1000000);
$produk2 = new Produk("Logika Algoritma dan Pemrograman Dasar", "Rosa A. S.", "MODULA", 100000 );


echo "Games :" . $produk1->getLabel();
echo "<br>";
echo "Buku :" . $produk2->getLabel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk1);

; ?>
