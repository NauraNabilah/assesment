<?php
class Aritmatika {
    public $x;
    private $y;
    protected $z;

    public function tambah($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

        return $this->x + $this->y + $this->z;

    }

        public function kurang($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

        return $this->x - $this->y - $this->z;

    }

        public function kali($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

        return $this->x * $this->y * $this->z;

    }

        public function bagi($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

        return $this->x / $this->y / $this->z;

    }

        public function modulus($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;

        return $this->x % $this->y % $this->z;

    }
}

// $hitung = new Aritmatika();

// echo $hitung->tambah(4, 5, 6);
// echo "<br>";
// echo $hitung->kurang(90, 50, 10);
// echo "<br>";
// echo $hitung->kali(5, 6, 3);
// echo "<br>";
// echo $hitung->bagi(100, 2, 5);
// echo "<br>";
// echo $hitung->modulus(10, 2, 1);


?>