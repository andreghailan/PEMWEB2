<?php

//member 1 
class Perkenalan {
    public $nama;
    public $almaat;
    public $jurusan;


    //member 2 konstruktor untuk menginisialisasi nilai property saat objek dibuat
    public function __construct($nama, $alamat, $jurusan){
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->jurusan = $jurusan;
    }
}

//membuat objek dari class Perkenalan
$perkenalan = new Perkenalan("Dimas", "Jl. Merdeka No. 123", "Informatika");   

//cetak data dari class perkenalan
echo "Nama : " . $perkenalan->nama . "<br>";
echo "Alamat : " . $perkenalan->alamat . "<br>";
echo "Jurusan : " . $perkenalan->jurusan . "<br>";