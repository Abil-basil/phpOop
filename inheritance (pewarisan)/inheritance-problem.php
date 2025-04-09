<?php

class Produk {
	// property
	public $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $jmlHal,
		   $wktMain,
		   $tipe;

	// constructor method = metode khusus yang di jalankan otomatis ketika kita membuat instan di sebuah kelas
	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0, $wktMain = 0, $tipe) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
		$this->jmlHal = $jmlHal;
		$this->wktMain = $wktMain;
		$this->tipe = $tipe;
	}

	// method
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	// inheritance problem
	public function infoLengkap() {
		// komik : naruto | oda sensei, shounen jump (Rp. 45000) - 100 halaman.
		$str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - ";

		if ($this->tipe == "komik") {
			$str .= "$this->jmlHal" . " halaman";
		}else if ($this->tipe == "game") {
			$str .= "$this->wktMain" . " jam";
		}

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
$produk1 = new Produk("one piece", "oda sensei", "shounen jump", 45000, 100, 0, "komik");

// object game
$produk2 = new Produk("uncharted", "Neil Druckman", "sony computer", 25000, 0, 50, "game");

echo $produk1->infoLengkap();



