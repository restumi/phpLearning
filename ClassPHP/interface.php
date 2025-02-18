<?php
// abstract mirip dengan interface
// bedanya adalah, jika interface tidak bisa memiliki property
// methodnya harus di definisikan di childClass
// ini digunakan untuk membuat kontrak method dengan childClass

interface hitungKeliling {
    public function keliling();
}

class persegi implements hitungKeliling {
    private $sisi;

    public function __construct($sisi){
        $this->sisi = $sisi;
    }

    public function keliling(){
        $hasil = $this->sisi * 4;
        return "keliling persegi dengan sisi $this->sisi adalah :\n$this->sisi x 4 = $hasil";
    }
}

class lingkaran implements hitungKeliling {
    private $jari;

    public function __construct($jr){
        $this->jari = $jr;
    }

    public function keliling(){
        $hasil = 2 * 3.14 * $this->jari;
        return "jadi panjang lingkaran dengan jari jari $this->jari adalah :\n2 x 3,14 x $this->jari = $hasil";
    }
}

$ktk = new persegi(10);
$ling = new lingkaran(14);
echo $ktk->keliling() . "\n";
echo $ling->keliling();