<?php  

// App/init.php
// require_once 'Produk/Produk.php';
// require_once 'Produk/Buku.php';
// require_once 'Produk/Game.php';
// require_once 'Produk/CetakInfoProduk.php';
// require_once 'Produk/InfoProduk.php';

spl_autoload_register(function( $class ){
  require_once __DIR__ . '/Produk/'. $class. '.php';
});

// $produk1 = new Produk("Game", "Joko", "PT. ABC", 100000);
