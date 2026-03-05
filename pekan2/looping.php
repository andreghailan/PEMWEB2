===Cetak Angka 1 s/d 10===
<?php

for ($no = 1; $no <= 10; $no++) {
    if ($no  %2 == 0) {
        echo '<br> angka '.$no;
    }
}

echo '<br>';
?>

===Cetak Angka 1 s/d 1===
<?php

for ($no = 10; $no >= 1; $no--) {
    echo '<br>Angka  '.$no;
}
?>