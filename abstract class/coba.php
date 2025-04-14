<?php 
// di abstract class minimal harus mempunyau 1 method abstract
// class di abstract = agar tidak bisa di intansiasi langsung
// method di abtract = agar turunan nya mempunyai method yang sama

// kerangka dasar
abstract class hewan {
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    // method yang wajib di miliki oleh turunan nya
    abstract public function bersuara();

    // method general atau method biasa 
    public function info() {
         echo "ini adalah hewan bernama $this->nama <br>";
    }
}

class kucing extends hewan {
    // method turunan dari parent abstract
    public function bersuara()
    {
        echo "$this->nama berkata : meong \n";
    }
}

$kucing = new kucing("aboy");
$kucing->info();
$kucing->bersuara();