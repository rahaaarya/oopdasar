<?php

// Kelas Produk sebagai kelas induk
class Produk {
  // Properti dari kelas Produk
  public $judul, 
         $penulis, 
         $penerbit, 
         $harga;
  
  // Konstruktor kelas Produk untuk menginisialisasi properti
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0 ) {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  // Metode untuk mendapatkan label produk
  public function getLabel() {
    return "$this->penulis, $this->penerbit";
  }

  // Metode untuk mendapatkan informasi produk
  public function getInfoProduk() {
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    return $str;
  }
}

// Kelas Buku sebagai turunan dari kelas Produk
class Buku extends Produk {
  // Properti tambahan untuk kelas Buku
  public $jmlHalaman;

  // Konstruktor kelas Buku
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
    // Memanggil konstruktor kelas induk (Produk)
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->jmlHalaman = $jmlHalaman;
  }

  // Metode getInfoProduk di-overriding
  public function getInfoProduk() {
    // Menggabungkan informasi dari kelas induk dan menambahkan jumlah halaman
    $str = "Buku : ". parent::getInfoProduk() ." ~ {$this->jmlHalaman} Halaman.";
    return $str;
  }
}

// Kelas Game sebagai turunan dari kelas Produk
class Game extends Produk {
  // Properti tambahan untuk kelas Game
  public $waktuMain;

  // Konstruktor kelas Game
  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
    // Memanggil konstruktor kelas induk (Produk)
    parent::__construct($judul, $penulis, $penerbit, $harga);
    $this->waktuMain = $waktuMain;
  }

  // Metode getInfoProduk di-overriding
  public function getInfoProduk() {
    // Menggabungkan informasi dari kelas induk dan menambahkan waktu main
    $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam.";
    return $str;
  }
}

// Kelas CetakInfoProduk untuk mencetak informasi produk
class CetakInfoProduk {
  public function cetak(Produk $produk) {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}

// Membuat objek dari kelas Game
$produk1 = new Game("Call Of Duty", "Michael Schiffer", "Infinity Ward", 12000, 50);
// Membuat objek dari kelas Buku
$produk2 = new Buku("Logika Algoritma dan Pemrograman Dasar", "Rosa A. S.", "MODULA",100000, 500);

// Menampilkan informasi produk untuk objek Game
echo $produk1->getInfoProduk();
echo "<br>";
// Menampilkan informasi produk untuk objek Buku
echo $produk2->getInfoProduk();

?>
