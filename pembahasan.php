<?php
class Aritmatika {
    public $x, $y;
    private $d, $t;
    protected $a, $b;

    public function tambah($x, $y) {
        $this->$x = $x;
        $this->$y = $y;

        return $this->$x + $this->$y;
    }

    public function kurang($d, $t) {
        $this->$d = $d;
        $this->$t = $t;

        return $this->$d - $this->$t;
    }

    public function kali($a, $b) {
        $this->$a = $a;
        $this->$b = $b;

        return $this->$a * $this->$b;
    }

    public function bagi($x, $y) {
        $this->$x = $x;
        $this->$y = $y;

        return $this->$x / $this->$y;
    }
}


$hitung = new Aritmatika();

echo $hitung->tambah(4, 5);
echo "<br>";
echo $hitung->kurang(60, 4);
echo "<br>";
echo $hitung->kali(5, 7);
echo "<br>";
echo $hitung->bagi(4, 2);

?>

