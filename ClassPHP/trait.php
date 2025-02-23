<?php
// trait
// Trait adalah fitur di PHP yang memungkinkan kita untuk menggunakan kembali kode dalam beberapa class tanpa menggunakan pewarisan (inheritance).

// ➡️ Kenapa butuh Trait?

// PHP hanya mendukung single inheritance (satu class hanya bisa mewarisi satu class lain).
// Trait memungkinkan kita menggunakan kembali method di beberapa class yang berbeda tanpa harus membuat hirarki class yang kompleks.

trait hitungTrait {
    public function tambah($a, $b) {
        $hasil = $a + $b;
        return "$a + $b = $hasil";
    }
    public function kurang($a, $b){
        $hasil = $a - $b;
        return "$a - $b = $hasil";
    }
    public function kali($a, $b){
        $hasil = $a * $b;
        return "$a x $b = $hasil";
    }
    public function bagi($a, $b){
        if($b == 0){
            return "tidak bisa membagi dengan 0";
        }
        $hasil = $a / $b;
        return "$a : $b = $hasil";
    }
}

class kalkulator {
    use hitungTrait;
}

class matematika {
    use hitungTrait;
}

$kalkulator = new kalkulator();
$mtk = new matematika();

echo $kalkulator->tambah(3,5) . "\n";
echo $mtk->kurang(7,5) . "\n";
echo $kalkulator->kali(4,5) . "\n";
echo $mtk->bagi(3,0);
