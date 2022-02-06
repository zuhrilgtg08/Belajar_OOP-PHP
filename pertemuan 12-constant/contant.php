<?php

// cara 1 dan biasakan ketika membuat constanta tulis menggunakan huruf besar semua
// supaya dapat membedakan antara variable dan contanta
define('NAMA', 'Ahmad Zuhril');
echo NAMA;

echo "<br>";
// cara 2
const UMUR = 16;
echo UMUR;

echo "<br>";

class Coba{
    public $kelas = __CLASS__;
    const ANGKA = 54;
}

$obj = new Coba;
echo $obj->kelas. "<br>";

echo Coba::ANGKA;
echo "<br>";

echo __LINE__. "<br>";
echo __FILE__ . "<br>";


function tes(){
    return __FUNCTION__;
}

echo tes() ."<br>";

echo __DIR__;












?>