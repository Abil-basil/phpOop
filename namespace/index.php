<?php

require_once "app/init.php";

// // object comic
// $produk1 = new Komik("one piece", "oda sensei", "shounen jump", 45000, 100);

// // object game
// $produk2 = new Game("uncharted", "Neil Druckman", "sony computer", 25000, 50);

// $infoProduk = new InfoProduk();
// $infoProduk->tambahProduk($produk1);
// $infoProduk->tambahProduk($produk2);
// echo $infoProduk->cetak(); echo "<hr>";

// membuat alias atau nama lain
use app\produk\User as ProdukUser;
use app\service\User as ServiceUser;

new ProdukUser(); echo '<br>';
new ServiceUser();


