<?php
$tugas = [
    "15:00" => "pulang sekolah",
    "15:45" => "sampai rumah",
    "17:45" => "Andi selesai belajar",
    "18:00" => "Andi membantu menyiapkan bumbu",
    "18:05" => "Andi Shalat maghrib",
    "18:35" => "Andi makan malam",
    "19:00" => "Andi selesai mandi",
    "19:05" => "Andi shalat isya",
    "19:35" => "Andi mengaji",
    "20:05" => "Andi chatingan dengan raya",
    "20:35" => "Andi mengobrol dengan keluarganya",
    "21:05" => "Andi menghafalkan dialog untuk festival",
    "21:59" => "Waktu kosong untuk Andi",
    "22:00" => "Andi tidur"
];


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jadwal Andi</title>
</head>
<body>
<p>Affan Helmi S.- 01</p>
<p>Restu Maulana i.- 27</p>
<h2>List Jadwal</h2>
<form action="part3-submit.php" method="post">
    <label>Pilihan kegiatan Andi</label>
        <select name="waktu" id="">
            <?php
                foreach($tugas as $key => $value){
                    echo "<option value='$key'>$key</option>";
                };
            ?>
        </select>
        <label for="tugas">
            <input type="radio" name="tugas" value="true">Ada tugas
            <input type="radio" name="tugas" value="false">Tidak ada tugas
        </label>
    <input type="submit" value="submit">
</form>

</body>
</html>