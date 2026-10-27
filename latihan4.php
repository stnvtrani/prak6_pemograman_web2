<?php 
class  pengguna {
    public function tampilkanData(){
        echo "Peran : Pengguna Sistem Informasi";
    }
}

class mahasiswa extends pengguna {
    public function tampilkanPeran(){
        echo "Peran : Mahasiswa";
    }
}
class dosen extends pengguna {
    public function tampilkanPeran(){
        echo "Peran: Dosen";
    }
}
$mhs1 = new mahasiswa();
$dosen = new dosen();

$mhs1->tampilkanPeran();
echo "<br>";
$dosen->tampilkanPeran();
echo "<br>";
?>