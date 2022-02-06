<?php
class Produk
{

    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jml,
        $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jml = 0, $waktuMain = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jml = $jml;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
};


class Komik extends Produk{
    public function getInfoKomik(){
        // Komik : Boruto | Nando Septian, Shounen Jump (Rp. 300000) - 100 Halaman.
        $str = "Komik : {$this->getInfoProduk()} - {$this->jml} Halaman";

        return $str;
    }
};

class Game extends Produk{
    public function getInfoGame(){
        $str = "Game : {$this->getInfoProduk()} ~ {$this->waktuMain} Jam";

        return $str;
    }
};

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->getLabel()} | (Rp. {$produk->harga})";
        return $str;
    }
};

$produk1 = new Komik("Boruto", "Nando Septian", "Shounen jump", 50000, 100, 0);
$produk2 = new Game("Downhill", "Akmal Luthfi", "Sony Computer", 100000, 0, 50);
$produk3 = new Game("God Of War", "Ahmad Zuhril", "Sony Computer", 1200000, 0, 62);

echo $produk1->getInfoKomik();
echo "<br>";
echo $produk2->getInfoGame();
echo "<br>";
echo $produk3->getInfoGame();
