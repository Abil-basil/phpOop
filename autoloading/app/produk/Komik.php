<?php

class Komik extends Produk implements getInfoProduk{
	public $jmlHal;

	public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHal = 0 )
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->jmlHal = $jmlHal;
	}

    public function getInfo() {
		$str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - ";

		return $str;
	}

    public function getInfoProduk() {
        $str = "komik : " . $this->getInfo() ." {$this->jmlHal} halaman.";
        return $str;
    }
}