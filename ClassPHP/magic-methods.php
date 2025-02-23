<?php
// magic methods adalah method bawaan dari php
// 1️⃣ __construct() → Dipanggil saat objek dibuat.
// 2️⃣ __destruct() → Dipanggil saat objek dihancurkan.
// 3️⃣ __toString() → Mengubah objek jadi string.
// 4️⃣ __get() → jika get digunakan, maka property tidak bisa diakses secara langsung
// 5️⃣ __set() → gunakan set agar value tidak sembarangan di ganti
// 6️⃣ __call() → memunculkan error jika memanggil method yg tidak ada

class mobil {
    private $merk;
    private $kecepatan;

    public function __construct($mrk, $kc){
        $this->merk = $mrk;
        $this->kecepatan = $kc;
    }

    public function __toString(){
        return "mobil : $this->merk\ndengan kecepatan $this->kecepatan km/jam" . "\n";
    }

    public function __get($name){
        return "property '$name' tidak bisa di akses langsung" . "\n";
    }

    public function __set($name, $newValue){
        echo "tidak bisa langsung mengubah '$name' menjadi '$newValue'" . "\n";
    }

    public function __call($name, $arguments){
        return "methods '$name' tidak ditemukan!\n";
    }
}

$mobil1 = new mobil("Toyota", 90);

echo $mobil1; // __toString function
echo $mobil1->merk; // akan memanggil method __get
echo $mobil1->kecepatan; // akan memanggil method __get
$mobil1->merk = "honda"; // __set function
echo $mobil1->tambahKm(90); // __call function