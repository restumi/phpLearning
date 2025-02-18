<?php

// plymorphism : method di class induk di timpa atau di buat ulang di childClass

class kendaraan{
    public $nama;
    public $kcptn;

    public function __construct($nama, $km){
        $this->nama = $nama;
        $this->kcptn = $km;
    }

    public function jalan(){
        return "berjalan di . . .";
    }

    public function kecepatan(){
        return "berjalan dengan kecepatan . . .";
    }

    public function statusKm(){
        if($this->kcptn > 500){
            return "kendaraan ini sangat cepat";
        } elseif($this->kcptn > 100 && $this->kcptn <= 500){
            return "kendaraan ini cukup cepat";
        } else{
            return "kendaraan ini sangat lambat";
        }
    }
}

class pesawat extends kendaraan{

    public function __construct($nama, $km){
        parent::__construct($nama, $km);
    }

    public function jalan(){
        return "pesawat $this->nama terbang dari sini ke sana";
    }

    public function kecepatan(){
        return "pesawat $this->nama berjalan di kecepatan $this->kcptn km/jam";
    }

    public function statusKm(){
        return parent::statusKm();
    }
}

class mobil extends kendaraan{

    public function __construct($nama, $km){
        parent::__construct($nama, $km);
    }

    public function jalan(){
        return "mobil $this->nama sangat nyaman";
    }

    public function kecepatan(){
        return "mobil $this->nama berjalan di kecepatan $this->kcptn km/jam";
    }

    public function statusKm(){
        return parent::statusKm();
    }
}

class motor extends kendaraan{

    public function __construct($nama, $km){
        parent::__construct($nama, $km);
    }

    public function jalan(){
        return "motor $this->nama berjalan gesit di jalan raya";
    }

    public function kecepatan(){
        return "motor $this->nama berjalan di kecepatan $this->kcptn km/jam";
    }

    public function statusKm(){
        return parent::statusKm();
    }
}

// di setiap child class, mereka menimpa method yg ada di induk class

$transportasi1 = new pesawat("Gatotkaca", 900);
$transportasi2 = new mobil("Dayhatsu", 120);
$transportasi3 = new motor("Suzki", 90);

echo $transportasi1->jalan() . "\n";
echo $transportasi2->jalan() . "\n";
echo $transportasi3->jalan() . "\n";
echo "\n";
echo $transportasi1->kecepatan() . "\n";
echo $transportasi2->kecepatan() . "\n";
echo $transportasi3->kecepatan() . "\n";
echo "\n";
echo $transportasi1->statusKm(). "\n";
echo $transportasi2->statusKm(). "\n";
echo $transportasi3->statusKm();