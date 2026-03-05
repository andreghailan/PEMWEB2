<?php
$ar_buah = ['pepaya', 'mangga', 'pisang', 'jambu'];
//ganti buah pisang
$ar_buah[2] = 'jeruk';
//hapus buah jambu
unset($ar_buah[3]);
//nambah buah
$ar_buah[] = 'semangka';

foreach ($ar_buah as $buah){
    echo $buah . '<br>';
}

echo '<hr>';
echo '---Cetak Pasangan Key & Value---';

 foreach ($ar_buah as $id => $buah){
    echo '<br>buah id '.$id.' = '.$buah;
 }
?>
