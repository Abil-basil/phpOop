<?php
// nilai static akan selalu tetap meskipun di instansiasi berulang kali

// cara penggunaan
// class contohStatic {
//     public static $angka = 1;

//     public static function hello() {
//         return "hello " . self::$angka++ . " kali. ";
//     }
// }

// echo contohStatic::$angka; echo "<hr>";
// echo contohStatic::hello(); echo "<br>";
// echo contohStatic::hello(); echo "<br>";
// echo contohStatic::hello(); echo "<hr>";

// echo contohStatic::$angka;

// nilai static
class contoh {
    public static $angka = 1;

    public function hello() {
        return "hello " . self::$angka++ . " kali.";
    }
}

$obj = new contoh();
echo $obj->hello(); echo "<br>";
echo $obj->hello(); echo "<br>";
echo $obj->hello(); echo "<hr>";

$obj2 = new contoh();
echo $obj2->hello(); echo "<br>";
echo $obj2->hello(); echo "<br>";
echo $obj2->hello(); echo "<hr>";

$obj3 = new contoh;
echo $obj3->hello();