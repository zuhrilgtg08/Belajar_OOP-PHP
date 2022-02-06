<?php
class Produk
{

    private $judul,
            $penulis,
            $penerbit,
            $harga,
            $diskon = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function setJudul($judul){
        // if(!is_string($judul)){
        //     throw new Exception("Judul Harus Bertipe String");
        // }
        $this->judul = $judul;
    }

    public function getJudul(){
        return $this->judul;
    }

    public function setPenulis($penulis){
        $this->penulis = $penulis;
    }

    public function getPenulis(){
        return $this->penulis;
    }

    public function setPenerbit($penerbit){
        $this->penerbit = $penerbit;
    }

    public function getPenerbit(){
        return $this->penerbit;
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function geDiskon(){
        return $this->diskon;
    }

    public function setHarga($harga){
        $this->harga = $harga;
    }

    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
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
    public $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoProduk(){
        // Komik : Boruto | Nando Septian, Shounen Jump (Rp. 300000) - 100 Halaman.
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jumlahHalaman} Halaman";

        return $str;
    }
};

class Game extends Produk{
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk(){
        $str = "Game : ". parent::getInfoProduk() ." ~ {$this->waktuMain} Jam";

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

$produk1 = new Komik("Boruto", "Nando Septian", "Shounen jump", 50000, 100);
$produk2 = new Game("Downhill", "Akmal Luthfi", "Sony Computer", 100000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";




$produk2->setDiskon(50);
echo $produk2->getHarga(); 

echo "<hr>";

$produk1->setPenulis("Ahmad Zuhril");
echo $produk1->getPenulis();
echo "<br>";
$produk1->setPenerbit("Ryumen Sukuna");
echo $produk1->getPenerbit();
echo "<br>";
$produk2->setJudul("Tom & Jerry");
echo $produk2->getJudul();



























?>
