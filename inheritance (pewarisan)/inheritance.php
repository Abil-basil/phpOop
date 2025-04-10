<?php

class Produk {
	// property
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHal,
		   $wktMain;

	// constructor method = metode khusus yang di jalankan otomatis ketika kita membuat instan di sebuah kelas
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $wktMain = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHal = $jmlHal;
		$this->wktMain = $wktMain;
	}

	// method
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	// inheritance problem
	public function getInfoProduk() {
		// komik : naruto | oda sensei, shounen jump (Rp. 45000) - 100 halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - ";

		return $str;
	}
}


class Komik extends Produk {
    public function getInfoProduk() {
        $str = "komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHal} halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) ~ {$this->wktMain} jam.";
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
$produk1 = new Komik("one piece", "oda sensei", "shounen jump", 45000, 100, 0);

// object game
$produk2 = new Game("uncharted", "Neil Druckman", "sony computer", 25000, 0, 50);

echo $produk1->getInfoProduk(); echo "<br>";
echo $produk2->getInfoProduk();



