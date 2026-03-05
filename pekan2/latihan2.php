<form method="post" action="#">
    Nama :
    <input type="text" name="nama" />
    <br> Nilai :
    <input type="text" name="nilai"/>
    <br>
    <input type="submit" name="proses" value="proses"/>
</form>

<?php
//tangkap request dari form
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];
$proses = $_POST['proses'];
$ket = ($nilai >= 60) ? "Lulus" : "Tidak Lulus";

//Cetak jika sudah di proses
if (isset($proses)) {
?>

Nama Siswa : <?= $nama ?>
<br>NIlai: <?= $nilai ?>
<br>Keterangan : <?= $ket ?>

<?php } ?>
