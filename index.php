<?php
include "nyoba.php";
$hasil = new Aritmatika();

echo '<H1>Operasi Aritmatika</H1>';
echo '<form method="POST">';
echo '<input type="number" name="x"> &nbsp;';
echo '<select name="operasi">
<option value="tambah">+</option>
<option value="kurang">-</option>
<option value="kali">x</option>
<option value="bagi">:</option>
<option value="modulus">%</option>
</select> &nbsp;';
echo '<input type="text" name="y"> &nbsp;';
echo '<select name="operasi">
<option value="tambah">+</option>
<option value="kurang">-</option>
<option value="kali">x</option>
<option value="bagi">:</option>
<option value="modulus">%</option>
</select> &nbsp;';
echo '<input type="text" name="z"> &nbsp;';
echo '<label>=</label> &nbsp;';
echo '<input type="submit" value="jumlah">';
echo '</form>';

if ($_POST) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    $z = $_POST['z'];

    if ($_POST['operasi'] == "tambah") {
        echo "HASIL : ".$x." + ".$y." + ".$z." = ".$hasil->tambah($x, $y, $z)."<br> </br>";
    }elseif ($_POST['operasi'] == "kurang") {
        echo "HASIL : ".$x." - ".$y." - ".$z." = ".$hasil->kurang($x, $y, $z)."<br> </br>";
    }elseif ($_POST['operasi'] == "kali") {
        echo "HASIL : ".$x." x ".$y." x ".$z." = ".$hasil->kali($x, $y, $z)."<br> </br>";
    }elseif ($_POST['operasi'] == "bagi") {
        echo "HASIL : ".$x." : ".$y." : ".$z." = ".$hasil->bagi($x, $y, $z)."<br> </br>";
    }elseif ($_POST['operasi'] == "modulus") {
        echo "HASIL : ".$x." % ".$y." % ".$z." = ".$hasil->modulus($x, $y, $z)."<br> </br>";
    }
}
?>