<?php

//variabel
$nama = "Dimas";
$umur = 20;
$alamat = "Jakarta Utara";
$berat_badan = 70.5;

//cetak variabel

echo $nama;
echo "<br>";
echo 'Nama saya ' . $nama . ' alamat di' . $alamat . ' berat badan saya ' . $berat_badan . ' kg';
echo "<hr>";

//variabel sistem
echo $_SERVER['SERVER_NAME'];
echo "<br>";
echo $_SERVER['DOCUMENT_ROOT'];
echo "<br>";

echo "<hr>";

//IF
//JIKA UMUR LEBIH 20 TAHUN s.d 50 TAHUN, ANDA DAPAT MENGENDARAI MOBIL
//JIKA UMUR LEBIH 17 TAHUN, ANDA DAPAT MENGENDARAI MOTOR
//JIKA UMUR LEBIH 10 TAHUN, ANDA DAPAT MENGENDARAI SEPEDA

$umur = 9;
if ($umur > 20 && $umur <= 50) {
    echo "Anda dapat mengendarai mobil";
} elseif ($umur > 17 && $umur <= 20) {
    echo "Anda dapat mengendarai motor";
} elseif ($umur > 10 && $umur <= 17) {
    echo "Anda dapat mengendarai sepeda";
} else {
    echo "Anda masih terlalu muda untuk mengendarai kendaraan apapun";
}



//variabel konstanta

$jari2 = 15;
define("PHI", 3.14);
$luas = PHI * $jari2 * $jari2;
echo "<hr>";
echo "<span style='color:blue'>Luas lingkaran dengan jari-jari $jari2 cm adalah $luas ";

echo "<hr>";

//ternary
$nilaiku = 7;
echo $nilaiku > 5 ? "Bagus" : "Buruk";
echo "<hr>";  

//switch case
$angka=70;
switch ($angka) {
    case $angka <= 70:
        echo "angka cukup";
        break;
    case $angka <= 80:
        echo "Angka memuaskan";
        break;
    case $angka <= 90:
        echo "Angka sangat memuaskan";
        break;
    default:
        echo "Angka tidak valid";
}