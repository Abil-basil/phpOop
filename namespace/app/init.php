<?php 

// require_once 'app/produk/getInfoProduk.php';
// require_once 'app/produk/Produk.php';
// require_once 'app/produk/Komik.php';
// require_once 'app/produk/Game.php';
// require_once 'app/produk/infoProduk.php';

// fungsi nya sama seperti di atas tetapi ini auto load ketika ada class baru yang di tambahkan
spl_autoload_register( function ( $class ) {
    // untuk memisahkan string menjadi array dengan di tandai simbol
    $class = explode('\\', $class);
    // untuk mengambil array terakhir dari sebuah array
    $class = end($class);
    require_once __DIR__ . '/produk/' . $class . '.php';
} );

spl_autoload_register( function ( $class ) {
    
    $class = explode('\\', $class);
    $class = end($class);
    require_once __DIR__ . '/service/' . $class . '.php';
} );
