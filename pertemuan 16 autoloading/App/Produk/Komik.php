<?php
class Komik extends Produk implements infoProduk{
    public $jumlahHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga);

        $this->jumlahHalaman = $jumlahHalaman;
    }

    public function getInfoProduk(){
        // Komik : Boruto | Nando Septian, Shounen Jump (Rp. 300000) - 100 Halaman.
        $str = "Komik : " . $this->getInfo() . " - {$this->jumlahHalaman} Halaman";

        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
};