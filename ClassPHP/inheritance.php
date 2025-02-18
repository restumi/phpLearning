<?php
// inheritance atau pewarisan class
class manusia{
    public $nama;
    public $umur;

    public function __construct($nama, $umur){
        $this->nama = $nama;
        $this->umur = $umur;
    }

    public function kenalan(){
        return "nama : " . ucfirst($this->nama) . ", umur : $this->umur tahun";
    }
}

class mahasiswa extends manusia{
    public $namaSekolah;

    public function __construct($nama, $umur, $sklh){
        parent::__construct($nama, $umur);
        $this->namaSekolah = $sklh;
    }

    public function infoMahasiswa(){
        return parent::kenalan() . "\nbersekolah di $this->namaSekolah";
    }
}

$teman = new mahasiswa("ouel", 16, "SMK N 8");
echo $teman->infoMahasiswa();