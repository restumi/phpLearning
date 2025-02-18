<?php
class mobil{
    private $kecepatan;
    public $warna;
    public $merk;

    public function __construct($merk, $warna, $km){

        $this->merk = $merk;
        $this->warna = $warna;
        $this->kecepatan = $km;

        if($km > 200){
            return "jangan terlalu ngebut, berbahaya.";
            $this->kecepatan = 200;
        } elseif($km < 0){
            return "mengapa anda ingin mundur?";
            $this->kecepatan = 0;
        } else{
            $this->kecepatan = $km;
        }
    }

    public function checkMobil(){
        return "mobil : $this->merk, warna : $this->warna.\n" . "Berjalan dengan kecepatan $this->kecepatan" . "km/jam";
    }

    public function tambahKecepatan($tambahiKm){
        $this->kecepatan += $tambahiKm;
        if($this->kecepatan > 200){
            return "anda tidak boleh melebihi 200km/jam";
        }
        return "menghitung kecepatan . . .,\nsaat ini anda melaju dengan kecepatan $this->kecepatan" . "km/jam";
    }

    public function kurangiKecepatan($kurang){
        $this->kecepatan -= $kurang;
        if($this->kecepatan < 0){
            return "anda tidak berjalan";
        };
        return "menghitung kecepatan . . .,\nsaat ini anda melaju dengan kecepatan $this->kecepatan" . "km/jam";
    }
}

$mobilku = new mobil("Toyota", "Biru", 0);
echo $mobilku->checkMobil() . "\n";
echo $mobilku->tambahKecepatan(150) . "\n";
echo $mobilku->kurangiKecepatan(100);