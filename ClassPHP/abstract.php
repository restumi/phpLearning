<?php
// abstract class : class abstrak yg method nya harus di definisikan di childClass
// digunakan untuk memastikan bahwa semua childClass memiliki method

abstract class bangunDatar {
    abstract public function luas();
}

class persegi extends bangunDatar {
    private $sisi;

    public function __construct($sisi){
        $this->sisi = $sisi;
    }

    public function luas(){
        $hasil = $this->sisi * $this->sisi;
        return "luas persegi dengan panjang sisi $this->sisi adalah : \n$this->sisi x $this->sisi = $hasil";
    }
}

class lingkaran extends bangunDatar {
    private $jariJari;

    public function __construct($jari){
        $this->jariJari = $jari;
    }

    public function luas(){
        $hasil = 3.14 * $this->jariJari * $this->jariJari;
        return "luas lingkaran dengan jari jari $this->jariJari adalah :\n3,14 x $this->jariJari x $this->jariJari = $hasil";
    }
}

$kotak = new persegi(4);
$bulat = new lingkaran(5);

echo $kotak->luas() . "\n";
echo $bulat->luas();