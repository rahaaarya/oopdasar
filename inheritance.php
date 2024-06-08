<?php 

class Produk {
  public $judul, 
         $penulis, 
         $penerbit, 
         $harga,
         $jmlHalaman,
         $waktuMain;


  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0, $waktuMain = 0, ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }   

  public function getInfoProduk() {
    $str = "{$this->tipe} | {$this->getLabel()} (Rp. {$this->harga})";
    if ($this->tipe == "Buku") {
      $str .= ", {$this->jmlHalaman} Halaman";
    }
    if ($this->tipe == "Game") {
      $str .= ", {$this->waktuMain} Jam";
    }
    return $str;
  }
}

class Buku extends produk{
  public function getInfoProduk()
  {
     $str = "Buku : " . parent::getInfoProduk() . "judul  {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
     return $str;
  }
}

class Game extends produk{
  public function getInfoProduk(){
    $str = "Game : {$this->judul}  {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
    return $str;
  }
}

class CetakInfoProduk {
  public function cetak(Produk $produk) {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

$produk1 = new Game("Call Of Duty", "Michael Schiffer", "Infinity Ward", 1000000, 0, 50);
$produk2 = new Buku("Logika Algoritma dan Pemrograman Dasar", "Rosa A. S.", "MODULA",100000, 50, 0);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();

?>


