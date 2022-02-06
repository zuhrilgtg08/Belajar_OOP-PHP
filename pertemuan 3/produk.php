<?php 

    // game, komik 
    class Produk{
        // cara 1 mendefinisikan secara default kedalam class nya langsung
        public $judul = "judul",
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0;

        public function getLabel(){
            return "$this->judul,
                    $this->penulis, 
                    $this->penerbit,
                    $this->harga";
        }
    }

    $produk1 = new Produk();
    // cara 2 nilai yang bisa ditimpa
    $produk1->judul = "Boruto Sippuden";
    $produk1->penulis = "Akmal Luthfi";
    $produk1->penerbit = "shounen jump";
    $produk1->harga = 150000;
    // var_dump($produk1);

    $produk2 = new Produk();
    $produk2->judul = "Pes 3";
    $produk2->penulis = "Nando Septian";
    $produk2->penerbit = "Pt Mitra 2005";
    $produk2->harga = 120000;
    
    echo "Komik : $produk2->penulis, $produk2->penerbit";
    echo "<br>";

    echo $produk2->getLabel();
    echo "<br>";
    echo "Komik : ". $produk1->getLabel();
    echo "<br>";
    echo "Game : ". $produk2->getLabel();
?>

<!-- jika ingin memanipulasi property  
usahakan harus sama penulisannya
bila ingin membuat property baru tinggal tulis aja
di dalam object nya otomatis dibuatkan 
property barunya -->