<?php
// == cek value
// === cek value + type data

$hari = "selasa";

if($hari == "senin" || $hari == "selasa" || $hari = "rabu"){
    echo "hari $hari kita menggunkan seragam osis";
} elseif($hari = "kamis"){
    echo "hari $hari kita menggunakan seragam batik";
} elseif($hari = "sabtu" || $hari == "minggu"){
    echo "libur pak";
} else {
    echo "hari $hari pake seragam pramuka";
}

echo "\n";

// latihan pengkondisian
// skenario pertama
$nilai = 1000;

if($nilai >= 90 && $nilai <= 100){
    echo "nilai $nilai = A";
} elseif($nilai >= 80 && $nilai <= 89){
    echo "nilai $nilai = B";
} elseif($nilai >= 70 && $nilai <= 79){
    echo "nilai $nilai = C";
} elseif($nilai >= 0 && $nilai <= 69){
    echo "nilai $nilai = D";
} else {
    echo "nilai tidak valid";
}

echo "\n";
// skenario kedua
date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if($jam >= date("00:00") && $jam <= date("04:00")){
    echo "$jam = dini hari";
} elseif ($jam >= date("04:01") && $jam <= date("10:00")){
    echo "$jam = pagi hari";
} elseif($jam >= date("10:01") && $jam <= date("15:00")){
    echo "$jam = siang hari";
} elseif($jam >= date("15:01") && $jam <= date("17:30")){
    echo "$jam = sore hari";
} elseif($jam >= date("17:31") && $jam <= date("18:30")){
    echo "$jam = petang";
} elseif($jam >= date("18:31") && $jam <= date("24:00")){
    echo "$jam = malam hari";
} else{
    echo "dunia lain";
}


