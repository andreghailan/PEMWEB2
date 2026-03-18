<?php

//OOP - menggunakan class dan object
class Mahasiswa {
    //property
    public $nama;
    public $nim;
    public $jurusan;

    //method
    public function tampilData(){
        echo "Nama : $this->nama <br>";
        echo "NIM : $this->nim <br>";
        echo "Jurusan : $this->jurusan <br>";
    }   
}
//objek biasanya dibuat dengan menggunakan keyword new diikuti dengan nama class yang ingin dibuat objeknya. 
//Setelah itu, kita bisa mengakses property dan method dari objek tersebut menggunakan operator 

$mhs1 = new Mahasiswa();

$mhs1->nama = "Dimas";
$mhs1->nim = "12345678";
$mhs1->jurusan = "Informatika";
$mhs1->tampilData();