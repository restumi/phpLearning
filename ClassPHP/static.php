<?php
// static class dan static method adalah element yang dapat digunakan tanpa membuat object dari class tersebut
// element static menggunakan self::
// jika element non static, pakai $this->

class Tiket {
    private static $id_tiket = 1;
    private static $totalTiket = 0;
    private $id;

    public function __construct(){
        $this->id = self::$id_tiket++;
        self::$totalTiket++;
    }

    public static function getTotalTiket(){
        return "jumlah tiket : " . self::$totalTiket;
    }

    public function getIdTiket(){
        return "id tiket : $this->id";
    }

    public function setTotalTiket($value){
        self::$totalTiket = $value;
        return "total tiket setelah di ubah : " . self::$totalTiket;
    }
}

$tiket1 = new Tiket();
$tiket2 = new Tiket();
$tiket3 = new Tiket();
$tiket4 = new Tiket();
$tiket5 = new Tiket();

echo $tiket1->getIdTiket() . "\n";
echo $tiket3->getIdTiket() . "\n";
echo $tiket5->getIdTiket() . "\n";
echo $tiket5->setTotalTiket(10) . "\n";
echo tiket::getTotalTiket();