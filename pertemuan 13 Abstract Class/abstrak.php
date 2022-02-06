<?php 

    abstract class Buah{
        private $warna;

        abstract public function makan();

        public function setWarna($warna){
            $this->warna = $warna;
        }
    }


    class Apel extends Buah{
        public function makan(){
            return "Makan sampai bagian tengahnya";
        }
    }

    class Jeruk extends Buah{
        public function makan(){
            return "Kupas terus dimakan";
        }
    }

    $apel = new Apel;
    echo $apel->makan();

    echo "<br>";

    $jeruk = new Jeruk;
    echo $jeruk->makan();
?>