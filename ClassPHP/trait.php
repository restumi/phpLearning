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
}

class kalkulator {
    use hitungTrait;
}

class mtk {
    use hitungTrait;
}

$kalkulator = new kalkulator();
$mtk = new mtk();

echo $kalkulator->tambah(3,5) . "\n";
echo $kalkulator->kurang(7,5);
