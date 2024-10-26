<?php
// menghitung luas persegi panjang
$panjang = 20;
$lebar = 7;

echo"luas persegi panjang adalah=", $panjang * $lebar;
echo "<br>";

// membuat function menghitung luas persegi
function rumus_persegi_panjang ($panjang, $lebar)
{
    $hasil = $panjang * $lebar;
     return $hasil;
}
$panjang = 25;
$lebar = 10;
$hasil_penjumlahan = rumus_persegi_panjang($panjang, $lebar);
echo "hasil dari persegi panjang = $panjang * $lebar";
echo "<br>";
echo "adalah $hasil_penjumlahan <br>";

// membuat class
class rumus_persegi_panjang
{
    public function rumus_persegi_panjang ($panjang, $lebar)
    {
        $jawaban = $panjang * $lebar;
        return $jawaban;
    }
}
$panjang = 30;
$lebar = 10;

$persegipanjang = new rumus_persegi_panjang;
echo "hasil dari class diatas adalah =",$persegipanjang->rumus_persegi_panjang($panjang,$lebar);
echo "<br>";
echo "<br>";
echo "<br>";


// keliling persegi panjang
echo "Menghitung Keliling Persegi <br>";

// hitung keliling persegi panjang

$p = 30;
$l = 10;
$k = 2;
$keliling = $k * $p * $l;
echo "hasil dari keliling persegi panjang = $keliling";
echo "<br>";

// function keliling persegi panjang
function keliling_persegi_panjang ($panjang,$lebar){
    return 2* ($panjang * $lebar);
}

$panjang = 24;
$luas = 13;

$keliling = keliling_persegi_panjang($panjang, $lebar);
echo "keliling persegi panjang adalah= " .$keliling;
echo "<br>";

// membuat class keliling persegi panjang

class keliling_persegi_panjang{
    private $panjang;
    private $lebar;
    public function __construct($panjang, $lebar){
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }
    public function hitungKeliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}


$keliling_persegi_panjang = new keliling_persegi_panjang(45, 20);
echo "Keliling persegi panjang Adalah: " . $keliling_persegi_panjang->hitungKeliling();
