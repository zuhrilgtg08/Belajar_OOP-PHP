<?php

    require 'App/init.php';


    $produk1 = new Komik("Boruto", "Nando Septian", "Shounen jump", 50000, 100);
    $produk2 = new Game("Downhill", "Akmal Luthfi", "Sony Computer", 100000, 50);

    $cetakProduk = new CetakInfoProduk();
    $cetakProduk->tambahProduk($produk1);
    $cetakProduk->tambahProduk($produk2);
    echo $cetakProduk->cetak();

    echo "<hr>";
    new Coba();
    
?>