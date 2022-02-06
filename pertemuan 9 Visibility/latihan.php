<?php 
    class Barang{
        public $nama,
                $jenis,
                $jumlah,
                $harga;

        public function __construct($nama = "nama", $jenis = "jenis", $jumlah = 0, $harga = 0){
            $this->nama = $nama;
            $this->jenis = $jenis;
            $this->jumlah = $jumlah;
            $this->harga = $harga;
        }

        public function cetak(){
            return "$this->nama,
                    $this->jenis,
                    $this->jumlah,
                    $this->harga";
        }
    }


    $barang1 = new Barang("Monitor 14 inch", "Elektronik", 100, 1000000);
    echo $barang1->cetak();



?>
