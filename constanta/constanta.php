<?php
// sebuah identifier untuk menyimpan nilai yang nilai nya tidak dapat berubah
// const bisa di gunakan di dalam kelas sedangkan define tidak bisa

// define('NAMA', 'ahay');
// echo NAMA . " ";

// const UMUR = 16;
// echo  UMUR;

// contoh penggunaan
class nama {
    const NAMA = "ahay";

    public static function coba() {
        return "nama saya : " . self::NAMA;
    }
}

echo nama::NAMA; echo "<br>";
echo nama::coba();


// magic constant
// __LINE__ = untuk menampilkan baris 
// __FILE__ = untuk menampilkan tempat/nama file
// __DIR__ = untuk menampilkan tempat/nama folder
// __FUNCTION__ = untuk mengetahui function mana 
// __CLASS__ = untuk mengetahui class mana
// __TRAIT__
// __METHOD__
// __NAMESPACE__

// // echo __LINE__;
// echo __FILE__; 
// echo "<br>";
// echo __DIR__;

// function CobaFunction() {
//     return __FUNCTION__;
// }
// echo coba();

// class CobaClass {
//     public static $test = __CLASS__;
// }
// echo CobaClass::$test;