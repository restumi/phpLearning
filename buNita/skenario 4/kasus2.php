<?php

$jumlahAyam = 30;
$lirik = [
    'mati' => 'mati satu tinggallah ',
    'induk' => 'induknya'
];

for ($i = $jumlahAyam; $i > 0; $i--) {
    if($i == 1){
        echo "anak ayam turunlah 1, {$lirik['mati']}{$lirik['induk']}\n";
    } else {
        echo "anak ayam turun $i, {$lirik['mati']}" . ($i - 1) . "\n";
    }

}