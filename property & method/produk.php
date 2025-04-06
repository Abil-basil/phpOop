<?php

// class
class Produk {
	// property
	public $judul = "judul",
		   $penulis = "penulis",
		   $penerbit = "penerbit",
		   $harga = 0;

	// method
	public function getLabel() {
		return "$this->penulis, $this->penerbit";
	}
}

// object comic
$produk3 = new Produk();
$produk3->judul = "one piece";
$produk3->penerbit = "shounen jump";
$produk3->penulis = "oda sensei";
$produk3->harga = "34000";

// object game
$produk4 = new Produk();
$produk4->judul = "uncharted";
$produk4->penulis = "neil druckman";
$produk4->penerbit = "sony computer";
$produk4->harga = "250000";

echo "komik : " . $produk3->getLabel(); echo "<br>";
echo "game : " . $produk4->getLabel();
