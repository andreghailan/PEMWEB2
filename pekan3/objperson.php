<?php
require_once 'Dosen.php';
require_once 'Mahasiswa.php';
require_once 'staff.php';
//ciptakan obj
$d1 = new Dosen('Budi','L','111','S.Kom, M.Kom');
$d2 = new Dosen('Siti','P','112','S.T, M.T');
$m1 = new Mahasiswa('Deden', 'L', 3, 'TI');
$m2 = new Mahasiswa('Mimin', 'P', 5, 'SI');
$s1 = new Staff('Andi', 'L', '222', 'Keuangan');
$s2 = new Staff('Dede', 'L', '333', 'Administrasi');
$data = [$d1, $d2, $m1, $m2, $s1, $s2];
echo '<h3>Data Civitas Kampus</h3>';
echo '<p>';

//print_r($data); die();
foreach($data as $d){
    echo $d->cetak();
}
echo '</p>';