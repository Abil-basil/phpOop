<?php

class Game extends Produk implements getInfoProduk{
	public $waktuMain;

	public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $wktMain = 0)
	{
		parent::__construct($judul, $penulis, $penerbit, $harga);

		$this->waktuMain = $wktMain;
	}

    public function getInfo() {
		$str = " {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - ";

		return $str;
	}

    public function getInfoProduk() {
        $str = "game : " . $this->getInfo() . " {$this->waktuMain} jam.";
        return $str;
    }

}