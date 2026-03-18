<?php
//sertakan file induk class
require_once 'Person.php';
class Staff extends Person{
    //member1 var
    public $nip;
    public $divisi;
    //member2 konstruktor
    public function __construct($nama,$gender,$nip,$divisi)
    {
    parent::__construct($nama,$gender);
    $this->nip = $nip;
    $this->divisi = $divisi;
    }
    //member3 method2
    public function cetak(){
    parent::cetak();
    echo '<br/>NIP: '.$this->nip;
    echo '<br/>Divisi: '.$this->divisi;
    echo '<hr/>';
    }
}