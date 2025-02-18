<?php

// encapslation atau menyembunyikan data dengan privat variable
class akunBank{
    private $saldo;

    public function __construct($saldoAwal){
        $this->saldo = $saldoAwal;
    }

    public function lihatSaldo(){
        return "saldo anda adalah sebesar Rp. " . number_format($this->saldo, 0 , ',', '.');
    }

    public function tambahSaldo($tambah){
        $this->saldo += $tambah;
        $this->plus = $tambah;
        return "Rp. " . number_format($this->plus, 0, ',', '.') . " berhasil ditambahkan" . "\n" . "saldo anda sekarang sebesar Rp. " . number_format($this->saldo, 0, ',', '.');
    }

    public function tarikSaldo($tarik){
        $this->saldo -= $tarik;
        $this->min = $tarik;
        return "Rp. " . number_format($this->min, 0, ',', '.') . " berhasil ditarik" . "\n" . "saldo anda tersisa " . number_format($this->saldo, 0, ',', '.');
    }
}

echo "class akunBank\n";

$saldoKu = new akunBank(5000000);
echo $saldoKu->lihatSaldo() . "\n";
echo "\n";
echo $saldoKu->tambahSaldo(3000000) . "\n";
echo "\n";
echo $saldoKu->tarikSaldo(2000000);
echo "\n";

// mini project
class handphone{
    public $merk;
    public $rom;
    public $cipset;
    private $harga;

    public function __construct($merk, $rom, $cipset, $harga){
        $this->merk = $merk;
        $this->rom = $rom;
        $this->cipset = $cipset;
        $this->harga = $harga;
    }

    public function infoHp(){
        return "merk hp ini adalah $this->merk, dengan rom $this->rom, dan cipset $this->cipset";
    }

    public function lihatHarga(){
        return "harga = " . number_format($this->harga, 0, ',', '.');
    }

    public function ubahHarga($ubah){
        if($ubah < 0){
            return "error, harga tidak boleh negative.";
        }
        $this->harga = $ubah;
        return "harga setelah diubah adalah " . number_format($this->harga, 0, ',', '.');
    }
}

echo "\n";
echo "class hanphone";
$hpKu = new handphone("oppo", "64gb", "dragonBall", 2000000);
echo "\n" . $hpKu->infoHp();
echo "\n" . $hpKu->lihatHarga();
echo "\n" . $hpKu->ubahHarga(3000000);