<?php
// latihan magic methods 2 
class laptop {
    private $merek;
    private $harga;

    public function __construct($mrk, $hrg){
        $this->merek = $mrk;
        $this->harga = $hrg;
    }

    public function __toString(){
        return "laptop : $this->merek\nharga : Rp " . number_format($this->harga, 0, ',', '.');
    }

    public function __get($name){
        return "anda tidak boleh mengakses '$name'\n";
    }

    public function __set($name, $newValue){
        echo "anda tidak bisa mengubah '$name', dengan value '$newValue'\n";
    }

    public function __call($name, $arguments){
        return "syntax error, unfinded method '$name'\n";
    }
}

$laptop1 = new laptop("ASUS", 9000000);
echo $laptop1;
echo "\n";
echo $laptop1->harga;
$laptop1->merk = "HP";
echo $laptop1->upgradeRam(13);
