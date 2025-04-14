<?php
// abstract class di gunakan untuk membuat kerangka dasar dari suatu class, yang tidak bisa di buat objek nya langsung
// kegunaan
// menenrukan struktur dasar yang harus di miliki class turunan
// memaksa class turunan untuk mengisi method tertentu (abstract method di abstract class)
// mencegah instansiasi langsung, jadi hanya bisa di gunakan di class turunan
// menyediakan method umum yang bisa di gunakan di class turunan

abstract class Produk {
	// property
	private $judul,
		   $penulis,
		   $penerbit,
		   $harga,
		   $diskon = 0;


	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
		$this->judul = $judul;
		$this->penulis = $penulis;
		$this->penerbit = $penerbit;
		$this->harga = $harga;
	}

	public function setJudul($judul) {
		$this->judul = $judul;
	} 

	public function getJudul() {
		return $this->judul;
	}

	public function setPenulis($penulis) {
		$this->penulis = $penulis;
	}

	public function getPenulis() {
		return $this->penulis;
	}

	public function setPenerbit($penerbit) {
		$this->penerbit = $penerbit;
	}

	public function getPenerbit() {
		return $this->penerbit;
	}

	public function setHarga($harga) {
		return $this->harga = $harga;
	}

	public function getHarga() {
		return $this->harga - ($this->harga * $this->diskon / 100 );
	}

	public function setDiskon( $diskon ) {
		return $this->diskon = $diskon;
	}

	public function getDiskon() {
		return $this->diskon;
	}

	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}

	abstract public function getInfoProduk(); 
	
	public function getInfo() {
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
        $str = "komik : " . parent::getInfo() ." {$this->jmlHal} halaman.";
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
        $str = "game : " . $this->getInfo() . " {$this->waktuMain} jam.";
        return $str;
    }

}


class InfoProduk {
	public $list = [];

	public function tambahProduk( Produk $produk ) {
		$this->list[] = $produk;
	}

	public function cetak () {
		$str = "DAFTAR PRODUK : <br>";

		foreach ($this->list as $p) {
			$str .= "- {$p->getInfoProduk()} <br>";
		}

		return $str;
	}

}

// object comic
$produk1 = new Komik("one piece", "oda sensei", "shounen jump", 45000, 100);

// object game
$produk2 = new Game("uncharted", "Neil Druckman", "sony computer", 25000, 50);

$infoProduk = new InfoProduk();
$infoProduk->tambahProduk($produk1);
$infoProduk->tambahProduk($produk2);
echo $infoProduk->cetak();




