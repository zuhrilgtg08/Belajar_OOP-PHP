<?php 
    class Produk{
        
        public $judul,
                $penulis,
                $penerbit,
                $harga = 0;

        public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0){
            $this->judul = $judul;
            $this->penulis = $penulis;
            $this->penerbit = $penerbit;
            $this->harga = $harga;
        }

        public function getLabel(){
            return "$this->judul,
                    $this->penulis, 
                    $this->penerbit";
        }
    };

    class CetakInfoProduk{
        public function cetak(Produk $produk){
            $str = "{$produk->getLabel()} | (Rp. {$produk->harga})";
            return $str;
        }
    };

    $produk1 = new Produk("Boruto", "Nando Septian", "Shounen jump", 50000);
    $produk2 = new Produk("Downhill", "Akmal Luthfi", "Sony Computer", 100000);
    echo "Komik : ". $produk1->getLabel();
    echo "<br>";
    echo "Game : ". $produk2->getLabel();
    echo "<br>";

    $infoProduk1 = new CetakInfoProduk();
    $infoProduk2 = new CetakInfoProduk();
    echo "Info Produk 1 : ". $infoProduk1->cetak($produk1);
    echo "<br>";
    echo "Info Produk 2 : ". $infoProduk2->cetak($produk2);
