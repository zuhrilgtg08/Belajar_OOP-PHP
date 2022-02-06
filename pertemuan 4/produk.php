<?php

// game, komik 
class Produk
{

    public $judul,
        $penulis,
        $penerbit,
        $harga = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->judul,
                    $this->penulis, 
                    $this->penerbit,
                    $this->harga";
    }
}

$produk1 = new Produk("Boruto", "Nando Septian", "Shounen jump", 50000);
// $produk1->judul = "Boruto Sippuden";
// $produk1->penulis = "Akmal Luthfi";
// $produk1->penerbit = "shounen jump";
// $produk1->harga = 150000;


$produk2 = new Produk("Downhill", "Akmal Luthfi", "Sony Computer", 100000);
// $produk2->judul = "Pes 3";
// $produk2->penulis = "Nando Septian";
// $produk2->penerbit = "Pt Mitra 2005";
// $produk2->harga = 120000;

// echo "Komik : $produk2->penulis, $produk2->penerbit";
// echo "<br>";

// echo $produk2->getLabel();
// echo "<br>";
$produk3 = new Produk("Dragonbal");
var_dump($produk3);

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
