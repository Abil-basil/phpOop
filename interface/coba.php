<?php 
// interface
// class abstract yang sama sekali tidak memiliki implementasi
// murni merupakan template untuk class turunan nya
// tidak boleh memiliki propert, hanya deklarasi method saja
// semua method harus dideklarasikan dengan visibility public
// boleh mendeklarasikan __construct
// satu class boleh mengimplementasikan banyak interface
// untuk menyambungkan ke interface parent menggunakan "implements"
// ini juga mirip mirip dengan class abstrak agar memaksa turunan nya mempunyai method yang sama

interface buah {
    public function makan();
    public function setWarna($warna);
}

interface benda {
    public function setBenda($benda);
}

class apel implements buah, benda {
    protected $warna, $benda;

    public function makan() {
        echo "kunyah";
    }

    public function setWarna($warna) {
        $this->warna = $warna;
    } 

    public function setBenda($benda) {
        $this->benda = $benda;
    }
}