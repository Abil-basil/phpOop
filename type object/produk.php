<?php

class Produk {
	// property
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga;

	// constructor method = metode khusus yang di jalankan otomatis ketika kita membuat instan di sebuah kelas
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	// method
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

// type object = type variable/object baru yang di sesuaikan dengan class
class InfoProduk {
	public function produk ( Produk $produk ) {
		$str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
		return $str;
	}
}

// constructor
// object comic
$produk1 = new Produk("one piece", "oda sensei", "shounen jump", 45000);

// object game
$produk2 = new Produk("uncharted", "Neil Druckman", "sony computer", 25000);

$InfoProduk = new InfoProduk();


echo "komik : " . $produk1->getLabel(); echo "<br>";
echo "game : " . $produk2->getLabel(); echo "<br>";
echo $InfoProduk->produk($produk1);


