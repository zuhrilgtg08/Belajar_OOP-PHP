<?php
class Produk
{

    public $judul,
        $penulis,
        $penerbit,
        $harga,
        $jml,
        $waktuMain,
        $tipe;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jml = 0, $waktuMain = 0, $tipe)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jml = $jml;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoDetail(){
        // Komik : Boruto | Nando Septian, Shounen Jump (Rp. 300000) - 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if($this->tipe == "Komik"){
            $str .= " - {$this->jml} Halaman.";
        } else if($this->tipe == "Game"){
            $str .= " ~ {$this->waktuMain} Jam.";
        }

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

$produk1 = new Produk("Boruto", "Nando Septian", "Shounen jump", 50000, 100, 0, "Komik");
$produk2 = new Produk("Downhill", "Akmal Luthfi", "Sony Computer", 100000, 0, 50, "Game");

echo $produk1->getInfoDetail();
echo "<br>";
echo $produk2->getInfoDetail();

?>
