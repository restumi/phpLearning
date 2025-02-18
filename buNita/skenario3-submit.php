<?php 
$tugas = [
    "15:00" => "pulang sekolah",
    "15:45" => "barusan sampai rumah",
    "17:45" => "belajar",
    "18:00" => "membantu menyiapkan bumbu",
    "18:05" => "Shalat maghrib",
    "18:35" => "makan malam",
    "19:00" => "mandi",
    "19:05" => "shalat isya",
    "19:35" => "mengaji",
    "20:05" => "chatingan dengan raya",
    "20:35" => "mengobrol dengan keluarganya",
    "21:05" => "menghafalkan dialog untuk festival",
    "21:59" => "Waktu kosong untuk Andi",
    "22:00" => "tidur"
];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["waktu"]) && isset($_POST["tugas"])) {
        // Tangkap data yang dikirim dari form
        $waktu = $_POST["waktu"];
        $isTugas = $_POST["tugas"];
        // Periksa apakah nilai yang dikirim ada di dalam daftar tugas
        if (array_key_exists($waktu, $tugas)) {
            if($isTugas == 'false') {
                $tugas["17:45"] = "Waktu luang";
                echo "pada jam " . $waktu . " Andi sedang " . htmlspecialchars($tugas[$waktu]. " dan tidak ada tugas");
            } else {
                echo "pada jam " . $waktu . "Andi sedang " . htmlspecialchars($tugas[$waktu]);
            }
        } else {
            echo "Pilihan tidak valid!";
        }
    } else {
        echo "Anda belum memilih tugas!";
    }
} else {
    echo "Akses tidak valid!";
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table>
    <tr>
        <th>Waktu</th>
        <th>aktifitas</th>
    </tr>
        <?php
            foreach ($tugas as $key => $value){
                echo "
<tr>
    <td>$key</td>
    <td>$value</td>
</tr>";
            }
        ?>
</table>
</body>
</html>