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

	// inheritance problem
	public function getInfoProduk() {
		$str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - ";

		return $str;
	}
}


class Komik extends Produk {
	public $jmlHal;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0 )
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHal = $jmlHal;
	}

    public function getInfoProduk() {
        $str = "komik : " . parent::getInfoProduk() ." - {$this->jmlHal} halaman.";
        return $str;
    }
}

class Game extends Produk {
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wktMain = 0)
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $wktMain;
	}

    public function getInfoProduk() {
        $str = "game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} jam.";
        return $str;
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
$produk1 = new Komik("one piece", "oda sensei", "shounen jump", 45000, 100);

// object game
$produk2 = new Game("uncharted", "Neil Druckman", "sony computer", 25000, 50);

echo $produk1->getInfoProduk(); echo "<br>";
echo $produk2->getInfoProduk();



