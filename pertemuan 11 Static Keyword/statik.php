<?php 
//     // class Coba{
//     //     public static $angka = 1;

//     //     public static function tes(){
//     //         return "Halo" . self::$angka++ . "Kali";
//     //     }
//     // }

// echo Coba::$angka;
// echo "<hr>";
// echo Coba::tes();
// // cara akses property dan method static tanpa intasiansi;


// echo "<br>";
// echo Coba::tes();

class Contoh{
    public static $angka = 1;

    public function coba(){
        return "Apa Kabar " . self::$angka++. " Kali. <br>";
    }
};

$obj = new Contoh;
echo $obj->coba();
echo $obj->coba();
echo $obj->coba();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->coba();
echo $obj2->coba();
echo $obj2->coba();











?>