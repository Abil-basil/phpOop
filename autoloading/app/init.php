<?php 

// require_once 'app/produk/getInfoProduk.php';
// require_once 'app/produk/Produk.php';
// require_once 'app/produk/Komik.php';
// require_once 'app/produk/Game.php';
// require_once 'app/produk/infoProduk.php';

// fungsi nya sama seperti di atas tetapi ini auto load ketika ada class baru yang di tambahkan
spl_autoload_register( function ( $class ) {
    require_once __DIR__ . '/produk/' . $class . '.php';
} );