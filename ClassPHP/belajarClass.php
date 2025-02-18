<?php
// materi awal class
class laptop{
    // class laptop dengan property dibawah ini:
    public $merk;
    public $prosesor;
    public $ram;

    // __construct befungsi untuk mengatur urutan property
    public function __construct($ram, $merk, $prosesor){
        $this->merk = $merk;
        $this->prosesor = $prosesor;
        $this->ram = $ram;
    }

    // code ini berfungsi untuk menampilkan info property
    public function info(){
        return "Laptop merk $this->merk dengan prosesor $this->prosesor dan ram sebesar $this->ram";
    }
}

$laptopBaru = new laptop("32GB", "Asus", "Intel i9");
$laptopBekas = new laptop("8GB", "HP", "intel i3");
echo "\n";
echo "\n";
echo "info laptop baru saya = " . $laptopBaru->info();
echo "\n" . "info laptop bekas saya = " . $laptopBekas->info();

echo "\n";