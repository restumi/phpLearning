<?php

$waktu = [
    'hari' => ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'],
    'tanggal' => [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31],
    'bulan' => ['jan', 'feb', 'mar', 'apr', 'mei', 'jun', 'jul', 'ags', 'sep', 'okt', 'nov', 'des'],
    'tahun' => [2024, 2025, 2026]
];

for($i = 0; $i < count($waktu['hari']); $i++){
    echo $waktu['hari'][$i] . ", ";
}

echo "\n";

foreach ($waktu['tanggal'] as $tanggal){
    echo $tanggal . ", ";
}

echo "\n";
$j = 0;

while ($j < count($waktu['bulan'])){
    echo $waktu['bulan'][$j] . ', ';
    $j++;
}

echo "\n";
$k = 0;

do {
    echo $waktu['tahun'][$k] . ', ';
    $k++;
} while($k < count($waktu['tahun']));

echo "\n" . $waktu['hari'][0] .', '. $waktu['tanggal'][9] . '-' . $waktu['bulan'][2] . '-' . $waktu['tahun'][1];