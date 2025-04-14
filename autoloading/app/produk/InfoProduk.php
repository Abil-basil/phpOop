<?php

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